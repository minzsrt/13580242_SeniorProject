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
            [   
                'username' => 'admin',
                'email' => 'admin@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '1',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   
                'username' => 'Astudio',
                'email' => 'Astudio@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '2',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   
                'username' => 'Bee2019',
                'email' => 'Bee2019@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '3',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   
                'username' => 'Aileen',
                'email' => 'aileen@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '3',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   
                'username' => 'Renita',
                'email' => 'renita@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '3',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [   
                'username' => 'MalikaStudio',
                'email' => 'MalikaStudio@findpho.com',
                'password' => bcrypt('12345678'),
                'role_id' => '2',
                'remember_token' => str_random(10),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
