<div class="pop-up-container">
	<div class="new-pop-up">
		@foreach($eventos as $evento)
		<div class="pop-up-content">
			<a href="{!! route('evento', $evento->slug) !!}">
				<img src="{{URL::asset('assets/img/eventos/' . $evento->image)}}" alt="">
			</a>
		</div>
		@endforeach
	</div>
</div>

<script>
	$('document').ready(event => {
		$('.pop-up-container').click(event => {
			$('.pop-up-container').css('display', 'none')
		})
	})

</script>
