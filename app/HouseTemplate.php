<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseTemplate extends Model
{
    //dinh nghia lai ten bang
    protected $table = "gsw_house_template";
    //dinh nghia lại khóa chính
    public $primaryKey = "id";
    public $timestamps = false;
}
