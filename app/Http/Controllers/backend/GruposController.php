<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Grupo;
use Illuminate\Http\Request;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.grupos.index');
    }

    public function listDataGrupos()
    {
        $grupos = Grupo::all();
        $data = array();
        foreach($grupos as $p){
            $row = array();
            $row[] = $p->id;
            $row[] = $p->descricao;
            $row[] = '<div class="btn-group">
            <a href="'.route("backend.grupos.edit", $p->id).'" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
            <a onclick="deleteDatagrupos('.$p->id.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';
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
        return view('backend.grupos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupo = new Grupo();
        $grupo->descricao = $request['descricao'];
        $grupo->save();

        return redirect()->route('backend.grupos')->with('success', 'Grupo cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('backend.grupos.edit');
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
        $grupo = Grupo::find($id);
        $grupo->descricao = $request['descricao'];
        $grupo->save();

        return redirect()->route('backend.grupos')->with('success', 'Grupo cadastrado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $grupo = Grupo::find($id);
        $grupo->delete();
    }
}
