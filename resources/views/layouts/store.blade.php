<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title')</title>
	
	<script src="https://use.fontawesome.com/e2153ab401.js"></script>
 
    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Loading Bootstrap -->
	<link href="dist/css/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Loading Flat UI -->
	<link href="dist/css/flat-ui.css" rel="stylesheet">

    <link rel="shortcut icon" href="dist/img/favicon.ico">
    
     <style>
         div.tope{
             margin-top: 60px;
         }

		body {
			padding-bottom: 20px;
			padding-top: 20px;
		}
		.navbar {
			margin-bottom: 20px;
		}

		.rounded{
			border-radius: 50%;
		}
 
     </style>
</head>

<body>
	<div id="app">
		@include('store.navbar')

		@yield('content')

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="dist/js/vendor/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="dist/js/flat-ui.min.js"></script>

		
	</div>
</body>

</html>