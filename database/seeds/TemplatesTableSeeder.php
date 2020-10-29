<?php

use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('templates')->insert([
                [
                'template_name' => "Template GSW Long Thành",
                'url_interface' =>  "https://gswlongthanh.anzbds.com/"
                ], 
                [
                    'template_name' => "Template ST Moritz",
                    'url_interface' =>  "https://moritz.anzbds.com/"
                ]
            ]
        );
    }
}
