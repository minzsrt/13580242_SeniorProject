<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DepositaccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deposit_accounts')->insert([  
            [
                'deposit_account_number' => '1013456123',
                'book_bank_copy' => 'bookbank/ex-bookbank.jpg',
                'total' => '0',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'id_photographer' => '2',
                'id_bank' => '1'
            ],
            [
                'deposit_account_number' => '9863456123',
                'book_bank_copy' => 'bookbank/ex-bookbank.jpg',
                'total' => '0',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'id_photographer' => '6',
                'id_bank' => '2'
            ],
            [
                'deposit_account_number' => '3101398003',
                'book_bank_copy' => 'bookbank/ex-bookbank.jpg',
                'total' => '0',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'id_photographer' => '7',
                'id_bank' => '4'
            ]
        ]);
    }
}
