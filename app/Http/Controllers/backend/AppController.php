<?php

namespace App\Http\Controllers\backend;

use App\Models\Grupo;
use App\Models\Produto;
use App\Models\Promocao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function index(){

        $contProdutos = Produto::all()->count();
        $contPromocoes = Promocao::all()->count();
        $contGrupos = Grupo::all()->count();

        return view('backend.index', compact('contProdutos', 'contPromocoes', 'contGrupos'));
    }
}
