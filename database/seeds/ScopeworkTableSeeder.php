<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ScopeworkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scopeworks')->insert([
            ['scopework' => 'ทั่วประเทศ',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            ['scopework' => 'กรุงเทพและปริมลฑล',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            ['scopework' => 'ภาคเหนือ',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            ['scopework' => 'ภาคกลาง',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            ['scopework' => 'ภาคตะวันออก',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            ['scopework' => 'ภาคตะวันออกเฉียงเหนือ',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            ['scopework' => 'ภาคตะวันตก',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            ['scopework' => 'ภาคใต้',
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            
        ]);
    }
}
