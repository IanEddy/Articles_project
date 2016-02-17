<html>
<head>
<title>layout</title>

<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/css/select2.min.css" rel="stylesheet" />

</head>
<body>
	@include('pages.nav')
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
@yield('footer')
</body>
</html>