<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //dinh nghia lai ten bang
    protected $table = "project_table";
    //dinh nghia lại khóa chính
    public $primaryKey = "id";
    public $timestamps = false;
}
