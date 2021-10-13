@extends('layout.base')
@section('main')

<div class="the-padding"></div>

<div class="carta-container">
	<div class="carta-header">
		<h2 class="move-to-center center-align white-text">{!! $carta['titulo_' . app()->getLocale() ] !!}</h2>
	</div>
</div>

<div class="the-color">
	<div class="container-carta">

		<div class="row center-align">
			<div class="col s12 m4 l4 hide-on-med-and-down">
				<img class="tomate-image" src="{{ URL::asset('assets/img/tomate.png') }}" alt="">
			</div>
			<div class="col s10 m10 l6 offset-s1 offset-m1">
				<h2 class="center-align">@lang('messages.carta')</h2>
				<br>
				{!! $carta['des_' . app()->getLocale() ] !!}
				<br>
				<br>
				<a target="_blank" class="my-btn" style="text-transform:capitalize;" href="{{URL::asset('pdf/' . $info['url_' . app()->getLocale() ] )}}">Ver</a>
				<a target="_blank" class="my-btn" style="text-transform:capitalize;" href="{{URL::asset('pdf/menu_navidad.pdf' )}}">Menú navidad</a>
				<a target="_blank" class="my-btn" style="text-transform:capitalize;" href="{{URL::asset('pdf/menu_nochevieja.pdf' )}}">Menú nochevieja</a>

			</div>
		</div>

	</div>
</div>

<div style="margin-bottom: 0;" class="row">
	<div class="photos-wrap">

		@foreach($platos as $plato)
		<div class="photo-wrap-container">
			<img class="materialboxed" src="{{ URL::asset('assets/img/platos/' . $plato->url) }}" alt="">
		</div>
		@endforeach

	</div>
</div>

<style>
	.photos-wrap {
		margin: 4rem 0 0rem 0;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		-ms-flex-pack: distribute;
		justify-content: space-around;
	}

	.photos-wrap .photo-wrap-container {
		width: 33.33%;
		border: solid 1px #ffffff;
	}

	.photos-wrap img {
		width: 100%;
	}

	@media (max-width: 850px) {

		.my-btn{
			display: block;
		}
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


	.platos {
		color: #41546d;
		padding-bottom: 4rem;
	}

	.container-carta {
		color: #41546d;
		padding: 3rem 1rem 4rem 1rem;
		margin-bottom: 2rem;
	}

	.tomate-image {
		width: 80%;
	}

	.carta-container {
		position: relative;
	}

	.carta-container::after {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 500px;
		background-color: rgba(0, 0, 0, 0.4);
	}

	.carta-container .carta-header {
		background-image: url('assets/img/carta-background.jpg');
		width: 100%;
		height: 500px;
		background-position: center;
		background-attachment: fixed;
		background-size: cover;
		position: relative;
	}

	.move-to-center {
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		margin: 0;
		z-index: 55;
	}

</style>

@endsection
