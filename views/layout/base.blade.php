<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LUX</title>
	<meta name="description" content="LUX Madrid es el innovador y ambicioso proyecto de Grupo La Máquina. Ocupa un edificio imponente y centenario de la Calle Jorge Juan, número 22. Fascinante en todas sus dimensiones.">
	@include('imports.apple-icons')
	@include('imports.base-icons')
	@include('imports.ms-application')
	<link rel="preload" as="style" onload="this.rel = 'stylesheet'" href="{{ URL::asset('assets/css/materialize.min.css') }}">
	{!! Html::style('assets/css/styles.css') !!}
	{!! Html::style('assets/css/ico.css') !!}
	{!! Html::style('assets/css/qts-default.css') !!}
	{!! Html::style('assets/css/ley-cookie.css') !!}
	<script src="{{ URL::asset('assets/js/jquery-3.0.0.min.js') }}"></script>
	<script async src="{{ URL::asset('assets/js/materialize.min.js') }}"></script>
	<link rel="preload" as="style" onload="this.rel = 'stylesheet'" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>

	@include('navegador.navegador')

	@yield('main')

	@include('footer.footer')

</body>

</html>
