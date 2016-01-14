@extends('layouts.app')

@section('content')
	<div class="container">

		<div class="jumbotron">
			<h3>Bienvenid@ a escudosfutbol,</h3>
			<p>Registrate y empieza a añadir escudos que no aparezcan en nuestra base de datos. <br />
			Al rellenar la ficha deberás indicar el link donde está alojado el escudo y también una referencia desde donde lo has obtenido (wikipedia, tu blog...)<br />
			Una vez realizado, aparecerá tu escudo y lo podrás votar y compartir en las redes sociales!.
			</p>
		</div>

		<div class="col-sm-12">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#equipos" aria-controls="equipos" role="tab" data-toggle="tab">Equipos</a>
				</li>
				<li role="presentation">
					<a href="#votos" aria-controls="votos" role="tab" data-toggle="tab">+ Votados</a>
				</li>
				<li role="presentation">
					<a href="#ultimos" aria-controls="ultimos" role="tab" data-toggle="tab">Últimos Equipos</a>
				</li>
				<li role="presentation">
					<a href="#usuarios" aria-controls="usuarios" role="tab" data-toggle="tab">Usuarios</a>
				</li>
			</ul>

			<div class="tab-content">
				@include('common.status')
				@include('welcome.tab-equipos')
				@include('welcome.tab-votos')
				@include('welcome.tab-ultimos')
				@include('welcome.tab-usuarios')
			</div>

		</div>
	</div>
@endsection