<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Grupo;
class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $grupos = Grupo::all();
        return view('backend.produtos.index',compact('grupos'));
    }

    public function listDataProdutos()
    {
        $produtos = Produto::all();
        $data = array();
        foreach($produtos as $p){
            $row = array();
            $row[] = $p->id;
            $row[] = $p->formatedstatus;
            $row[] = $p->nome;
            $row[] = $p->grupo->descricao;
            $row[] = currencyToApp($p->valor);
            $row[] = '<div class="btn-group">
            <a href="'.route("backend.produtos.edit", $p->id).'" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
            <a onclick="deleteDataProdutos('.$p->id.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';
            $data[] = $row;
        }
        $output = array("data" => $data);

        return response()->json($output);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = Grupo::all();
        return view('backend.produtos.create', compact('grupos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto;
        $produto->nome = $request['nome'];
        $produto->grupo_id = $request['grupo_id'];
        $produto->valor = currencyToBd($request['valor']);
        $produto->status = $request['status'];
        $produto->save();

        return redirect()->route('backend.produtos')->with('success', 'Produto cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupos = Grupo::all();
        $produto = Produto::find($id);
        return view('backend.produtos.edit', compact('grupos','produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);

        $produto->nome = $request['nome'];
        $produto->grupo_id = $request['grupo_id'];
        $produto->valor = currencyToBd($request['valor']);
        $produto->status = $request['status'];
        $produto->save();

        return redirect()->route('backend.produtos')->with('success', 'Produto cadastrado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
    }
}
