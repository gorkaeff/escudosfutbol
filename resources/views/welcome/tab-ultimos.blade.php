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
				<th data-field="equipo" data-sortable="true">Equipo</th>
				<th data-field="info">Información</th>
				<th data-field="votos">Votos</th>
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
							array('class' => 'fotoEscudo' )) !!}
						</div>
					</td>

					<td class="table-text">
						<div>{{ $team->name }}</div>
					</td>

					<td class="table-text">
						<b>Usuario: </b>{{ $team->user->name }}<br />
						<b>Link foto: </b><a href="{{ $team->link }}">{{ $team->link }}</a><br />
						<b>Link Copyright: </b><a href="{{ $team->link_author }}">{{ $team->link_author }}</a><br />
						<b>Información: </b>{{ $team->information }}<br />
					</td>

					<td class="table-text">
						<div>0</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>