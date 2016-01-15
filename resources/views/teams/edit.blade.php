@extends('layouts.app')

@section('content')
	<div class="container">
		{!! Form::model($team, ['route' => ['team.update', $team->id], 'method' => 'patch', 'class' => 'form-horizontal']) !!}
			@include('common.errors')
			<div class="form-group">
				<label for="team-name" class="col-sm-3 control-label">Nombre Equipo: </label>
				<div class="col-sm-6">
					<input type="text" name="name" id="team-name" class="form-control" value="{{$team->name}}" required>
				</div>
			</div>

			<div class="form-group">
				<label for="team-link" class="col-sm-3 control-label">URL icono equipo: </label>
				<div class="col-sm-6">
					<input type="text" name="link" id="team-link" class="form-control" value="{{$team->link}}" required>
				</div>
			</div>

			<div class="form-group">
				<label for="team-link_author" class="col-sm-3 control-label">Sitio del autor (copyright): </label>
				<div class="col-sm-6">
					<input type="text" name="link_author" id="team-link_author" class="form-control" value="{{$team->link_author}}" required>
				</div>
			</div>

			<div class="form-group">
				<label for="team-information" class="col-sm-3 control-label">Información Adicional: </label>
				<div class="col-sm-6">
					<textarea name="information" id="team-information" class="form-control">{{$team->information}}</textarea>
				</div>
			</div>

			<!-- Add Task Button -->
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-3">
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-3">
							<button type="submit" class="btn btn-default">
								<i class="fa fa-btn fa-plus"></i>Actualizar Equipo
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<form action="/team/{{ $team->id }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger">
								<i class="fa fa-btn fa-minus-circle"></i>Borrar Equipo
							</button>
					</form>
				</div>
			</div>

		{!! Form::close() !!}

	</div>
@endsection