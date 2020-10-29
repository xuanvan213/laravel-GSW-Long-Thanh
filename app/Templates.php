<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Templates extends Model
{
    //dinh nghia lai ten bang
    protected $table = "templates";
    //dinh nghia lại khóa chính
    public $primaryKey = "id";
    public $timestamps = true;
}
