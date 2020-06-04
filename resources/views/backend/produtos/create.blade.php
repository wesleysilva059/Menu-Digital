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
               <input type="text" class="form-control" name="nome">
            </div>
         </div>	  	  
         <div class="row">       
            <div class="form-group col-md-4">         
                <label for="grupo">Grupo</label>
                <select class="form-control" name="grupo_id">
                    <option>Escolha...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>         
            </div>              
            <div class="form-group col-md-4">         
                <label for="preco">Valor</label>          
                <input type="text" class="form-control" name="valor">
            </div>              
         </div>
         <div class="row">       
            <div class="form-group col-md-8">         
                <label for="status">Status</label>         
                <select class="form-control" name="status">
                    <option>Escolha...</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
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