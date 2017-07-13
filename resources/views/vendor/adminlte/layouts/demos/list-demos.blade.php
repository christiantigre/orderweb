<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Titulo</th>
			<th>Parrafo</th>
			<th>Link</th>
			<th>Imagen</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>            
		<?Php      $i=1;          ?>
		@foreach($demos as $demo)
		<tr>
			<th><?Php      echo $i;          ?></th>
			<th>
				<strong>
					{{ $demo->tittle }}
				</strong>
			</th>
			<th>
				<strong>
					{{ str_limit($demo->paragraph,15) }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $demo->link }}
				</strong>
			</th>
			<th>
				<strong>
					<img src="{{ asset($demo->img.'') }}" width="320" alt="demos">					
				</strong>
			</th>
			<th>
				<a href="{{ Route('demostrationes.show', $demo->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
			</th>
			<th>
				<a href="{{ Route('demostrationes.edit', $demo->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
			</th>
			<th>				
				{!! Form::open(['method'=>'DELETE', 'route'=>['demostrationes.destroy', $demo->id]]) !!}
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