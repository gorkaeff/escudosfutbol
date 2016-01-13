<div role="tabpanel" class="tab-pane" id="ultimos">
	<table 
		id="listado_ultimpos_equipos_table" 
		data-toggle="table" 
		data-pagination="true"
		data-search="true"
		data-locale="es-ES"
		class="table-responsive task-table">
		<thead>
			<tr>
				<th data-field="escudo">Escudo</th>
				<th data-field="equipo">Equipo</th>
				<th data-field="info">Información</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($last_teams as $team)
				<tr>
					<td class="table-text col-md-1">
						<div>
							{!! HTML::image(
							$team->link, 
							'', 
							array('class' => 'fotoEscudoBig' )) !!}
						</div>
					</td>

					<td class="table-text">
						<div>{{ $team->name }}</div>
					</td>

					<td class="table-text">
						<b><i class="glyphicon glyphicon-tag"></i></b>{{ $team->information != null ? $team->information : 'Sin información'}}<br />
						<b><i class="glyphicon glyphicon-user"></i></b>{{ $team->user->name }}<br />
						<b><i class="glyphicon glyphicon-calendar"></i></b>{{ date('d/m/Y', strtotime($team->created_at)) }}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>