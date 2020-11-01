<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigTypes extends Model
{
    //dinh nghia lai ten bang
    protected $table = "gsw_configtypes";
    //dinh nghia lại khóa chính
    public $primaryKey = "id";
    public $timestamps = false;
}
