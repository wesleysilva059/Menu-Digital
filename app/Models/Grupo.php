<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
   protected $table = 'grupos';
   protected $guarded = [];

   public function produto(){
      return $this->hasMany('App\Models\Produto');
   }
}
