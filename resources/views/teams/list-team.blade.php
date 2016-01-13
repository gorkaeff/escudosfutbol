@if (count($teams) > 0)
	<div class="panel panel-default">
		<div class="panel-heading">
			Current Tasks
		</div>

		<div class="panel-body">
			<table class="table table-striped task-table">
				<thead>
					<th>Task</th>
					<th>&nbsp;</th>
				</thead>
				<tbody>
					@foreach ($teams as $team)
						<tr>
							<td class="table-text"><div>{{ $team->name }}</div></td>

							<!-- Task Delete Button -->
							<td>
								<form action="/task/{{ $team->id }}" method="POST">
									{{ csrf_field() }}
									{{ method_field('DELETE') }}

									<button type="submit" id="delete-task-{{ $team->id }}" class="btn btn-danger">
										<i class="fa fa-btn fa-trash"></i>Delete
									</button>
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@endif