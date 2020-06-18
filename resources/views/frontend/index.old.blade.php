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
            @for ($i = 1; $i <= $cont_gp_bovinos; $i++)
               @if($i == 1)
               <div class="item active">
                  @else
                  <div class="item">
                     @endif
                  <div class="col-md-4 promocao">
                     <div class="row titulo-promocao">
                        <h1>Promoção do Dia {{$i}}</h1>
                     </div>
                     <div class="imagem-prouto-promocao">
                        <img src="/imagem/picanha_p.png">
                     </div>
                     <div class="preco-promocao">
                        R$ 39,90
                     </div>
                     <div class="unidade">
                        Kg
                     </div>
                  </div>
                  <div class="col-md-8 produtos">
                     <div class="logo-principal"></div>
                     <div class="titulo">
                        <h1>Bovinos</h1>
                     </div>
                     @for ($i = 0; $i < 8; $i++)
                        <div class="list-produtos">
                           <div class="col-md-9 produto">Picanha</div>
                           <div class="col-md-3 preco">R$ 39,90</div>
                        </div>
                     @endfor
                  </div>
               </div>
            @endfor

            <div class="item">
               <div class="col-md-4 promocao">
               </div>
               <div class="col-md-8 produtos">
                  <div class="logo-principal"></div>
                  <div class="titulo">
                     <h1>Bovinos</h1>
                  </div>
                  @for ($i = 0; $i < 8; $i++)
                     <div class="list-produtos">
                        <div class="col-md-9 produto">Acém</div>
                        <div class="col-md-3 preco">R$ 29,90</div>
                     </div>
                  @endfor
               </div>
            </div>
            <div class="item">
               <div class="col-md-4 promocao">
               </div>
               <div class="col-md-8 produtos">
                  <div class="logo-principal"></div>
                  <div class="titulo">
                     <h1>Suínos</h1>
                  </div>
                  @for ($i = 0; $i < 8; $i++)
                     <div class="list-produtos">
                        <div class="col-md-9 produto">Costelinha</div>
                        <div class="col-md-3 preco">R$ 19,90</div>
                     </div>
                  @endfor
               </div>
            </div>
            <div class="item">
               <div class="col-md-4 promocao">
               </div>
               <div class="col-md-8 produtos">
                  <div class="logo-principal"></div>
                  <div class="titulo">
                     <h1>Aves</h1>
                  </div>
                  @for ($i = 0; $i < 8; $i++)
                     <div class="list-produtos">
                        <div class="col-md-9 produto">Frango</div>
                        <div class="col-md-3 preco">R$ 15,90</div>
                     </div>
                  @endfor
               </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript">
      $('.carousel').carousel({
        interval: 3000
      });

    </script>
  </body>

</html>