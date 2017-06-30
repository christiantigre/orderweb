<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Estado</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>            
		<?Php      $i=1;          ?>
		@foreach($status as $statu)
		<tr>
			<th><?Php      echo $i;          ?></th>
			<th>
				<strong>
					{{ $statu->statu }}
				</strong>
			</th>
			<th>
				<a href="{{ Route('status.show', $statu->id) }}" type="button" class="btn btn-block btn-primary btn-xs">Ver</a>
			</th>
			<th>
				<!--{{url('admin/updatestatus', $statu->id)}}-->
				<!--<a href="" OnClick="Mostrar({{ $statu->id }})" data-toggle="modal" data-target="#modal-default" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>-->
				<a href="{{ Route('status.edit', $statu->id) }}" type="button" class="btn btn-block btn-warning btn-xs">Editar</a>
			</th>
			<th>				
				{!! Form::open(['method'=>'DELETE', 'route'=>['status.destroy', $statu->id]]) !!}
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
			<th>Estado</th>
			<th></th>
			<th></th>
		</tr>
	</tfoot>
</table>

<div class="text-center">
	{!!$status->links()!!}
</div>


