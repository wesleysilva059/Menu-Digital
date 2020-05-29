@extends('backend.app')

@section('content')
<div class="inner-block">
   <div class="inbox">
      <div class="col-md-9">
         <h2>Lista de Produtos</h2>
      </div>
      <div class="col-md-3">
         <a onclick="addForm()" class="btn btn-success"><i class="fa fa-plus-circle"></i> Novo Produto</a>
      </div>

      <div class="box">
         <div class="box-body">
   
            <form method="post" id="form-produto">
            {{ csrf_field() }}
            <table class="table table-striped" id="example">
               <thead>
                  <tr>
                  <th width="20"><input type="checkbox" value="1" id="select-all"></th>
                  <th width="60">Status</th>
                  <th>Código</th>
                  <th>Nome</th>
                  <th>Associado</th>
                  <th>Custo</th>
                  <th>Venda</th>
                  <th>Estoque</th>
                  <th width="100">Ações</th>
                  </tr>
               </thead>
               <tbody></tbody>
            </table>
            </form>
   
         </div>
      </div>

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