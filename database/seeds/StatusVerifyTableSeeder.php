<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatusVerifyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statusverifies')->insert([
            [
                'status_verify' => 'รอการตรวจสอบ',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'status_verify' => 'ยืนยันตัวตนแล้ว',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'status_verify' => 'ปฏิเสธการยืนยันตัวตน',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'status_verify' => 'ยังไม่ได้ยืนยันตัวตน',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
