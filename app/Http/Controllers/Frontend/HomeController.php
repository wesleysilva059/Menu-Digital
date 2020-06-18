<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Produto;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bovinos = Produto::where('grupo_id', 1)->orderby('valor','desc')->get()->chunk(8);
        $cont_gp_bovinos = $bovinos->count();

        $suinos = Produto::where('grupo_id', 2)->orderby('valor','desc')->get()->chunk(8);
        $cont_gp_suinos = $suinos->count();

        $aves = Produto::where('grupo_id', 3)->orderby('valor','desc')->get()->chunk(8);
        $cont_gp_aves = $aves->count();

        $promocao_bovinos = [
                                ['nome' => 'Picanha',
                                'preco' => '35,90',
                                'unidade' => 'Kg',
                                'imagem' => '/images/picanha_p.png'],
                                ['nome' => 'Alcatra',
                                'preco' => '29,90',
                                'unidade' => 'Kg',
                                'imagem' => '/images/Coxao Mole.png'],
                                ['nome' => 'Patinho',
                                'preco' => '25,90',
                                'unidade' => 'Kg',
                                'imagem' => '/images/Fraudinha.png']];
        $promocao_suinos = [
                                ['nome' => 'Picanha',
                                'preco' => '35,90',
                                'unidade' => 'Kg',
                                'imagem' => '/images/picanha_p.png'],
                                ['nome' => 'Alcatra',
                                'preco' => '29,90',
                                'unidade' => 'Kg',
                                'imagem' => '/images/Coxao Mole.png'],
                                ['nome' => 'Patinho',
                                'preco' => '25,90',
                                'unidade' => 'Kg',
                                'imagem' => '/images/Fraudinha.png']];
        $promocao_aves = [
                                ['nome' => 'Picanha',
                                'preco' => '35,90',
                                'unidade' => 'Kg',
                                'imagem' => '/images/picanha_p.png'],
                                ['nome' => 'Alcatra',
                                'preco' => '29,90',
                                'unidade' => 'Kg',
                                'imagem' => '/images/Coxao Mole.png'],
                                ['nome' => 'Patinho',
                                'preco' => '25,90',
                                'unidade' => 'Kg',
                                'imagem' => '/images/Fraudinha.png']];


        return view('frontend.index', compact(
            'bovinos',
            'suinos',
            'aves',
            'cont_gp_bovinos',
            'cont_gp_suinos',
            'cont_gp_aves',
            'promocao_bovinos',
            'promocao_suinos',
            'promocao_aves'
        ));
    }

}
