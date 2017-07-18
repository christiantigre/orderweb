<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Departamento</th>
			<th>Estado</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>            
		<?Php      $i=1;          ?>
		@foreach($departments as $department)
		<tr>
			<th><?Php      echo $i;          ?></th>
			<th>
				<strong>
					{{ $department->department }}
				</strong>
			</th>
			<th>
				<strong>
					@if(($department->status)=='1')
					Activado
					@else
					Desactivado
					@endif
				</strong>
			</strong>
		</th>	
		<th>
		<a href="{{ Route('departments.show', $department->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
		</th>
		<th>
			<a href="{{ Route('departments.edit', $department->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
		</th>
		<th>				
			{!! Form::open(['method'=>'DELETE', 'route'=>['departments.destroy', $department->id]]) !!}
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="DELETE">
			<button type="submit" onclick="return confirm('Esta seguro que desea eliminar el registro?')" class="btn btn-block btn-danger btn-xs">Eliminar</button>				
			{!! Form::close() !!}
		</th>
	</tr>
	<?Php      $i++;          ?>
	@endforeach
</tbody>
<tfoot>
	<tr>
		<th>Titulo</th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
</tfoot>
</table>

<script>
	$(function () {
		$("#example1").DataTable();
		$('#example2').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false
		});
	});
</script>