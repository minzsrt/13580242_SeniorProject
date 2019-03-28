<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderSendworkEmail extends Notification
{
    use Queueable;
    private $photographer;
    private $order;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($photographer)
    {
        $this->photographer = $photographer;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('ช่างภาพ '.$this->photographer->username.'ได้ส่งงานให้คุณแล้ว')
            ->greeting('ช่างภาพ '.$this->photographer->username.'ได้ส่งงานให้คุณแล้ว')
            ->line('กรุณาตรวจสอบข้อมูลในเว็บไซต์')
            ->action('เข้าสู่เว็บไซต์', url('/'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
