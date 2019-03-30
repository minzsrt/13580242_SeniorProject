<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PhotographersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photographers')->insert([  
            [
                'name' => 'ปวริศ ญาณวุฒิ',
                'idcard' => '1900232120979',
                'birthday' => Carbon::now()->format('Y-m-d'),
                'sex' => 'ชาย',
                'address' => '120/1041 อาคารเพิร์ล แบงก์ค็อก',
                'sub_district' => 'พญาไท',
                'district' => 'พญาไท',
                'province' => 'กรุงเทพฯ',
                'zipcode' => '10400',
                'phone' => '0852721898',
                'id_scopework' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'id_user' => '2'
            ],
            [
                'name' => 'ชยานันต์ ภูรี',
                'idcard' => '1309931201304',
                'birthday' => Carbon::now()->format('Y-m-d'),
                'sex' => 'หญิง',
                'address' => '98/614 เดอะสเปซ คอนโด โคราช',
                'sub_district' => 'เทศบาลนครนครราชสีมา',
                'district' => 'เมืองนครนครราชสีมา',
                'province' => 'นครราชสีมา',
                'zipcode' => '30000',
                'phone' => '0852721898',
                'id_scopework' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'id_user' => '6'
            ],
            [
                'name' => 'ธนพล คิรากร',
                'idcard' => '1390021309987',
                'birthday' => Carbon::now()->format('Y-m-d'),
                'sex' => 'ชาย',
                'address' => '120/1041 อาคารเพิร์ล แบงก์ค็อก',
                'sub_district' => 'บางพูด',
                'district' => 'ปากเกร็ด',
                'province' => 'นนทบุรี',
                'zipcode' => '11120',
                'phone' => '0852721898',
                'id_scopework' => '1',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'id_user' => '7'
            ]
        ]);
        
    }
}
