<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //dinh nghia lai ten bang
    protected $table = "gsw_gallery";
    //dinh nghia lại khóa chính
    public $primaryKey = "id";
    public $timestamps = false;
}
