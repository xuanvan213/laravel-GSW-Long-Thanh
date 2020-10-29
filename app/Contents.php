<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    //dinh nghia lai ten bang
    protected $table = "contents";
    //dinh nghia lại khóa chính
    public $primaryKey = "id";
    public $timestamps = true;
}
