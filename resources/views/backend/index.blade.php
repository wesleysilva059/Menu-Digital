@extends('backend.app')

@section('content')

<div class="inner-block">

   <div class="market-updates">
      <div class="col-md-4 market-update-gd">
         <div class="market-update-block clr-block-1">
            <div class="col-md-8 market-update-left">
               <h3>{{$contProdutos}}</h3>
               <h4>Produtos</h4>
               
            </div>
            <div class="col-md-4 market-update-right">
               <i class="fa fa-file-text-o"> </i>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <div class="col-md-4 market-update-gd">
         <div class="market-update-block clr-block-2">
            <div class="col-md-8 market-update-left">
            <h3>{{$contPromocoes}}</h3>
            <h4>Promoções</h4>
            
            </div>
            <div class="col-md-4 market-update-right">
               <i class="fa fa-eye"> </i>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <div class="col-md-4 market-update-gd">
         <div class="market-update-block clr-block-3">
            <div class="col-md-8 market-update-left">
               <h3>{{$contGrupos}}</h3>
               <h4>Grupos</h4>
            </div>
            <div class="col-md-4 market-update-right">
               <i class="fa fa-envelope-o"> </i>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <div class="clearfix"> </div>
   </div>
   <!--market updates end here-->
</div>
    
@endsection