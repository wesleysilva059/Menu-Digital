<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidade extends Model
{
    protected $table = 'unidades';
    protected $guarded = [];

    public function promocao(){
        return $this->hasMany('App\Models\Promocao');
    }
}
