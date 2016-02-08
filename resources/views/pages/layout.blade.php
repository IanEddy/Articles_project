<html>
<head>
<title>layout</title>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container">
	@if (Session::has('flash_message'))
		<div class="alert alert-success"> 
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; </button>
			{{ Session::get('flash_message') }} 
		</div>
	@endif
@yield('content')
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>