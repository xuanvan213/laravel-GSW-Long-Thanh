<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abouts extends Model
{
   //dinh nghia lai ten bang
   protected $table = "gsw_abouts";
   //dinh nghia lại khóa chính
   public $primaryKey = "id";
   public $timestamps = false;
}
