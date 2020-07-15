@extends('backend.app')

@section('content')
<div class="inner-block">
   <div class="inbox">
      <div class="col-md-9">
         <h2>Cadastro de Promoções</h2>
      </div>

      <form action="{{route('backend.promocoes.store')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <!-- area de campos do form -->
      <hr />
         <div class="row">
            <div class="form-group col-md-8">
               <label for="nome">Nome do Promoção</label>
               <input type="text" class="form-control" name="nome" required>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-4">
               <label for="grupo">Grupo</label>
               <select class="form-control" name="grupo_id" required>
                  <option value="">Escolha...</option>
                  @foreach ($grupos as $g)
                  <option value="{{$g->id}}">{{$g->descricao}}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group col-md-4">
                <label for="preco">Valor</label>
                <input type="text" class="form-control preco" name="preco" required>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-4">
               <label for="unidade">Unidade</label>
               <select class="form-control" name="unidade_id" required>
                  <option value="">Escolha...</option>
                  @foreach ($unidades as $u)
                  <option value="{{$u->id}}">{{$u->descricao}}</option>
                  @endforeach
               </select>
            </div>
            <div class="form-group col-md-4">
                <label for="status">Status</label>
                <select class="form-control" name="status" required>
                    <option value="">Escolha...</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>
         </div>
         <div class="form-group col-md-5">
            <label for="exampleFormControlFile1">Adicionar Imagem de Exibição</label>
            <input type="file" class="filestyle" value="{{old('imagem')}}" name="imagem" data-buttonName="btn-primary">
        </div>
         <hr>
         <div id="actions" class="row">
            <div class="col-md-12">
               <button type="submit" class="btn btn-primary">Salvar</button>
               <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
         </div>
      </form>

      <div class="clearfix"> </div>
  </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">

    $(document).ready(function() {

        $('.preco').mask("###.##0,00", {reverse: true});

    } );
</script>
@endsection
