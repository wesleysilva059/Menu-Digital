<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    protected $table = 'promocoes';
    protected $guarded = [];

    public function grupo(){
        return $this->belongsTo('App\Models\Grupo');
     }

     public function unidade(){
        return $this->belongsTo('App\Models\Unidade');
     }
}
