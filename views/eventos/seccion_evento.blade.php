@extends('layout.base')
@section('main')

<div class="the-padding"></div>

<section class="info-evento about-us">
	<div class="container">

		<div class="row">
			<div class="col s12 center-align">
				<h3>{!! $evento['titulo_' . app()->getLocale() ] !!}</h3>
			</div>
		</div>

		<div class="row">
			<h5 class="center-align">Contactanos</h5>
			<br>
			<div class="col s12 m6 l6 offset-m3 offset-l3">
				{!! Form::open(['url' => '/contacto', 'method' => 'POST']) !!}

				<div class="row">
					<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
						<i class="material-icons prefix">account_circle</i>
						{!! Form::text('nombre', null, ['id' => 'nombre', 'class' => 'validate']) !!}
						<label for="nombre">Nombre</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
						<i class="material-icons prefix">local_phone</i>
						{!! Form::text('telefono', null, ['id' => 'telefono', 'class' => 'validate']) !!}
						<label for="telefono">Telefono</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
						<i class="material-icons prefix">email</i>
						{!! Form::email('email', null, ['id' => 'email', 'class' => 'validate']) !!}
						<label for="email">Email</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12 m10 l10 offset-m1 offset-l1">
						<i class="material-icons prefix">mode_edit</i>
						{!! Form::textarea('mensaje', null, ['id' => 'mensaje', 'rows' => 4, 'cols' => 54 ,'class' => 'materialize-textarea']) !!}
						<label for="mensaje">Mensaje</label>
					</div>
				</div>

				<div class="row">
					<div class="col s12 m10 l10 offset-m1 offset-l1 center-align">
						<button type="submit" class="my-btn">Enviar</button>
					</div>
				</div>

				{!! Form::close() !!}
			</div>
		</div>

		<div class="row center-align">
			<div class="divider"></div>
			<br>
			<br>
			<div class="col s12">
				<a target="_blank" href="{{URL::asset('pdf/Lux_menu_grupo_' . app()->getLocale() . '.pdf' )}}" class="my-btn">@lang('messages.menugrupo')</a>
			</div>

		</div>

		<div class="row">
			<div style="padding-bottom: 3rem;" class="col s12 center-align">
				<h5>Programación</h5>
			</div>

			@foreach($eventos as $event)
			<div style="margin-bottom: 3.5rem;" class="col s12 m8 l8 offset-m2 offset-l2">
				<div class="agenda-item">
					<div class="col s12 m6 l6 evento-image-container">
						<i class="small material-icons icono">search</i>
						<img class="evento-image" width="100%" src="{{URL::asset('assets/img/eventos/' . $event->image)}}" alt="">
					</div>
					<div class="col s12 m6 l6">
						<h5 style="margin:0;">{!! $event['titulo_' . app()->getLocale() ]!!}</h5>
						<p style="font-size: 16px;" class="evento-info">{!! $event['des_' . app()->getLocale() ]!!}</p>
						@if($event->expired == 'true')
						<a class="my-btn" href="{!! route('evento', $event->slug) !!}">Reservar</a>
						@endif
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>


	<div class="row">
		<h3 class="center-align">Galeria Eventos</h3>
		<div class="row">
			@foreach($galeria as $img)
			<div class="col s12 m12 l4">
				<img class="materialboxed" width="100%" src="{{ URL::asset('assets/img/galeriaeventos/' . $img->url) }}">
			</div>
			@endforeach
		</div>
	</div>

</section>

<script>
	var max = 100;
	var tot, str;
	$('.evento-info').each(function() {
		str = String($(this).html())
		tot = str.length
		str = (tot <= max) ? str : str.substring(0, (max + 1)) + "..."
		$(this).html(str)
	});

	$('.evento-image').click(function(event) {
		$('.visor-imagen').css('display', 'block');
		$('#visor-imagen-ref').attr('src', $(this)[0].src);
	});

	$('.visor-imagen').click(function(e) {
		$(this).css('display', 'none')
	})

	$('#visor-imagen-ref').click(function(e) {
		$('.visor-imagen').css('display', 'none')
	})
</script>

<style>
	#photos {
		line-height: 0;
		-webkit-column-count: 3;
		-webkit-column-gap: 0px;
		-moz-column-count: 3;
		-moz-column-gap: 0px;
		column-count: 3;
		column-gap: 0px;
		margin-bottom: 5rem;
	}

	#photos img {
		border: solid 1px #fff;
		width: 100% !important;
		height: auto !important;
	}

	@media (max-width: 1200px) {
		#photos {
			-moz-column-count: 4;
			-webkit-column-count: 4;
			column-count: 4;
		}
	}

	@media (max-width: 1000px) {
		#photos {
			-moz-column-count: 3;
			-webkit-column-count: 3;
			column-count: 3;
		}
	}

	@media (max-width: 800px) {
		#photos {
			-moz-column-count: 2;
			-webkit-column-count: 2;
			column-count: 2;
		}
	}

	@media (max-width: 400px) {
		#photos {
			-moz-column-count: 1;
			-webkit-column-count: 1;
			column-count: 1;
		}
	}
</style>

@endsection