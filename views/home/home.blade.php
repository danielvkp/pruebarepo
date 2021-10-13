@extends('layout.base')
@section('main')

	@include('cover.cover')

	@include('intro.intro')

	@include('espacios.espacios')

	@include('instagram.instagram')

	@include('contacto.contacto')
		
	@if(Session::has('message'))
		<script>
			Materialize.toast("{!! (Session::get('message')) !!}", 8000);
		</script>
	@endif

	<script>
		$('document').ready(() => {
			$('#the-sticky-menu').addClass('hide-sticky-menu')

			function getDistance (){
				return $(window).scrollTop()
			}
			function hideOrNot(){
				let top_distance = getDistance()
				if (top_distance > 100) {
					$('#the-menu').fadeOut('slow')
					$('#the-intro').addClass('desplazar')
				} else {
					$('#the-menu').fadeIn('slow')
					$('#the-intro').removeClass('desplazar')
				}
				(top_distance > 150) ? $('#the-sticky-menu').removeClass('hide-sticky-menu'): $('#the-sticky-menu').addClass('hide-sticky-menu')
			}
			$(window).scroll(() => {
				hideOrNot();
			})
		})
	</script>

@endsection
