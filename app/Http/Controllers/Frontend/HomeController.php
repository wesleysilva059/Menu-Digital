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
        $bovinos1 = $bovinos->count();

        $suinos = Produto::where('grupo_id', 2)->orderby('valor','desc')->get()->chunk(8);

        $aves = Produto::where('grupo_id', 3)->orderby('valor','desc')->get()->chunk(8);

        dd($bovinos1,$suinos,$aves);
        return view('frontend.index', compact('bovinos','suinos','aves'));
    }

}
