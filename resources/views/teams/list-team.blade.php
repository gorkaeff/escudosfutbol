@if (count($teams) > 0)
	<div class="panel panel-default">
		<div class="panel-heading">
			Tus equipos
		</div>

		<div class="panel-body">
			<table class="table table-striped task-table">
				<thead>
					<th>Escudo</th>
					<th>Nombre Equipo</th>
					<th>&nbsp;</th>
				</thead>
				<tbody>
					@foreach ($teams as $team)
						<tr>
							<td class="table-text"><div>{{ $team->link }}</div></td>
							<td class="table-text"><div>{{ $team->name }}</div></td>

							<!-- Team Delete Button -->
							<td>
								{!! Form::open(array('route' => array('team.destroy', $team->id), 'method' => 'delete')) !!}
									<button type="submit" id="delete-task-{{ $team->id }}" class="btn btn-danger">
										<i class="fa fa-btn fa-trash"></i>Delete
									</button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endif