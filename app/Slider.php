<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    //dinh nghia lai ten bang
    protected $table = "gsw_slider";
    //dinh nghia lại khóa chính
    public $primaryKey = "id";
    public $timestamps = false;
}
