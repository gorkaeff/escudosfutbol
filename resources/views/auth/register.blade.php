@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
				<div class="panel-heading">
					Registro de usuario
				</div>

				<div class="panel-body">
					@include('common.errors')
					@include('auth.register-form')
				</div>
			</div>
		</div>
	</div>
@endsection