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
            [   'name' => 'tester A',
                'username' => 'tester A',
                'email' => 'testerA@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '1',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'tester B',
                'username' => 'tester B',
                'email' => 'testerB@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '1',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   'name' => 'tester C',
                'username' => 'tester C',
                'email' => 'testerC@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '1',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
