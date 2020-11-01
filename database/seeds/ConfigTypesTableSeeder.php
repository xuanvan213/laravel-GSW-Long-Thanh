<?php

use Illuminate\Database\Seeder;

class ConfigTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gsw_configtypes')->insert([
            [
                'type_name'=>'a'
            ],
            [
                'type_name'=>'p'
            ],
            [
                'type_name'=>'img'
            ],
            [
                'type_name'=>'textarea'
            ],
            [
                'type_name'=>'h4'
            ],
            [
                'type_name'=>'strong'
            ]
        ]);
    }
}
