<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trangchu = "Trang Chủ";
        $gioithieu = "Giới Thiệu";
        $tienich = "Tiện Ích";
        $thuvien = "Thư Viện";
        $canhomau = "Căn Hộ Mẫu";
        $tiendo = "Tiến Độ";
        $lienhe = "Liên Hệ";

        DB::table('gsw_menu')->insert([
            [
                'menu_name'=>$trangchu,
                'url'=> Str::slug($trangchu, '-')
            ],
            [
                'menu_name'=>$gioithieu,
                'url'=> Str::slug($gioithieu, '-')
            ],
            [
                'menu_name'=>$tienich,
                'url'=> Str::slug($tienich, '-')
            ],
            [
                'menu_name'=>$thuvien,
                'url'=> Str::slug($thuvien, '-')
            ],
            [
                'menu_name'=>$canhomau,
                'url'=> Str::slug($canhomau, '-')
            ],
            [
                'menu_name'=>$tiendo,
                'url'=> Str::slug($tiendo, '-')
            ],
            [
                'menu_name'=>$lienhe,
                'url'=> Str::slug($lienhe, '-')
            ],            
        ]);
    }
    
}
