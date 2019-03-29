<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('package_cards')->insert([
            [   
                'price' => '3500',
                'detail' => 'ลูกค้าจะได้รับภาพโดยประมาณ 200-300 ภาพ ไฟล์ภาพเป็นไฟล์ JPG ขนาดเต็ม ใช้ขยายและอัดกรอบขนาดใหญ่ได้ และภาพขนาดย่อ (สำหรับ social media) ที่ผ่านการปรับแต่งแสงและสีแล้ว ลบสิวหรือรอยที่เด่นชัดเท่านั้น',
                'shipping' => '0',
                'id_category' => '1',
                'id_formattime' => '1',
                'id_user' => '2',
			    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   
                'price' => '4900',
                'detail' => 'ลูกค้าจะได้รับภาพโดยประมาณ 300-500 ภาพ ไฟล์ภาพเป็นไฟล์ JPG ขนาดเต็ม ใช้ขยายและอัดกรอบขนาดใหญ่ได้ และภาพขนาดย่อ (สำหรับ social media) ที่ผ่านการปรับแต่งแสงและสีแล้ว ลบสิวหรือรอยที่เด่นชัดเท่านั้น',
                'shipping' => '0',
                'id_category' => '1',
                'id_formattime' => '2',
                'id_user' => '2',
			    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   
                'price' => '3000',
                'detail' => 'ถ่ายภาพไม่จำกัดจำนวน สอนโพสท่าและจัดวางองค์ประกอบภาพให้ รูปถ่ายในรูปแบบ DVD BOX SET พร้อมอัดรูป 4*6 10ใบ',
                'shipping' => '1',
                'id_category' => '1',
                'id_formattime' => '1',
                'id_user' => '6',
			    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   
                'price' => '4500',
                'detail' => 'ถ่ายภาพไม่จำกัดจำนวน สอนโพสท่าและจัดวางองค์ประกอบภาพให้ รูปถ่ายในรูปแบบ DVD BOX SET พร้อมอัดรูป 4*6 20ใบ',
                'shipping' => '1',
                'id_category' => '1',
                'id_formattime' => '2',
                'id_user' => '6',
			    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   
                'price' => '3000',
                'detail' => 'ถ่ายภาพไม่จำกัดจำนวน สอนโพสท่าและจัดวางองค์ประกอบภาพให้ รูปถ่ายในรูปแบบ DVD BOX SET พร้อมอัดรูป 4*6 10ใบ',
                'shipping' => '1',
                'id_category' => '2',
                'id_formattime' => '1',
                'id_user' => '6',
			    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [   
                'price' => '4500',
                'detail' => 'ถ่ายภาพไม่จำกัดจำนวน สอนโพสท่าและจัดวางองค์ประกอบภาพให้ รูปถ่ายในรูปแบบ DVD BOX SET พร้อมอัดรูป 4*6 20ใบ',
                'shipping' => '1',
                'id_category' => '2',
                'id_formattime' => '2',
                'id_user' => '6',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]    

        ]);
    }
}
