<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>Menu Digital - Açougue da Tina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      body {
        overflow-y: hidden;
        overflow-x: hidden;
        height: 100%;
      }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/stylefront.css">
  </head>

  <body>
    <div class="container-fluid full">
      <div class="row full">
        <div id="carousel-example-generic" class="carousel slide carousel-fade full" data-ride="carousel">
          <!-- Indicators -->
          <!--<ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>-->

          <!-- Wrapper for slides -->

         <div class="carousel-inner full" role="listbox">
            @for ($j = 0; $j < $cont_gp_bovinos; $j++)
               @if($j == 0)
                  <div class="item active">
               @else
                  <div class="item">
               @endif
                     <div class="col-md-4 promocao">
                        <div class="row titulo-promocao">
                           <h1>Promoção do Dia</h1>
                        </div>
                        <div class="row corpo-promocao" >
                           <div class="titulo-produto-promocao">
                              <h2>{{isset($promocao_bovinos[$j]) ? $promocao_bovinos[$j]['nome'] : ''}}</h2>
                           </div>
                           <div class="imagem-produto-promocao">
                              <img src="{{isset($promocao_bovinos[$j]) ? url($promocao_bovinos[$j]['imagem']) : ''}}" alt="">
                           </div>
                           <div class="preco-promocao">
                              {{isset($promocao_bovinos[$j]['preco']) ? currencyToApp($promocao_bovinos[$j]['preco']) : ''}}
                           </div>
                           <div class="unidade">{{isset($promocao_bovinos[$j]['unid']) ? $promocao_bovinos[$j]['unid'] : ''}}</div>
                        </div>
                     </div>
                  <div class="col-md-8 produtos">
                     <div class="logo-principal"></div>
                     <div class="titulo">
                        <h1>Bovinos</h1>
                     </div>
                     @foreach($bovinos[$j] as $b)
                        <div class="list-produtos">
                           <div class="col-md-9 produto">{{$b->nome}}</div>
                           <div class="col-md-3 preco">{{currencyToApp($b->valor)}}</div>
                        </div>
                     @endforeach
                  </div>
               </div>
            @endfor

            @for ($j = 0; $j < $cont_gp_suinos; $j++)
               @if($j == 1)
                  <div class="item active">
               @else
                  <div class="item">
               @endif
                     <div class="col-md-4 promocao">
                        <div class="row titulo-promocao">
                           <h1>Promoção do Dia</h1>
                        </div>
                        <div class="row corpo-promocao" >
                           <div class="titulo-produto-promocao">
                              <h2>{{isset($promocao_suinos[$j]) ? $promocao_suinos[$j]['nome'] : ''}}</h2>
                           </div>
                           <div class="imagem-produto-promocao">
                              <img src="{{isset($promocao_suinos[$j]) ? url($promocao_suinos[$j]['imagem']) : ''}}" alt="">
                           </div>
                           <div class="preco-promocao">
                              {{isset($promocao_suinos[$j]['preco']) ? currencyToApp($promocao_suinos[$j]['preco']) : ''}}
                           </div>
                           <div class="unidade">{{isset($promocao_suinos[$j]['unid']) ? $promocao_suinos[$j]['unid'] : ''}}</div>
                        </div>
                     </div>
                  <div class="col-md-8 produtos">
                     <div class="logo-principal"></div>
                     <div class="titulo">
                        <h1>Suínos</h1>
                     </div>
                     @foreach($suinos[$j] as $b)
                        <div class="list-produtos">
                           <div class="col-md-9 produto">{{$b->nome}}</div>
                           <div class="col-md-3 preco">{{currencyToApp($b->valor)}}</div>
                        </div>
                     @endforeach
                  </div>
               </div>
            @endfor
            @for ($j = 0; $j < $cont_gp_aves; $j++)
               @if($j == 1)
                  <div class="item active">
               @else
                  <div class="item">
               @endif
                     <div class="col-md-4 promocao">
                        <div class="row titulo-promocao">
                           <h1>Promoção do Dia</h1>
                        </div>
                        <div class="row corpo-promocao" >
                           <div class="titulo-produto-promocao">
                              <h2>{{isset($promocao_aves[$j]) ? $promocao_aves[$j]['nome'] : ''}}</h2>
                           </div>
                           <div class="imagem-produto-promocao">
                              <img src="{{isset($promocao_aves[$j]) ? url($promocao_aves[$j]['imagem']) : ''}}" alt="">
                           </div>
                           <div class="preco-promocao">
                              {{isset($promocao_aves[$j]['preco']) ? currencyToApp($promocao_aves[$j]['preco']) : ''}}
                           </div>
                           <div class="unidade">{{isset($promocao_aves[$j]['unid']) ? $promocao_aves[$j]['unid'] : ''}}</div>
                        </div>
                     </div>
                  <div class="col-md-8 produtos">
                     <div class="logo-principal"></div>
                     <div class="titulo">
                        <h1>Aves</h1>
                     </div>
                     @foreach($aves[$j] as $b)
                        <div class="list-produtos">
                           <div class="col-md-9 produto">{{$b->nome}}</div>
                           <div class="col-md-3 preco">{{currencyToApp($b->valor)}}</div>
                        </div>
                     @endforeach
                  </div>
               </div>
            @endfor
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript">
      $('.carousel').carousel({
        interval: "{{$tempo}}"
      });

    </script>
  </body>

</html>
