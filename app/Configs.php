<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configs extends Model
{
    //dinh nghia lai ten bang
    protected $table = "gsw_configs";
    //dinh nghia lại khóa chính
    public $primaryKey = "id";
    public $timestamps = false;
}
