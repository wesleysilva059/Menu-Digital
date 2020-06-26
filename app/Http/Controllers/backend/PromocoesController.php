<?php

namespace App\Http\Controllers\backend;

use App\Models\Grupo;
use App\Models\Unidade;
use App\Models\Promocao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PromocoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::all();

        return view('backend.promocoes.index', compact('grupos'));
    }

    public function listDataPromocoes()
    {
        $promocoes = Promocao::all();
        $data = array();
        foreach($promocoes as $p){
            $row = array();
            $row[] = $p->status;
            $row[] = $p->nome;
            $row[] = $p->preco;
            $row[] = $p->grupo->descricao;
            $row[] = $p->unidade->descricao;
            $row[] = '<figure><img style="width:50px" src="'.url($p->imagem).'"></figure>';
            $row[] = '<div class="btn-group">
                        <a href="'.route("backend.promocoes.edit", $p->id).'" class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a onclick="deleteDataPromocao('.$p->id.')" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </a>
                      </div>';
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
        $unidades = Unidade::all();
        return view('backend.promocoes.create', compact('grupos','unidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request);
        $promocao = new Promocao;
        $promocao->nome = $request['nome'];
        $promocao->grupo_id = $request['grupo_id'];
        $promocao->preco = $request['preco'];
        $promocao->status = $request['status'];
        $promocao->unidade_id = $request['unidade_id'];
        $promocao->save();

        if($request->hasFile('imagem') && $request->file('imagem')->isValid())
        {
            $nome = uniqid(date('HisYmd'));
            $extensao = $request->imagem->extension();
            $nomeArquivo = "{$nome}.{$extensao}";
            $upload = $request->imagem->storeAs('promocao/imagem/'.$promocao->id, $nomeArquivo);
            if(!$upload)
            {
                return redirect()
                ->back()
                ->with('error', 'Falha ao carregar Imagem.')
                ->withInput();
            } else {
                $promocao->imagem = url('/storage/promocoes/imagem').'/'.$promocao->id.'/'.$nomeArquivo;
                $promocao->save();
            }
        }

        if($promocao){
            return redirect()->route('backend.promocoes', compact('promocao'))
                        ->with('success', 'Promoção Gravada com sucesso.');
        } else {
            return redirect()->back()->withInput(Input::all())
                ->with('error','Erro ao salvar promoção.');
        }
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
        $promocao = Promocao::find($id);
        $grupos = Grupo::all();
        $unidades = Unidade::all();
        //dd($promocao);

        return view('backend.promocoes.edit', compact('promocao','grupos','unidades'));
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
        $promocao = Promocao::find($id);

        $promocao->nome = $request['nome'];
        $promocao->grupo_id = $request['grupo_id'];
        $promocao->preco = $request['preco'];
        $promocao->status = $request['status'];
        $promocao->unidade_id = $request['unidade_id'];
        $promocao->save();

        if($request->hasFile('imagem') && $request->file('imagem')->isValid())
        {
            $nome = uniqid(date('HisYmd'));
            $extensao = $request->imagem->extension();
            $nomeArquivo = "{$nome}.{$extensao}";
            $upload = $request->imagem->storeAs('promocoes/imagem/'.$promocao->id, $nomeArquivo);
            if(!$upload)
            {
                return redirect()
                ->back()
                ->with('error', 'Falha ao carregar Imagem.')
                ->withInput();
            } else {
                $promocao->imagem = '/storage/promocoes/imagem'.'/'.$promocao->id.'/'.$nomeArquivo;
                $promocao->save();
            }
        }

        if($promocao){
            return redirect()->route('backend.promocoes', compact('promocao'))
                        ->with('success', 'Promoção Gravada com sucesso.');
        } else {
            return redirect()->back()->withInput(Input::all())
                ->with('error','Erro ao salvar promoção.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $promocao = Promocao::find($id);
        $promocao->delete();
    }
}
