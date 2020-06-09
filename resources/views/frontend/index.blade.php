<!doctype html>
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
            <div class="item active">
              <div class="col-md-4 promocao">
              </div>
              <div class="col-md-8 produtos">
                 <div class="logo-principal">
                  <figure>
                     <img src="/images/logo.png" class="img-responsive center-block" alt="" srcset="">
                  </figure>
                 </div>
                 <div class="titulo">
                    <h1>Bovinos</h1>
                 </div>
                 @for ($i = 0; $i < 8; $i++)
                 <div class="list-produtos">
                  <div class="col-md-9">Picanha</div>
                  <div class="col-md-3">R$ 29,90</div>
               </div>    
                 @endfor
                 
              </div>
            </div>
            <div class="item">
               <div class="col-md-4 promocao">
               </div>
               <div class="col-md-8 produtos">
                <figure>
                   <img src="/images/logo.png" class="logo" alt="" srcset="">
                </figure>
               </div>
            </div>
            <div class="item">
               <div class="col-md-4 promocao">
               </div>
               <div class="col-md-8 produtos">
                <figure>
                   <img src="/images/logo.png" class="logo" alt="" srcset="">
                </figure>
               </div>
            </div>
            <div class="item">
               <div class="col-md-4 promocao">
               </div>
               <div class="col-md-8 produtos">
                <figure>
                   <img src="/images/logo.png" class="logo" alt="" srcset="">
                </figure>
               </div>
             </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>
    <script type="text/javascript">
      $('.carousel').carousel({
        interval: 300000
      });

    </script>
  </body>

</html>