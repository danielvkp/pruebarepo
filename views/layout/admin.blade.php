<!doctype html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="favicon.png" type="image/png">
	<title>Panel Administración</title>
	@include('imports.apple-icons')
	@include('imports.base-icons')
	@include('imports.ms-application')
	{!! Html::style('app/css/app.css') !!}
	{!! Html::script('app/js/all.js') !!}
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
	<div id="app">
		<app></app>
	</div>
	{!! Html::script('app/js/app.js') !!}
	{!! Html::script('app/ckeditor/ckeditor.js') !!}
	<script>
		$('document').ready(function(event) {
			$('.button-collapse').sideNav({
				menuWidth: 300,
				edge: 'left',
				closeOnClick: true,
				draggable: true,
			})					
		})
	</script>
	
</body>

</html>
