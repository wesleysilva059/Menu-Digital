<?php

namespace App\Http\Controllers\backend;

use App\Models\Configuracao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfiguracoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configuracao = Configuracao::find(1);
        return view ('backend.configuracoes.index', compact('configuracao'));
    }


    public function update(Request $request, $id)
    {
        $configuracao = Configuracao::find($id);
        $configuracao->coluna_ordena = $request['coluna_ordena'];
        $configuracao->direcao_ordena = $request['direcao_ordena'];
        $configuracao->tempo_transicao = $request['tempo_transicao'] * 1000;
        $configuracao->save();

        if($configuracao){
            return redirect()->route('backend.configuracoes')->with('success','Salvo com Sucesso.');
        } else {
            return redirect()->route('backend.configuracoes')->with('error','Erro ao salvar.');
        }
    }


}
