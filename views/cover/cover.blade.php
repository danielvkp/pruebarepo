<div class="intro">
	<ul id="the-menu" class="full-menu hide-on-med-and-down">
		<li class="full-menu-logo">
			<a href="{{url('/')}}"><img width="100%" src="{{URL::asset('assets/img/logo.webp')}}" alt=""></a>
		</li>
		<li class="space"></li>
		<div class="m-items-container">
			<li class="menu-items"><a href="{{ url('la-carta') }}">@lang('messages.carta')</a></li>
			<li class="menu-items"><a id="espacio-item-menu-lateral" class="espacio-item-menu">@lang('messages.espacio')</a></li>
			<li class="menu-items"><a href="{{url('galeria')}}">galeria</a></li>
			<li class="menu-items"><a href="{{url('evento')}}">@lang('messages.evento')</a></li>
			<li class="menu-items"><a href="{{url('agenda-lux')}}">@lang('messages.agenda')</a></li>
			<li class="menu-items"><a href="{{url('lifestyle-lux')}}">lifestyle</a></li>
			<li class="social-item">
				<a target="_blank" href="https://www.facebook.com/luxrestaurante/"><span class="social-icon icon-facebook2"></span></a>
				<a target="_blank" href="https://www.instagram.com/luxmadrid/?hl=es-la"><span class="social-icon icon-instagram"></span></a>
			</li>
		</div>
	</ul>

	<div id="the-intro" class="intro-text">
		<h1>Bienvenido a <strong>lux</strong></h1>
		<h2>{{ $info['titulo_secundario_' . app()->getLocale() ]}}</h2>
		<a href="{{url('reserva')}}" class="my-btn">@lang('messages.reserva')</a>
	</div>
</div>

<style>
	.espacio-item-menu {
		cursor: pointer;
	}

</style>

<script>
	$("document").ready(function(event) {
		$("#espacio-item-menu-lateral").click(function(e) {
			$('html,body').animate({
				scrollTop: $("#espacios-index-template").offset().top
			}, "slow")
		})
	})

</script>
