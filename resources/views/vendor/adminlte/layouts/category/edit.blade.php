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
            <!--titulo ventana-->Editar Categoria
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
              <div class="box">
                <!--<h3 class="box-title">Editar Categoria</h3>-->
                <div class="box-body">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="box-body">
                        @include('adminlte::errors.errors')
                        {!! Form::model($category, ['route'=>['Categories.update',$category->id], 'method'=>'PUT']) !!}
                        <div class="box-body">                        
                          @include('adminlte::layouts.category.form')
                        </div>
                        <div class="box-footer">
                          <div class="col-sm-offset-2 col-sm-10">                              
                            <a href="{{ Route('Categories.index') }}" type="button" class="btn btn-default pull-right">Cancelar</a>
                            {!! Form::submit('Guardar',['class'=>'btn btn-success pull-right']) !!}
                          </div>
                        </div>
                        {!! Form::close() !!}

                        <!--{{ csrf_field() }} -->
                      </div>
                    </div>
                    <!-- /.post -->
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
              </div>
              <!-- /.col -->
              <!-- /.row -->
            </section>
            @endsection
            <!-- /.content -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </div>
