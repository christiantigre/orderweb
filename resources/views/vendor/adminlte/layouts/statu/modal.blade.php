<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Actualiza estado</h4>
				</div>
				<div class="modal-body">
					<div class="box-body">
						{!! Form::open(['id'=>'form']) !!}
						<div class="form-group">
							{!! Form::label('statu','Estado',['class'=>'col-sm-2 control-label',]) !!}
							<div class="col-sm-10">
								<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
								<input type="hidden" id="id">
								{!! Form::text('statu',null,['id'=>'statu','class'=>'form-control','placeholder'=>'Estado','autofocus'=>'autofocus',
								'autocomplete'=>'off']) !!}
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
					<!--<button type="button" class="btn btn-primary">Save changes</button>-->
					<!--{!!link_to('admin/upstatus/', $title='Actualizar', $attributes = ['id'=>'actualizar', 'class'=>'btn btn-primary'])!!}-->
					{!! Form::submit('Guardar',['class'=>'btn btn-success pull-right']) !!}					
				</div>
			</div>
			<!-- /.modal-content -->
			{!! Form::close() !!}

		</div>
		<!-- /.modal-dialog -->
	</div>
<!-- /.modal -->