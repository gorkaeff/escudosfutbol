<div role="tabpanel" class="tab-pane" id="usuarios">
	<table 
		id="listado_usuarios_table" 
		data-toggle="table" 
		data-pagination="true"
		data-search="true"
		data-locale="es-ES"
		class="table-responsive task-table">
		<thead>
			<tr>
				<th data-field="usuario" data-sortable="true">Usuario</th>
				<th data-field="equipos">Equipos Insertados</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($users as $user)
				<tr>
					<td class="table-text">
						<div>{{ $user->name }}</div>
					</td>
					<td class="table-text">
						<div>{{ $user->teams->count() }}</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
</div>