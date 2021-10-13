@extends('layout.base')
@section('main')

<div class="wallpaper">
	<div class="the-padding"></div>

	<h2 class="center-align agenda-title">Agenda LUX</h2>

	<div style="margin-bottom: 0;" class="row">

		<div class="row">
			<ul id="staggered-test">

				@foreach($agendas as $agenda)

				<li style="transform: translateX(0px); opacity: 1;">

					<div class="row center-align">
						<div class="col s12 m10 l4 offset-m1 offset-l4 agenda-item">
							<div class="{!! ($loop->iteration % 2 != 0) ? 'agenda-des des-left' : 'agenda-des des-right'  !!} ">
								<h4>{{$agenda->titulo_es}}</h4>
								<p>{{ $agenda->des_es }}</p>
							</div>
							<img src="{{URL::asset('assets/img/agenda/' . $agenda->url)}}">
						</div>
					</div>

				</li>

				@endforeach

			</ul>
		</div>
	</div>

</div>


<script>
	$('document').ready(function(event) {
		var options = [{
			selector: '#staggered-test',
			offset: 200,
			callback: function(el) {
				Materialize.showStaggeredList($(el));
			}
		}]
		Materialize.scrollFire(options);
		/*$('.materialboxed').materialbox();*/
	})
</script>

<style>
	.wallpaper {
		background-image: url("{{URL::asset('assets/img/wallpaper.jpg')}}");
	}

	.agenda-item {
		position: relative;
		margin-bottom: 150px;
	}

	.agenda-title {
		color: #41546d;
		margin: 50px 0 120px 0;
	}

	.agenda-des {
		position: absolute;
		width: 50%;
		padding: 1rem;
		cursor: pointer;
	}

	.agenda-item img{
		width: 424px;
	}

	.des-left {
		-webkit-transform: translate(-60%, -30%);
		-ms-transform: translate(-60%, -30%);
		transform: translate(-60%, -30%);
		background-color: #9c8340;
		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		transition: all 0.4s;
	}

	.des-right {
		-webkit-transform: translate(60%, -30%);
		-ms-transform: translate(60%, -30%);
		transform: translate(60%, -30%);
		right: 0;
		background-color: #102238;
		-webkit-transition: all 0.4s;
		-o-transition: all 0.4s;
		transition: all 0.4s;
	}

	.des-left:hover {
		-webkit-transform: translate(-60%, -30%) scale(1.1);
		-ms-transform: translate(-60%, -30%) scale(1.1);
		transform: translate(-60%, -30%) scale(1.1);
	}

	.des-right:hover {
		-webkit-transform: translate(60%, -30%) scale(1.1);
		-ms-transform: translate(60%, -30%) scale(1.1);
		transform: translate(60%, -30%) scale(1.1);
	}

	.agenda-des p {
		color: #fff;
		font-size: 1.1rem;
	}

	.agenda-des h4 {
		margin-bottom: 0.8rem;
		color: #fff;
		font-size: 1.5rem;
	}

	@media (max-width: 900px) {
		.agenda-des {
			position: relative;
			width: 100%;
			background-color: #fff;
		}

		.des-right {
			-webkit-transform: none;
			-ms-transform: none;
			transform: none;
			color: #102238;
		}

		.des-right p {
			color: #102238;
		}

		.des-right h4 {
			color: #102238;
		}

		.des-left {
			-webkit-transform: none;
			-ms-transform: none;
			transform: none;
			color: #9c8340;
		}

		.des-left p {
			color: #9c8340;
		}

		.des-left h4 {
			color: #9c8340;
		}

		.agenda-title {
			margin-bottom: 50px;
		}

		.agenda-item {
			margin-bottom: 20px;
		}
	}
	
	@media (max-width: 600px){
		.agenda-item img{
			width: 100%;
			height: auto;
		}
	}

</style>


@endsection
