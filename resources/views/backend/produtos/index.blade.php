@extends('backend.app')

@section('title')
Produtos Cadastrados
@endsection

@section('content')
    

<div class="row">
   <div class="col-xs-12">
     <div class="box">
       <div class="box-header">
         <h3 class="box-title">Confira abaixo todos os <b>Produtos</b> cadastrados!</h3>
         <div style="float:right;">
           <a onclick="addForm()" class="btn btn-success"><i class="fa fa-plus-circle"></i> Novo Produto</a>
         </div>
       </div>
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
   </div>
 </div>

@endsection
@section('script')
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