<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Contactos</th>
			<th>Email</th>
			<th>Origen</th>
			<th>Foto</th>
			<th>Estado</th>
			<th>Web</th>
			<th>Departamento</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>            
		<?Php      $i=1;          ?>
		@foreach($employees as $employ)
		<tr>
			<th><?Php      echo $i;          ?></th>
			<th>
				<strong>
					{{ $employ->name }} {{ $employ->lastname }}
				</strong>
			</th>			
			<th>
				<strong>
					{{ $employ->address }}
				</strong>
			</th>
			<th>
				<strong>
					{{ $employ->cel }} -/-{{ $employ->phone }}
				</strong>
			</th>			
			<th>
				<strong>
					{{ $employ->email }} 
				</strong>
			</th>			
			<th>
				<strong>
					{{ $employ->country->country }} / {{ $employ->province->province }} / {{ $employ->canton->canton }} / {{ $employ->parroquia->parroquia }}
				</strong>
			</th>
			<th>
				<strong>
					<img src="{{ asset($employ->perfil.'') }}" width="150" alt="image02" class="user-image">					
				</strong>
			</th>
			<th>
				<strong>
					@if(($employ->status)=='1')
					Activado
					@else
					Desactivado
					@endif
				</strong>
			</th>
			<th>
				<strong>
					@if(($employ->web)=='1')
					Visible
					@else
					Oculto
					@endif
				</strong>
			</th>
			<th>
				<strong>
					{{ $employ->department->department }}
				</strong>
			</th>
			<th>
				<a href="{{ Route('employees.show', $employ->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
			</th>
			<th>
				<a href="{{ Route('employees.edit', $employ->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
			</th>
			<th>				
				{!! Form::open(['method'=>'DELETE', 'route'=>['employees.destroy', $employ->id]]) !!}
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
			<th>#</th>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Contactos</th>
			<th>Email</th>
			<th>Origen</th>
			<th>Foto</th>
			<th>Estado</th>
			<th>Web</th>
			<th>Departamento</th>
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