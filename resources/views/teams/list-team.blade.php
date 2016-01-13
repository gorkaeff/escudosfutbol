@if (count($teams) > 0)
	<div class="panel panel-default">
		<div class="panel-heading">
			Listado de tus equipos añadidos a la aplicación
		</div>

		<div class="panel-body">
			<table class="table table-striped task-table">
				<thead>
					<th class="center">Escudo</th>
					<th class="center">Nombre Equipo</th>
					<th class="center">Obtenido desde</th>
					<th class="center">Votos</th>
					<th class="center">Acciones</th>
				</thead>
				<tbody>
					@foreach ($teams as $team)
						<tr>
							<td class="table-text">
								<div>
									{!! HTML::image(
									$team->link, 
									'', 
									array('class' => 'img-rounded fotoEscudo' )) !!}
								</div>
							</td>
							<td class="table-text">
								<div>{{ $team->name }}</div>
							</td>
							<td class="table-text">
								<div>{{ $team->link_author }}</div>
							</td>
							<td class="table-text">
								<div>{{ $team->ratings->count() }}</div>
							</td>
							<td class="table-text">
								<div><a href="{!! route('team.edit', [$team->id]) !!}">Editar</a></div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endif