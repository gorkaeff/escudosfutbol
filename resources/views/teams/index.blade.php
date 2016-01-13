@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Añadir Nuevo Equipo
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')
					@include('teams.new-team')
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			@include('teams.list-team')
		</div>
	</div>
@endsection