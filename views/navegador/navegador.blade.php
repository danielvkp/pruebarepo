<div id="the-sticky-menu" class="sticky-menu hide-on-med-and-down">
	<div class="left-side">
		<ul>
			<li><a href="{{ url('la-carta') }}">@lang('messages.carta')</a></li>
			<li><a href="{{url('espacios')}}">@lang('messages.espacio')</a></li>
			<li><a href="{{url('evento')}}">@lang('messages.evento')</a></li>
		</ul>
	</div>
	<div class="sticky-menu-logo">
		<a href="{{url('/')}}"><img height="80" src="{{URL::asset('assets/img/logo.webp')}}" alt=""></a>
	</div>
	<div class="right-side">
		<ul>
			<li><a href="{{url('agenda-lux')}}">@lang('messages.agenda')</a></li>
			<li><a href="{{url('reserva')}}">@lang('messages.reserva')</a></li>
			<li>
				{!! Form::open(['url' => 'cambiaridioma', 'method' => 'post']) !!}
				<a href=""><button class="langbutton" type="submit">ES/EN</button></a>
				{!! Form::close() !!}
			</li>
		</ul>
	</div>
</div>

<div class="my-mobil-trigger show-on-medium-and-down hide-on-med-and-up">
	<a href="{{url('/')}}"><img height="70" src="{{URL::asset('assets/img/logo.webp')}}" alt="logo"></a>
	<i id="menu-mobil-trigger" class="small material-icons">dehaze</i>
</div>

<div class="menu-mobil">
	<ul>
		<li><a target="_blank" href="{{ url('la-carta') }}">@lang('messages.carta')</a></li>
		<li><a href="{{url('galeria')}}">galeria</a></li>
		<li><a href="{{url('evento')}}">@lang('messages.evento')</a></li>
		<li><a href="{{url('reserva')}}">@lang('messages.reserva')</a></li>
		<li><a target="_blank" href="http://luxmadrid.site/influencerprogramme_en">influencer</a></li>
	</ul>
</div>

<script>
	$('document').ready(function(event) {
		$('#menu-mobil-trigger').click(function(e) {
			$('.menu-mobil').fadeToggle('slow', 'linear');
		})
	})
</script>

<style>
	.langbutton {
		border: none;
		background-color: transparent;
	}

	.langbutton:hover {
		background-color: transparent;
	}

	.langbutton:focus {
		background-color: transparent;
	}

	.langbutton:active {
		background-color: transparent;
	}

	.sticky-menu {
		top: 0;
	}
</style>
