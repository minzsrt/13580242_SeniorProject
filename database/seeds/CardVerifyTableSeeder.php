<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CardVerifyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('verify_cards')->insert([
            [
                'copy_id_card' => 'verify/idcard.jpg',
                'id_user' => '2',
                'id_status' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'copy_id_card' => 'verify/idcard.jpg',
                'id_user' => '6',
                'id_status' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'copy_id_card' => 'verify/idcard.jpg',
                'id_user' => '7',
                'id_status' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
