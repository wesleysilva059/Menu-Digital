<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Configuracao;
use App\Models\Produto;
use App\Models\Promocao;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
         $config = Configuracao::find(1);
         $tempo = $config->tempo_transicao;
 
         $bovinos = Produto::where('grupo_id', 1)->where('status', 1)->orderby($config->coluna_ordena,$config->direcao_ordena)->get()->chunk(8);
         $cont_gp_bovinos = $bovinos->count();
 
         $suinos = Produto::where('grupo_id', 2)->where('status', 1)->orderby($config->coluna_ordena,$config->direcao_ordena)->get()->chunk(8);
         $cont_gp_suinos = $suinos->count();
 
         $aves = Produto::where('grupo_id', 3)->where('status', 1)->orderby($config->coluna_ordena,$config->direcao_ordena)->get()->chunk(8);
         $cont_gp_aves = $aves->count();
 
         $promocao_bovinos = Promocao::where('grupo_id', 1)->where('status', 1)->get();
         foreach($promocao_bovinos as $p){
             $p->unid = $p->unidade->descricao;
         }
         $promocao_suinos = Promocao::where('grupo_id', 2)->where('status', 1)->get();
         foreach($promocao_suinos as $p){
             $p->unid = $p->unidade->descricao;
         }
         $promocao_aves = Promocao::where('grupo_id', 3)->where('status', 1)->get();
         foreach($promocao_aves as $p){
             $p->unid = $p->unidade->descricao;
         }
 
 
         return view('frontend.index', compact(
             'bovinos',
             'suinos',
             'aves',
             'cont_gp_bovinos',
             'cont_gp_suinos',
             'cont_gp_aves',
             'promocao_bovinos',
             'promocao_suinos',
             'promocao_aves',
             'tempo'
         ));
     }

}
