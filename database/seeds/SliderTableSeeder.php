<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gsw_slider')->insert([
            [
                'image'=>'khu_do_thi2.jpg',
                'url_button'=> 'https://anzbds.com/du-an/6/gem-sky-world',
                'text'=>'xem chi tiết'
            ],
            [
                'image'=>'khu_do_thi3.jpg',
                'url_button'=> 'https://anzbds.com/du-an/6/gem-sky-world',
                'text'=>'xem chi tiết'
            ],
            [
                'image'=>'khu_do_thi.jpg',
                'url_button'=> 'https://anzbds.com/du-an/6/gem-sky-world',
                'text'=>'xem chi tiết'
            ],
            [
                'image'=>'khu-shophouse-thuong-mai-gem-sky-world.jpg',
                'url_button'=> 'https://anzbds.com/du-an/6/gem-sky-world',
                'text'=>'xem chi tiết'
            ],
        ]);
    }
}
