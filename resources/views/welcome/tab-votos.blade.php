<div role="tabpanel" class="tab-pane" id="votos">
	<table 
		id="listado_equipos_table" 
		data-toggle="table" 
		data-pagination="true"
		data-search="true"
		data-locale="es-ES"
		class="table task-table">
		<thead>
			<tr>
				<th data-field="votos" class="center">Votos</th>
				<th data-field="escudo" class="center">Escudo</th>
				<th data-field="equipo" data-sortable="true" class="center">Equipo</th>
				<th data-field="usuario" data-sortable="true" class="center">Usuario</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($ratings as $rating)
				<tr>
					<td class="table-text col-md-1">
						<div><span style="font-size: 20px;font-weight:800;">{{$rating->votos}}</span></div>
					</td>
					<td class="table-text col-md-1">
						<div>
							{!! HTML::image(
							$rating->enlace, 
							'', 
							array('class' => 'fotoEscudo' )) !!}
						</div>
					</td>

					<td class="table-text col-md-3">
						<div>{{ $rating->equipo }}</div>
					</td>

					<td class="table-text col-md-3">
						<div>{{ $rating->usuario }}</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>	
</div>