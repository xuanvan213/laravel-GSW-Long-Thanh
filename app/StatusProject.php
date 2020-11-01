<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusProject extends Model
{
    //dinh nghia lai ten bang
    protected $table = "gsw_status_project";
    //dinh nghia lại khóa chính
    public $primaryKey = "id";
    public $timestamps = false;
}
