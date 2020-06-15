<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model{
   protected $table = 'produtos';
   protected $guarded = [];  
   
   public function grupo(){
      return $this->belongsTo('App\Models\Grupo');
   }
}