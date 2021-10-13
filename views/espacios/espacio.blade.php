@extends('layout.base')
@section('main')

<div class="the-padding"></div>

<section style="color: #41546d;" class="seccion-espacio">
	<div class="container">
		<div class="row">
			<div class="col s12 m8 l8 offset-m2 offset-l2 center-align">
				<h2 style="text-transform: capitalize;">{!! $espacio['titulo_' . app()->getLocale() ] !!}</h2>
				<!--<p style="font-size: 1.2rem;">{!! $espacio['des_' . app()->getLocale() ] !!}</p>-->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="photos-wrap">
			@foreach($espacio->imagenes as $img)
			<div class="photo-wrap-container">
				<img class="materialboxed" src="{{ URL::asset('assets/img/espacios/' . $img->url) }}" alt="{{ 'LUX_' . $espacio->titulo_es }} ">
			</div>
			@endforeach
		</div>
	</div>
</section>

<style>
	.photos-wrap {
		margin: 4rem 0 4rem 0;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-ms-flex-pack: distribute;
		justify-content: space-around;
	}

	.photos-wrap .photo-wrap-container {
		width: 33%;
		border: solid 2px #ffffff;
	}

	.photos-wrap img {
		width: 100%;
	}

	@media (max-width: 850px) {
		.photos-wrap {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			-ms-flex-direction: column;
			flex-direction: column;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
		}

		.photos-wrap .photo-wrap-container {
			width: 99%;
			border: solid 2px #ffffff;
		}
	}

</style>

<script>
	$('document').ready(function(event) {
		$('.materialboxed').materialbox()
	})

</script>

@endsection
