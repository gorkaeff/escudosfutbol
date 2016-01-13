{!! Form::open(['route' => 'team.store', 'class' => 'form-horizontal']) !!}
	<!-- Equipo Name -->
	<div class="form-group">
		<label for="team-name" class="col-sm-3 control-label">Nombre Equipo: </label>
		<div class="col-sm-6">
			<input type="text" name="name" id="task-name" class="form-control" value="{{ old('name') }}" required>
		</div>
	</div>

	<div class="form-group">
		<label for="team-link" class="col-sm-3 control-label">URL icono equipo: </label>
		<div class="col-sm-6">
			<input type="text" name="link" id="team-link" class="form-control" value="{{ old('link') }}" required>
		</div>
	</div>

	<div class="form-group">
		<label for="team-link_author" class="col-sm-3 control-label">Sitio del autor (copyright): </label>
		<div class="col-sm-6">
			<input type="text" name="link_author" id="team-link_author" class="form-control" value="{{ old('link_author') }}" required>
		</div>
	</div>

	<div class="form-group">
		<label for="team-information" class="col-sm-3 control-label">Información Adicional: </label>
		<div class="col-sm-6">
			<textarea name="information" id="team-information" class="form-control">{{ old('information') }}</textarea>
		</div>
	</div>

	<!-- Add Task Button -->
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-6">
			<button type="submit" class="btn btn-default">
				<i class="fa fa-btn fa-plus"></i>Añadir Equipo
			</button>
		</div>
	</div>
{!! Form::close() !!}