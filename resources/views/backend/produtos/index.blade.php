@extends('backend.app')

@section('content')
<div class="inner-block">
   <div class="inbox">
      <div class="col-md-9">
         <h2>Lista de Produtos</h2>
      </div>
      <div class="col-md-3">
      <a href="{{route('backend.produtos.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Novo Produto</a>
      </div>

      <div class="box">
         <div class="box-body">
   
            <form method="post" id="form-produto">
            {{ csrf_field() }}
            <table class="table table-striped" id="example">
               <thead>
                  <tr>
                  <th>Código</th>
                  <th>Status</th>
                  <th>Nome</th>
                  <th>Grupo</th>
                  <th>Valor</th>
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
          "ajax" : {
            "url" : "{{ route('backend.produtos.listdata') }}",
            "type" : "GET"
         },
          'columnDefs': [{
              'targets': 0,
              'searchable': false,
              'orderable': false
           }],
           'order': [1, 'asc']
        }); 
   
   } );

   function deleteDataProdutos(id){
        if(confirm("Tem certeza de que deseja excluir esse produto?")){
            var url = '/backend/produtos/delete/'+id;
            $.ajax({
            url : url,
            type : 'DELETE',
            data : {'_token' : $('meta[name=csrf-token]').attr('content')},
            success : function(data){
                $('#example').DataTable().ajax.reload();
            },
            error : function(){
                alert("Não foi possível excluir os dados!");
            }
            });
        }
    }
   </script>
@endsection