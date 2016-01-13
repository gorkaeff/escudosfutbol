@extends('layouts.app')

@section('content')
	<div class="container">
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
			</ul>

			<div class="tab-content">
				@include('welcome.tab-equipos')
				@include('welcome.tab-votos')
				@include('welcome.tab-ultimos')
			</div>

		</div>
	</div>
@endsection