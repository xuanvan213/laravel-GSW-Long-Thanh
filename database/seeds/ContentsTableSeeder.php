<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            [
                'content_name' => "Slide Trang Chủ",
                'content'=>'',
                'template_id' =>  "1"
            ], 
            [
                'content_name' => "Giới Thiệu",
                'content'=>'',
                'template_id' =>  "1"
            ],
            [
                'content_name' => "Tiện Ích",
                'content'=>'',
                'template_id' =>  "1"
            ],
            [
                'content_name' => "Thư Viện",
                'content'=>'',
                'template_id' =>  "1"
            ],
            [
                'content_name' => "Căn Hộ Mẫu",
                'content'=>'',
                'template_id' =>  "1"
            ],
            [
                'content_name' => "Tiện Độ Dự Án",
                'content'=>'',
                'template_id' =>  "1"
            ],
            [
                'content_name' => "Slide Trang Chủ",
                'content'=>'',
                'template_id' =>  "2"
            ],
            [
                'content_name' => "Mô Tả Cuộc Sống",
                'content'=>'',
                'template_id' =>  "2"
            ],
            [
                'content_name' => "Mô Tả Vị Trí",
                'content'=>'',
                'template_id' =>  "2"
            ],
            [
                'content_name' => "Giá/m2",
                'content'=>'',
                'template_id' =>  "2"
            ],
            [
                'content_name' => "Sảnh Căn Hộ",
                'content'=>'',
                'template_id' =>  "2"
            ],
            [
                'content_name' => "Chức Năng Căn Hộ",
                'content'=>'',
                'template_id' =>  "2"
            ],
            [
                'content_name' => "Sảnh Văn Phòng",
                'content'=>'',
                'template_id' =>  "2"
            ],
            [
                'content_name' => "Tiện Ích Nội Khu",
                'content'=>'',
                'template_id' =>  "2"
            ],
        ]
    );
    }
}
