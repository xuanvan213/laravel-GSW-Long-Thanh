<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contents;
use App\Media;
use App\Menu;
use App\Projects;
use App\Templates;

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
        $temp = Templates::all();
        return view('admin.form_content', ['templates'=>$temp]);
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
        $project = new Projects;
        $content = new Contents;
        $med = new Media;
        $project->name = $request->project_name;
        $project->url = $request->url_project;
        $project->title = $request->title;
        $project->keywords = $request->keyword;
        $project->description = $request->abouts;
        $file_name = $request->file('logoProject')->getClientOriginalName();
        $request->file('logoProject')->move('images/',$file_name);
        $project->logo = $file_name;
        $project->template_id = $request->template_id;
        $project->save();

        if($request->template_id == 1){
            
        }
        

        $pro = Projects::all();
        return view("admin.index", ['project'=>$pro]);
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
