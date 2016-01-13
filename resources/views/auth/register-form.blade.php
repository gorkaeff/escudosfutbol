<form action="/auth/register" method="POST" class="form-horizontal">
	{{ csrf_field() }}

	<!-- Name -->
	<div class="form-group">
		<label for="name" class="col-sm-3 control-label">Nombre de usuario: </label>

		<div class="col-sm-6">
			<input type="text" name="name" class="form-control" value="{{ old('name') }}">
		</div>
	</div>

	<!-- E-Mail Address -->
	<div class="form-group">
		<label for="email" class="col-sm-3 control-label">E-Mail: </label>

		<div class="col-sm-6">
			<input type="email" name="email" class="form-control" value="{{ old('email') }}">
		</div>
	</div>

	<!-- Password -->
	<div class="form-group">
		<label for="password" class="col-sm-3 control-label">Contraseña: </label>

		<div class="col-sm-6">
			<input type="password" name="password" class="form-control">
		</div>
	</div>

	<!-- Confirm Password -->
	<div class="form-group">
		<label for="password_confirmation" class="col-sm-3 control-label">Repetir Contraseña: </label>

		<div class="col-sm-6">
			<input type="password" name="password_confirmation" class="form-control">
		</div>
	</div>

	<!-- Register Button -->
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-6">
			<button type="submit" class="btn btn-default">
				<i class="fa fa-btn fa-sign-in"></i>Registrarse
			</button>
		</div>
	</div>
</form>