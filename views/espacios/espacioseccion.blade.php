@extends('layout.base')
@section('main')

{!! Html::script('assets/js/vue2.3.2.js') !!}
{!! Html::script('assets/js/vue-resource.min.js') !!}

<div class="the-padding"></div>

<div id="app">

	<section style="color: #41546d;" class="seccion-espacio">
		<div class="container">
			<div class="row">
				<div class="col s12 m10 l10 offset-m1 offset-l1 center-align">
					<br>
					<h2 style="text-transform: capitalize;">Espacios</h2>
					<div style="font-size: 1.2rem;">
						{!! $espaciodes['des_' . app()->getLocale() ] !!}
					</div>
				</div>
			</div>
		</div>
	</section>

	<div v-if="isloading" class="row center-align">
		<div class="preloader-wrapper big active">
			<div class="spinner-layer spinner-blue-only">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
		</div>
	</div>

	<section style="padding: 0;" class="espacios-galeria">
		<div class="no-container">
			<div class="row">
				<div v-for="espacio in espacios" class="col s12 m3 l3">
					<div class="espacio-item">
						<div @click="selectEspacio(espacio)" class="espacio-item-img">
							<img @click="selectEspacio(espacio)" width="100%" :src="'assets/img/espacios/' + espacio.imagenes[0].url" alt="">
							<div @click="selectEspacio(espacio)" class="caption"></div>
							<h5 @click="selectEspacio(espacio)">@{{espacio.titulo_es}}</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section style="color: #41546d;" class="seccion-espacio">
		<div class="container">
			<div class="row">
				<div class="col s12 m8 l8 offset-m2 offset-l2 center-align">
					<h2 style="text-transform: capitalize; margin-top: 0;">@{{espacio.titulo_es}}</h2>
					<!--<p style="font-size: 1.2rem;">@{{espacio.des_es}}</p>-->
				</div>
			</div>
		</div>

		<div class="photos-wrap">
			<div v-for="imagen in espacio.imagenes" class="photo-wrap-container">
				<img class="materialboxed" :src="`assets/img/espacios/${imagen.url}`" alt="">
			</div>
		</div>
	</section>

</div>
<script>
	new Vue({
		el: '#app',
		data: {
			isloading: false,
			espacios: [],
			espacio: {}
		},
		mounted() {
			this.obtenerespacios()
			$('.materialboxed').materialbox()
		},
		methods: {
			obtenerespacios: function() {
				this.isloading = true
				this.$http.get('api/espacioseccion').then(response => {
					this.espacios = response.body
					this.espacio = response.body[0]
					this.isloading = false
				}, response => {
					Materialize.toast('Error Cargando Espacios', 2000);
					this.isloading = false
				})
			},
			selectEspacio: function(espacio) {
				this.espacio = espacio
			}
		}
	})

</script>

<style>
	p {
		font-size: 1.2rem !important;
	}

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

@endsection
