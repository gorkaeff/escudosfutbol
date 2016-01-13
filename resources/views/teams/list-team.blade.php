@if (count($teams) > 0)
	<div class="panel panel-default">
		<div class="panel-heading">
			Listado de Tus equipos añadidos a la aplicación
		</div>

		<div class="panel-body">
			<table class="table table-striped task-table">
				<thead>
					<th>Escudo</th>
					<th>Nombre Equipo</th>
					<th>Acciones</th>
				</thead>
				<tbody>
					@foreach ($teams as $team)
						<tr>
							<td class="table-text">
								<div>{{ $team->link }}</div>
							</td>
							<td class="table-text">
								<div>{{ $team->name }}</div>
							</td>
							<td class="table-text">
								<div><a href="{!! route('team.destroy', [$team->id]) !!}">Editar</a></div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endif