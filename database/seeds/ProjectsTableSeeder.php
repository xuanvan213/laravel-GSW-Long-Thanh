<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projectname= "GSW Long Thành";
        $slug = Str::slug($projectname, '-');
        DB::table('projects_table')->insert([
            [
                'name' => $projectname,
                'code' =>   $slug,
                'table_name' => "gsw_abouts"
            ],
            [
                'name' => $projectname,
                'code' =>   $slug,
                'table_name' => "gsw_configs"
            ],
            [
                'name' => $projectname,
                'code' =>   $slug,
                'table_name' => "gsw_confitypes"
            ],
            [
                'name' => $projectname,
                'code' =>   $slug,
                'table_name' => "gsw_gallery"
            ],
            [
                'name' => $projectname,
                'code' =>   $slug,
                'table_name' => "gsw_house_template"
            ],
            [
                'name' => $projectname,
                'code' =>   $slug,
                'table_name' => "gsw_menu"
            ],
            [
                'name' => $projectname,
                'code' =>   $slug,
                'table_name' => "gsw_slider"
            ],
            [
                'name' => $projectname,
                'code' =>   $slug,
                'table_name' => "gsw_status_project"
            ],
            [
                'name' => $projectname,
                'code' =>   $slug,
                'table_name' => "gsw_utilities"
            ]
        ]);
    }

}
