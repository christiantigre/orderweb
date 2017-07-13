<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Titulo</th>
			<th>Subtitulo</th>
			<th>Parrafo</th>
			<th>Imagen</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>            
		<?Php      $i=1;          ?>
		@foreach($sliders as $slide)
		<tr>
			<th><?Php      echo $i;          ?></th>
			<th>
				<strong>
					{{ $slide->tittle }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $slide->subtittle }}
				</strong>
			</th>
			<th>
				<strong>
					{{ str_limit($slide->paragraph,15) }}
				</strong>
			</th>
			<th>
				<strong>
					<img src="{{ asset($slide->img.'') }}" width="320" alt="image02">					
				</strong>
			</th>
			<th>
				<a href="{{ Route('slider.show', $slide->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
			</th>
			<th>
				<a href="{{ Route('slider.edit', $slide->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
			</th>
			<th>				
				{!! Form::open(['method'=>'DELETE', 'route'=>['slider.destroy', $slide->id]]) !!}
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