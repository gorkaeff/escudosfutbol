<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Escudos Fútbol</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	{!! HTML::style('/lib/bootstrap-table/bootstrap-table.min.css') !!}
	{!! HTML::style('/css/escudos.css') !!}
	@include('layouts.social')
</head>

<body>
	@include('layouts.nav')
	@yield('content')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	{!! HTML::script('/lib/bootstrap-table/bootstrap-table.min.js') !!}
	{!! HTML::script('/lib/bootstrap-table/bootstrap-table-es-ES.js') !!}
	@include('layouts.analyticstracking')
</body>
</html>