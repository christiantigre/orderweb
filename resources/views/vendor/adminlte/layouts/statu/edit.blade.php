@extends('adminlte::layouts.app')


@section('htmlheader_title')
{{ trans('adminlte_lang::message.$perfil') }}
@endsection


@section('main-content')


<div class="container-fluid spark-screen">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">
            <!--titulo ventana-->Editar Estado
          </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- Main content -->
            <section class="content">
              <!-- Default box -->
              <div class="box">
                <div class="box-body">
                  @include('adminlte::errors.errors')

                  {!! Form::model($status, ['route' => ['status.update', $status->id],'files'=>true, 'method'=>'PUT','enctype'=>'multipart/form-data']) !!}
                  <div class="box-body">
                    
                    <div class="form-group">
                      {!! Form::label('Estado','Estado',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('statu',null,['class'=>'form-control','placeholder'=>'Estado','autofocus'=>'autofocus',
                        'autocomplete'=>'off']) !!}
                      </div>
                    </div>
                    
                    <div class="form-group"></div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <div class="col-sm-offset-2 col-sm-10">
                      <a href="{{ Route('status.index') }}" type="button" class="btn btn-default pull-right">Cancelar</a>
                      {!! Form::submit('Actualizar',['class'=>'btn btn-success pull-right']) !!}
                    </div>
                    <!--<a href="{{ Route('Categories.store') }}" type="button" class="btn btn-success pull-right">Guardar</a>-->
                  </div>
                  <!-- /.box-footer -->
                  <!--</form>-->
                  {!! Form::close() !!}
                  <!--/.col (right) -->
                </div>
                <!-- /.box-body -->
                <!-- /.box-footer-->
              </div>
              <!-- /.box -->

            </section>
            <!-- /.content -->
            @endsection

          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>