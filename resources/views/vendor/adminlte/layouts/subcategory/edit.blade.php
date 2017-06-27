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
            <!--titulo ventana-->Editar Sub - Categoria
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

                  {!! Form::model($subcategory, ['route' => ['subcategories.update', $subcategory->id],'files'=>true,'enctype'=>'multipart/form-data']) !!}



                  <!--{!! Form::model($subcategory, ['route'=>['subcategories.update',$subcategory->id], 'method'=>'PUT']) !!}-->

                  <div class="box-body">
                    <div class="form-group">
                      {!! Form::label('description','Categoria',['class'=>'col-sm-2 control-label',]) !!}

                      <div class="col-sm-10">

                        {!! Form::select('category_id', $categories, null,['class'=>'form-control','autofocus'=>'autofocus'])    !!}

                      </div>
                    </div>
                    <div class="form-group">
                      {!! Form::label('name','Nombre',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Sub - Categoria','autofocus'=>'autofocus',
                        'autocomplete'=>'off']) !!}
                      </div>
                    </div>
                    <div class="form-group">
                      {!! Form::label('estado','Estado',['class'=>'col-sm-2 control-label']) !!}

                      <div class="col-sm-10">
                        {!! Form::select('status', ['0' => 'Inactivo', '1' => 'Activo'], '1',['class'=>'form-control'])    !!}
                      </div>
                    </div>
                    <div class="form-group">
                      {!! Form::label('description','Descripción',['class'=>'col-sm-2 control-label']) !!}

                      <div class="col-sm-10">
                        {!! Form::textarea('description',null,['class'=>'form-control','placeholder'=>'Enter ...','autofocus'=>'autofocus']) !!}
                      </div>
                    </div>


                    <div class="form-group"></div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <div class="col-sm-offset-2 col-sm-10">
                      <a href="{{ Route('subcategories.index') }}" type="button" class="btn btn-default pull-right">Cancelar</a>
                      {!! Form::submit('Guardar',['class'=>'btn btn-success pull-right']) !!}
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