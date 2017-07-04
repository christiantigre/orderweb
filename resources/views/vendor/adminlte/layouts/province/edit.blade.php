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
            <!--titulo ventana-->Actualizar Provincia
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
                  {!! Form::model($province, ['route'=>['provinces.update', $province->id], 'method'=>'PUT']) !!}
                  <div class="box-body">

                    <div class="form-group">
                      {!! Form::label('pais','Pais',['class'=>'col-sm-2 control-label',]) !!}
                      <div class="col-sm-10">
                        {!! Form::text('id_country',null,['class'=>'form-control','list'=>'countries','placeholder'=>'Nombre Pais ...','autocomplete'=>'off','autofocus'=>'autofocus']) !!}

                        <!--<input type="text" list="countries" class="form-control" autocomplete="off" placeholder="Pais" autofocus="autofocus">-->
                        <select class="form-control" name="your-tag-name">
                        @foreach($countries as $country)
                          <option id="categoryId" value="{{$country->id}}" selected="selected">{{ $country->country }}</option>
                          @endforeach
                        </select>

                        <datalist id="countries">
                          @foreach($countries as $country)
                          <option value="{{ $country->country }}">{{ $country->country }} -/- {{ $country->iso }}</option>
                          @endforeach
                        </datalist>
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('provincia','Provincia',['class'=>'col-sm-2 control-label']) !!}

                      <div class="col-sm-10">
                        {!! Form::text('province',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Nombre provincia ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('postal','Postal',['class'=>'col-sm-2 control-label']) !!}

                      <div class="col-sm-10">
                        {!! Form::text('postal',null,['class'=>'form-control','autocomplete'=>'off','placeholder'=>'Cod. postal ...']) !!}
                        
                      </div>
                    </div>
                    <div class="form-group"></div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <div class="col-sm-offset-2 col-sm-10">
                      <a href="{{ Route('provinces.index') }}" type="button" class="btn btn-default pull-right">Cancelar</a>
                      {!! Form::submit('Guardar',['class'=>'btn btn-success pull-right']) !!}
                    </div>
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