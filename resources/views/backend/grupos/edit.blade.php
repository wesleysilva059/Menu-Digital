@extends('backend.app')

@section('content')
<div class="inner-block">
   <div class="inbox">
      <div class="col-md-9">
         <h2>Cadastro de Grupos</h2>
      </div>

      <form action="{{route('backend.grupos.store')}}" method="post">
      {{ csrf_field() }}
      <!-- area de campos do form -->
      <hr />
         <div class="row">
            <div class="form-group col-md-8">
               <label for="descricao">Nome do Grupo</label>
               <input type="text" class="form-control" name="descricao" required>
            </div>
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

   var table;

      $(document).ready(function() {

       // DataTable
       //var table = $('#example').DataTable();
       table = $('#example').DataTable({
         "language": {
             "url": "//cdn.datatables.net/plug-ins/1.10.18/i18n/Portuguese-Brasil.json"
           },
          "processing" : true,
          "serverside" : true,
          'columnDefs': [{
              'targets': 0,
              'searchable': false,
              'orderable': false
           }],
           'order': [1, 'asc']
        });

   } );
   </script>
@endsection
