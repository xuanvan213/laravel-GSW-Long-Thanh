<?php

use Illuminate\Database\Seeder;

class ConfigsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gsw_configs')->insert([
            [
                'name'=>'gioithieu',
                'value'=>"GIỚI THIỆU",
                'type_id'=>4
            ],
            [
                'name'=>'tienich',
                'value'=>"TIỆN ÍCH",
                'type_id'=>4
            ],
            [
                'name'=>'thuvien',
                'value'=>"THƯ VIỆN",
                'type_id'=>4
            ],
            [
                'name'=>'canhomau',
                'value'=>"CĂN HỘ MẪU",
                'type_id'=>4
            ],
            [
                'name'=>'tiendo',
                'value'=>"TIẾN ĐỘ",
                'type_id'=>4
            ],
            [
                'name'=>'lienhe',
                'value'=>"LIÊN HỆ VỚI CHÚNG TÔI",
                'type_id'=>4
            ],
            [
                'name'=>'formlienhe',
                'value'=>"FORM LIÊN HỆ",
                'type_id'=>4
            ],
            [
                'name'=>'qrandroid',
                'value'=>"android.jpg",
                'type_id'=>3
            ],
            [
                'name'=>'logoandroid',
                'value'=>"logo_ggplay.png",
                'type_id'=>3
            ],
            [
                'name'=>'qrios',
                'value'=>"ios.jpg",
                'type_id'=>3
            ],
            [
                'name'=>'logoappstore',
                'value'=>"logo-app-store.png",
                'type_id'=>3
            ],
            [
                'name'=>'reserved',
                'value'=>"2020 &copy; FTCJSC - All Rights Reserved",
                'type_id'=>1
            ],
            [
                'name'=>'address',
                'value'=>"41 đường 20, Phường Hiệp Bình Chánh, Quận Thủ Đức, Tp. Hồ Chí Minh, Việt Nam",
                'type_id'=>5
            ],
            [
                'name'=>'mail',
                'value'=>"info@anzbds.com",
                'type_id'=>5
            ],
            [
                'name'=>'hotline',
                'value'=>"0917 99 86 88",
                'type_id'=>2
            ],
        ]);
    }
}
