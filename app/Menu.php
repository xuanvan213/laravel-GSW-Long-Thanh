<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
   //dinh nghia lai ten bang
   protected $table = "menu";
   //dinh nghia lại khóa chính
   public $primaryKey = "id";
   public $timestamps = true;
}
