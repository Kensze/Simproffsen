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

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li>
						<a class="btn btn-primary" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
  						Dam
						</a>
					</li>
					<li>
						<a class="btn btn-primary" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
  						Herr
						</a>
					</li>				
					<li>
						<a class="btn btn-primary" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
  						Övrigt
						</a>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ url('/') }}">Kontakt</a></li>
						<li><a href="{{ url('/') }}">Om oss</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="collapse" id="collapseOne">
  		<div class="well">
    		HEJ
    	</div>
 	</div>
	<!--@yield('content')-->

	<!-- Scripts -->
	<footer>
		<div id="left">
			<p>Hej</p>
		</div>
		<div id="right">
			<p>Hejsan</p>
			<p>HEEEEEJ</p>
		</div>
	</footer>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
