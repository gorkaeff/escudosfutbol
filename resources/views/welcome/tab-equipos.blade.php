<div role="tabpanel" class="tab-pane active" id="equipos">

	<table 
		id="listado_equipos_table" 
		data-toggle="table" 
		data-pagination="true"
		data-search="true"
		data-locale="es-ES"
		class="table-responsive task-table">
		<thead>
			<tr>
				<th data-field="escudo">Escudo</th>
				<th data-field="equipo" data-sortable="true">Equipo</th>
				<th data-field="info">Información</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($teams as $team)
				<tr>
					<td class="table-text col-md-1">
						<div>
							{!! HTML::image(
							$team->link, 
							'', 
							array('class' => 'fotoEscudoBig' )) !!}
						</div>
					</td>

					<td class="table-text col-md-3">
						<div>{{ $team->name }}</div>
					</td>

					<td class="table-text">
						<b><i class="glyphicon glyphicon-tag"></i></b>{{ $team->information != null ? $team->information : 'Sin información'}}<br />
						<b><i class="glyphicon glyphicon-user"></i></b>{{ $team->user->name }}<br />
						<b><i class="glyphicon glyphicon-link"></i></b><a href="{{ $team->link }}">Link escudo</a><br />
						<b><i class="glyphicon glyphicon-link"></i></b><a href="{{ $team->link_author }}">Link Copyright</a>
					</td>

				</tr>
			@endforeach
		</tbody>
	</table>

</div>