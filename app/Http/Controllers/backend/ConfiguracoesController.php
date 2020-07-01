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
        //
    }


}
