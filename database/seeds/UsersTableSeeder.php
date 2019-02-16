<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([ 
            [   'name' => 'testerA',
                'username' => 'testerA',
                'email' => 'testerA@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '2',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'testerB',
                'username' => 'testerB',
                'email' => 'testerB@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '3',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'testerC',
                'username' => 'testerC',
                'email' => 'testerC@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '3',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
