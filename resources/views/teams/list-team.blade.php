@if (count($teams) > 0)
	<div class="panel panel-default">
		<div class="panel-heading">
			Listado de tus equipos añadidos a la aplicación
		</div>

		<div class="panel-body">
			@include('teams.list-team-tabla')
		</div>
	</div>
@endif