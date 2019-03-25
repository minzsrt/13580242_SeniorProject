<?php

namespace App\Http\Controllers;

use App\Events\TriggerNotification;
use App\Notification as NotificationModel;
use App\Notifications\OrderComfirmPaymentEmail;
use App\Order;
use App\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Notification;
use OmiseCharge;

class PaymentController extends Controller
{
    public function __construct()
    {
        define('OMISE_API_VERSION', '2017-11-02');
        define('OMISE_PUBLIC_KEY', 'pkey_test_5faugmy9xfv3xyavv2c');
        define('OMISE_SECRET_KEY', 'skey_test_5ex5bjgyhmvyyjtv3y4');
    }

    public function index($id)
    {
        $order = Order::findOrFail($id);
        $chargeAmount = $order->total * 100;
        return view('listpayment', compact('order', 'chargeAmount'))->with([
            'OMISE_PUBLIC_KEY' => OMISE_PUBLIC_KEY,
        ]);
    }

    public function requestCharge(Request $request)
    {
        DB::beginTransaction();
        try {
            $order = Order::where('id', $request->order_id)->first();
            if (!$order) {
                throw new \Exception('order id not found');
            }
            $omiseAmount = $order->total * 100;
            $result = $this->charge($omiseAmount, $order->id, $request->omiseToken);

            if ($result === false) {
                throw new \Exception('credit card can not be charge.');
            }

            $pay = new Payment;
            $pay->order_id = $order->id;
            $pay->charge_id = $result['id'];
            $pay->transaction_id = $result['transaction'];
            $pay->location_charge = $result['location'];
            $pay->livemode = $result['livemode'];
            $pay->save();

            $order->status_order = 'ชำระเงินแล้ว';
            $order->status_payment = 'Paid';
            $order->save();

        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
        DB::commit();

        NotificationModel::create([
            'user_id' => $order->id_photographer,
            'message' => 'ผู้ว่าจ้าง '.$order->employer->username.' ได้ชำระเงินให้คุณแล้ว',
        ]);
        event(new TriggerNotification($order->id_photographer));
        Notification::route('mail', $order->employer->email)
            ->notify(new OrderComfirmPaymentEmail($order));

        return redirect('/paymentsuccess');
    }

    public function charge($amount = 0, $orderID, $omiseToken)
    {
        $charge = OmiseCharge::create(array(
            'amount' => $amount,
            'currency' => 'THB',
            'description' => 'Order ID: '.$orderID,
            'card' => $omiseToken,
        ));

        if ($charge['status'] == 'successful') {
            return $charge;
        } else {
            return false;
        }
    }
}
