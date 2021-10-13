<section id="espacios-index-template" class="espacios">
	<div class="container">
		<div class="row">
			<div class="col s12 m8 l8 offset-m2 offset-l2 center-align">
				<h2 style="text-transform:uppercase;" class="center-align">@lang('messages.espacio')</h2>
				{!! $info['espacios_' . app()->getLocale() ] !!} <br>
				<div class="col s12 center-align">
					<i class="down medium material-icons">expand_more</i>
				</div>
				<div class="col s12 center-align">
					<a href="{{ url('espacios') }}" class="my-espacios-btn">Ver mas</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="espacios-galeria">
	<div class="no-container">
		<div class="row">
			@foreach($espacios as $esp)
			<div class="col s12 m3 l3">
				<div class="espacio-item">
					<div class="espacio-item-img">
						<img width="100%" src="{{ URL::asset('assets/img/espacios/' . $esp->first_image->url)}}" alt="">
						<div class="caption"></div>
						<h5>{!! $esp['titulo_' . app()->getLocale() ] !!}</h5>
					</div>
					<br>
					<div class="espacio-item-more">
						<a href="{!! route('espacio', $esp->slug) !!}" class="my-btn not-btn">Ver más</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>

	</div>
</section>

<script>
	var max = 200;
	var tot, str;
	$('.espacio-item-text').each(function() {
		str = String($(this).html())
		tot = str.length
		str = (tot <= max) ? str : str.substring(0, (max + 1)) + "..."
		$(this).html(str)
	});

</script>

<style>
	.my-espacios-btn {
		font-weight: 700;
		padding: 10px 15px;
		border: solid 1px #fff;
		color: #fff;
	}

</style>
