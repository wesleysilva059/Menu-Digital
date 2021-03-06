@extends('backend.app')

@section('content')
<div class="inner-block">
   <div class="inbox">
      <div class="col-md-9">
         <h2>Cadastro de Produtos</h2>
      </div>

      <form action="{{route('backend.produtos.store')}}" method="post">
      {{ csrf_field() }}
      <!-- area de campos do form -->
      <hr />
         <div class="row">
            <div class="form-group col-md-8">
               <label for="nome">Nome do Produto</label>
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
                <input type="text" class="form-control preco" name="valor" required>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-8">
                <label for="status">Status</label>
                <select class="form-control" name="status" required>
                    <option value="">Escolha...</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>
         </div>
         <hr>
         <div id="actions" class="row">
            <div class="col-md-12">
               <button type="submit" class="btn btn-primary">Salvar</button>
               <a href="{{route('backend.produtos')}}" class="btn btn-default">Cancelar</a>
            </div>
         </div>
      </form>

      <div class="clearfix"> </div>
  </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">

   var table;

        $(document).ready(function() {

            $('.preco').mask("###.##0,00", {reverse: true});

        } );
   </script>
@endsection
