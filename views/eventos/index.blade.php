@extends('layout.base')
@section('main')

<div class="the-padding"></div>

<div style="color: #41546d;" class="container">
	<div class="row">

		<div style="margin-top: 2rem;" class="col s12">
			<h3 style="text-transform:capitalize;" class="center-align">{!! $evento['titulo_' . app()->getLocale() ] !!}</h3>
		</div>

		<div style="margin-bottom: 2rem;" class="col s12 m10 l10 offset-m1 offset-l1">
			<p class="center-align">{!! $evento['des_' . app()->getLocale() ] !!}</p>
		</div>

		<div style="margin-bottom: 3rem;" class="col s12 m10 l10 offset-m1 offset-l1 center-align">
			<div class="center-align">
				@foreach($evento->menu as $menu)
				@if(!$loop->last)
				<a target="_blank" style="text-transform:capitalize;" href="{{URL::asset('pdf/' . $menu->url)}}">{!! $menu->titulo_es !!}</a> -
				@else
				<a target="_blank" style="text-transform:capitalize;" href="{{URL::asset('pdf/' . $menu->url)}}">{!! $menu->titulo_es!!}</a>
				@endif
				@endforeach
			</div>
		</div>

		<div class="col s10 m6 l6 offset-s1 offset-m3 offset-l3 center-align">
			<iframe src="{{ $evento['url'] }}" frameborder="0" style="height:460px;width:100%;"></iframe>
		</div>
	</div>
</div>

@endsection
