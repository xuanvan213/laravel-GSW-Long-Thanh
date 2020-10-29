<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    //dinh nghia lai ten bang
    protected $table = "projects";
    //dinh nghia lại khóa chính
    public $primaryKey = "id";
    public $timestamps = true;
}
