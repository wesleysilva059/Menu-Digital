<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>Menu Digital - Açougue da Tina</title>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">

      .full {
        height: 100%;
        background-image: url('/images/fundo-madeira.jpg'); 
        background-size: 1920px 1080px;
        width: 100%;
      }

      html,
      body {
        overflow-y: hidden;
        overflow-x: hidden;
        height: 100%;
      }

      html, body, div, span, applet, object, iframe,
      h1, h2, h3, h4, h5, h6, p, blockquote, pre,
      a, abbr, acronym, address, big, cite, code,
      del, dfn, em, img, ins, kbd, q, s, samp,
      small, strike, strong, sub, sup, tt, var,
      b, u, i, center,
      dl, dt, dd, ol, ul, li,
      fieldset, form, label, legend,
      table, caption, tbody, tfoot, thead, tr, th, td,
      article, aside, canvas, details, embed, 
      figure, figcaption, footer, header, hgroup, 
      menu, nav, output, ruby, section, summary,
      time, mark, audio, video { {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
      }

      * {
        box-sizing: border-box;
      }
      /* HTML5 display-role reset for older browsers */

      article, aside,details,figcaption,figure,footer,header,hgroup,menu,nav,
      section {
        display: block;
      }

      body {
        line-height: 1;
      }

      ol,
      ul {
        list-style: none;
      }

      blockquote,
      q {
        quotes: none;
      }

      blockquote:before,
      blockquote:after,
      q:before,
      q:after {
        content: '';
        content: none;
      }

      table {
        border-collapse: collapse;
        border-spacing: 0;
      }
      /* comeco fade carousel */

      .carousel-fade .carousel-inner .item {
        opacity: 0;
        transition-property: opacity;
      }

      .carousel-fade .carousel-inner .active {
        opacity: 1;
      }

      .carousel-fade .carousel-inner .active.left,
      .carousel-fade .carousel-inner .active.right {
        left: 0;
        opacity: 0;
        z-index: 1;
      }

      .carousel-fade .carousel-inner .next.left,
      .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
      }

      .carousel-fade .carousel-control {
        z-index: 2;
      }

      @media all and (transform-3d),
      (-webkit-transform-3d) {
        .carousel-fade .carousel-inner > .item.next,
        .carousel-fade .carousel-inner > .item.active.right {
          opacity: 0;
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
        .carousel-fade .carousel-inner > .item.prev,
        .carousel-fade .carousel-inner > .item.active.left {
          opacity: 0;
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
        .carousel-fade .carousel-inner > .item.next.left,
        .carousel-fade .carousel-inner > .item.prev.right,
        .carousel-fade .carousel-inner > .item.active {
          opacity: 1;
          -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
        }
      }
      /* fim fade carousel */

      .cor {
        position: absolute;
        background-color: rgba(255, 255, 255, 0.6);
        z-index: 10;
        left: 50%;
        margin-left: -615px;
        height: 70px;
        top: 2%;
      }

      .nav-justified>li {
        width: 200px;
        padding: 5px;
      }

      .nav-justified {
        margin-top: 13px;
      }

      .nav-pills>li>a {
        color: #000;
        border-radius: 0;
        text-transform: uppercase;
        font-family: tahoma verdana;
        font-style: italic;
      }

      .nav-pills>li>a:hover {
        border-radius: 0;
        background-color: #262b31;
        color: #fff;
      }

      .nav-pills>li.active>a,
      .nav-pills>li.active>a:focus,
      .nav-pills>li.active>a:hover {
        background-color: #262b31;
        color: #fff;
      }

      td{
         color: #fff;
      }

    </style>
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
              <h1>Slide1</h1>
              <table class="table">
                 <thead>
                    <tr>
                       <th>teste</th>
                       <th>tesdt</th>
                       <th>asdtsat</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                       <td scope="row">asdtas</td>
                       <td>asdtsadt</td>
                       <td>asdtadta</td>
                    </tr>
                    <tr>
                       <td scope="row">asdtasdt</td>
                       <td>asdtasdt</td>
                       <td>asdtt</td>
                    </tr>
                 </tbody>
              </table>
            </div>
            <div class="item">
               <h1>Slide2</h1>
            </div>
            <div class="item">
               <h1>Slide3</h1>
            </div>
            <div class="item">
               <h1>Slide4</h1>
             </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
      $('.carousel').carousel({
        interval: 3000
      });

    </script>
  </body>

</html>