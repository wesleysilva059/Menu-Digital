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

     public function getFormatedStatusAttribute()
    {
        $status = $this->attributes['status'];

        switch ($status) {
            case "0":
                $status = "Inativo";
                break;

            case "1":
                $status = "Ativo";
                break;
        }
        return $status;
    }
}
