<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Simproffsen</title>

  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="collapse" id="collapsecart">
	@include('pages.incollapsed')
  
</div>
<div class="collapse" id="collapsesearch">
<input type="text" placeholder="Sök" id="well_search" autofocus />
</div>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">{!! HTML::image('img/logo.png') !!}</a>
      </div>




        <ul class="nav navbar-nav">
          <li>
            
              <a class="btn btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dam
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role=presentation>
                {!! link_to('category/' . "simkladerd", 'Simkläder', $secure = null) !!}
                {!! link_to('category/' . "simtraningd", 'Simträning', $secure = null) !!}
                {!! link_to('category/' . "simutrustningd", 'Simutrustning', $secure = null) !!}
                {!! link_to('category/' . "vatdrakterd", 'Våtdräkter', $secure = null) !!}
                {!! link_to('category/' . "triathlonkladerd", 'Triathlonkläder', $secure = null) !!}
                </li>                                
              </ul>
            
          </li>
          <li>
              <a class="btn btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Herr
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                <li role=presentation>
                {!! link_to('category/' . "simkladerh", 'Simkläder', $secure = null) !!}
                {!! link_to('category/' . "simtraningh", 'Simträning', $secure = null) !!}
                {!! link_to('category/' . "simutrustningh", 'Simutrustning', $secure = null) !!}
                {!! link_to('category/' . "vatdrakterh", 'Våtdräkter', $secure = null) !!}
                {!! link_to('category/' . "triathlonkladerh", 'Triathlonkläder', $secure = null) !!}                           
                </li>                                
              </ul>
          </li>				
          <li>
              <a class="btn btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Storlekstabell
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li role=presentation>
                {!! link_to('category/' . "storlekorca", 'Orca', $secure = null) !!}
                {!! link_to('category/' . "storleksailfish", 'Sailfish', $secure = null) !!}
                {!! link_to('category/' . "storlekovrigt", 'Övrigt', $secure = null) !!} 
                </li>                              
              </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a class="btn btn-primary" href="#">Kontakt</a></li>
            <li><a class="btn btn-primary" href="#">Om oss</a></li>
            <li><a data-toggle="collapse" href="#collapsecart" aria-expanded="false" aria-control="collapsecart" <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
            <li><a data-toggle="collapse" href="#collapsesearch" aria-expanded="false" aria-control="collapsesearch" <span class="glyphicon glyphicon-search"></span></a></li>
        </ul>
    </div>
  </nav>


  <div id="content">
  @yield('content')
  </div>
    <footer>
    <hr />
    <div id="left">
      <p><h1>Dam</h1></p>
      <p>Simklader</p>
      <p>Simträning</p>
      <p>Simutrustning</p>
      <p>Våtdräkter</p>
      <p>Triathlonkläder</p>

      
    </div>
    <div id="right">
      <p><h1>Herr</h1></p>
      <p>Simklader</p>
      <p>Simträning</p>
      <p>Simutrustning</p>
      <p>Våtdräkter</p>
      <p>Triathlonkläder</p>
    </div>

    <div id="mid">
      <p><h1>Storklekstabell</h1></p>
      <p>Orca</p>
      <p>Sailfish</p>
      <p>Övrigt</p>
    </div>
  </footer>
  
<!-- Scripts -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
