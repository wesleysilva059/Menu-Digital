@extends('backend.app')

@section('content')

 <div class="inner-block">
   @if(session()->get('success'))
   <div class="alert alert-success">
       {{ session()->get('success') }}  
   </div><br />
 @endif
 @if(session()->get('error'))
   <div class="alert alert-error">
       {{ session()->get('error') }}  
   </div><br />
 @endif
   <div class="inbox">
      <div class="col-md-9">
         <h2>Configurações</h2>
      </div>

      <form action="{{route('backend.configuracoes.update', $configuracao->id)}}" method="POST">
         @csrf
         @method('patch')

       <div class="tab-content">
         <div id="home" class="tab-pane fade in active">
           <section class="content">
               
               <div class="row">
                 <div class="col-md-10">
                   <div class="row">
                     <div class="col-md-5">
                       <label class="switch"> Selecione a coluna para ordenação:</label>    
                     </div>
                     <div class="col-md-4">
                        <select class="form-control" data-width="60%" name="coluna_ordena" required>
        
                          <option value="nome" >Produtos</option>
                          <option value="valor" >Preço</option>
                        </select>
                      </div>
                   </div>
                 <br>
                   <div class="row">
                     <div class="col-md-5">
                       <label class="switch"> Selecione a direção da ordenação:</label>    
                     </div>
                     <div class="col-md-4">
                        <select class="form-control" data-width="60%" name="direcao_ordena" >
        
                          <option value="asc" >Crescente</option>
                          <option value="desc" >Decrescente</option>
                        </select>
                      </div>
                   </div>
                 <br>
                 <div class="row">
                  <div class="col-md-5">
                    <label class="switch"> Determine o tempo de transição:</label>    
                  </div>
                  <div class="col-md-3">
                    <input type="text" name="tempo_transicao" value="{{$configuracao->tempo_transicao /1000}}"> Segundos
                  </div>
                </div>
              <br>
                                       
                     </div>
                     
                   </div>
                   <br>
                     
                 </div>
               </div>
     
              </section>
         </div>
         
       <div class="modal-footer">
         <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Fechar</button>
         <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Salvar</button>
       </div>
     </form>

      <div class="clearfix"> </div>     
  </div>
</div>

@endsection
@section('scripts')

@endsection