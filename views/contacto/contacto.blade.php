<section style="margin-top:3.5rem;" class="contacto">

	<div class="container">
		<div class="row">

			<div class="col s12">

				<div class="col s12 m6 l6">
					<h2 style="margin-bottom: 1.5rem; text-transform:uppercase; font-size:2.7rem;" class="center-align">@lang('messages.reserva')</h2>
					<br>
					<div class="col s12">
						<iframe src="https://uk6.eveve.com/tms/DateCovers.php?Est=Lux&amp;lang=Spanish" frameborder="0" style="height:460px;width:100%;"></iframe>
					</div>
				</div>

				<div class="col s12 m6 l6">

					<h2 style="text-transform:uppercase; font-size:2.7rem;" class="center-align">@lang('messages.contacto')</h2>

					{!! Form::open(['url' => '/contacto', 'method' => 'POST']) !!}

					<div class="row">
						<div class="input-field col s12 m10 l10">
							<i class="material-icons prefix">account_circle</i>
							{!! Form::text('nombre', null, ['id' => 'nombre', 'class' => 'validate']) !!}
							<label for="nombre">Nombre</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12 m10 l10">
							<i class="material-icons prefix">email</i>
							{!! Form::email('email', null, ['id' => 'email', 'class' => 'validate']) !!}
							<label for="email">Email</label>
						</div>
					</div>

					<div class="row">
						<div class="input-field col s12 m10 l10">
							<i class="material-icons prefix">mode_edit</i>
							{!! Form::textarea('mensaje', null, ['id' => 'mensaje', 'rows' => 4, 'cols' => 54 ,'class' => 'materialize-textarea']) !!}
							<label for="mensaje">Mensaje</label>
						</div>
					</div>

					<div class="row">
						<div class="col s12 m10 l10 center-align">
							<button type="submit" class="my-btn">Enviar</button>
						</div>
					</div>

					{!! Form::close() !!}
				</div>

			</div>

			<div class="row">
				<div class="col s12">
					<div class="divider"></div>
				</div>
			</div>

			<br>
			<br>

			<div style="margin-bottom:5rem;" class="col s12 m10 l10 offset-m1 offset-l1">
				<div class="google-map">
					<div class="contenedor-mapa"><iframe id="imapaframe" src="" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
				</div>
			</div>

		</div>
	</div>

</section>

<script type="text/javascript">
	$('document').ready(function(event) {
		const url = "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12149.322552698266!2d-3.6848885!3d40.423677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8fbe271fd023961f!2sLux+Madrid!5e0!3m2!1ses!2ses!4v1503991128708"
		$('#imapaframe').attr('src', url)
	});
</script>