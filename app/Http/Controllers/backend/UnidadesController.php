<?php

namespace App\Http\Controllers\backend;

use App\Models\Unidade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UnidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.unidades.index');
    }

    public function listDataUnidades()
    {
        $unidades = Unidade::all();
        $data = array();
        foreach($unidades as $p){
            $row = array();
            $row[] = $p->id;
            $row[] = $p->descricao;
            $row[] = '<div class="btn-group">
            <a onclick="editFormUnidades('.$p->id.')" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
            <a onclick="deleteDataUnidades('.$p->id.')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></div>';
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
        return view('backend.unidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
