<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Abouts;
use App\Configs;
use App\ConfigTypes;
use App\Gallery;
use App\Menu;
use App\HouseTemplate;
use App\Project;
use App\Slider;
use App\StatusProject;
use App\Utilities;

class AdminContentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.form_gsw');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider = new Slider;
        $abouts = new Abouts;
        $configs = new Configs;
        $configTypes = new ConfigTypes;
        $gallery = new Gallery;
        $houseTemplate = new HouseTemplate;
        $menu = new Menu;
        $project = new Project;
        $statusProject = new StatusProject;
        $utilities = new Utilities;

        $slider->image = $request->slide1;
        $file = resource_path('views\admin\form_gsw.blade.php');
        $destination = resource_path('views\admin\test.blade.php');
        // Storage::copy($file, $destination);
        $src = resource_path('views\admin'); 
      
        $dst = resource_path('views\test'); 
        
        
        function custom_copy($src, $dst) {  
  
            // open the source directory 
            $dir = opendir($src);  
          
            // Make the destination directory if not exist 
            @mkdir($dst);  
          
            // Loop through the files in source directory 
            while( $file = readdir($dir) ) {  
          
                if (( $file != '.' ) && ( $file != '..' )) {  
                    if ( is_dir($src . '/' . $file) )  
                    {  
          
                        // Recursively calling custom copy function 
                        // for sub directory  
                        custom_copy($src . '/' . $file, $dst . '/' . $file);  
          
                    }  
                    else {  
                        copy($src . '/' . $file, $dst . '/' . $file);  
                    }  
                }  
            }  
          
            closedir($dir); 
        }  
        custom_copy($src, $dst);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
      
    
}
