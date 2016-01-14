<table 
	id="listado_equipos_usuario_table" 
	data-toggle="table" 
	data-pagination="true"
	data-search="true"
	data-locale="es-ES"
	class="table-responsive table-striped task-table">
	<thead>
		<tr>
			<th data-field="escudo" class="center">Escudo</th>
			<th data-field="nombre" class="center">Nombre Equipo</th>
			<th data-field="obtenido" class="center">Obtenido desde</th>
			<th data-field="votos" class="center">Votos</th>
			<th data-field="acciones" class="center">Acciones</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($teams as $team)
			<tr>
				<td class="table-text">
					<div>
						{!! HTML::image(
						$team->link, 
						'', 
						array('class' => 'fotoEscudo' )) !!}
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