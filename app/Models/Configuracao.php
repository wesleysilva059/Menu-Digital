<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    protected $table = 'configuracoes';

    protected $guarded = [];

    public function getFormatedColunaOrdenaAttribute()
    {
        $coluna = $this->attributes['coluna_ordena'];

        switch ($coluna) {
            case "nome":
                $coluna = "Produtos";
                break;

            case "valor":
                $coluna = "Preço";
                break;
        }
        return $coluna;
    }

    public function getFormatedDirecaoOrdenaAttribute()
    {
        $direcao = $this->attributes['direcao_ordena'];

        switch ($direcao) {
            case "asc":
                $direcao = "Crecente";
                break;

            case "desc":
                $direcao = "Decrecente";
                break;
        }
        return $direcao;
    }
}
