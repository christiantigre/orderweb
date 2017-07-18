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
            <!--titulo ventana-->Editar Personal
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

                  {!! Form::model($employ,['route'=>['employees.update', $employ->id], 'method'=>'post','files' => 'true', 'enctype'=>'multipart/form-data']) !!}
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="box-body">
                    <div class="form-group">
                      {!! Form::label('name','Nombres',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('name',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Ingrese nombres ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('apellido','Apellidos',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('lastname',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Ingrese apellidos ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('ci','DNI',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('ci',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Identificación de personal ...']) !!}

                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('direccion','Dirección',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('address',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Ingrese la dirección ...']) !!}

                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('celular','Celular',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('cel',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Ingrese numero de celular ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('telefono','Telefono',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('phone',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Ingrese numero de telefono ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('corrreo','Correo',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('email',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Ingrese correo electronico ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('fechanac','F. nacimiento',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        <div class="input-group date">
                          <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          {!! Form::text('date_nac',null,['id'=>'datepicker','class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Ingrese fecha de nacimiento ...']) !!}
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('tag','Etiqueta',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::select('id_department', $departments, null,['class'=>'form-control','autofocus'=>'autofocus'])    !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('pais','Pais',['id'=>'pais','placeholder'=>'Selecciona','class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::select('id_country', $countries, null,['placeholder'=>'Selecciona','id'=>'id_country','class'=>'form-control','autofocus'=>'autofocus'])    !!}
                      </div>
                    </div>
                    <div class="form-group">
                      {!! Form::label('pronincia','Provincia',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::select('id_province', $provinces, null,['id'=>'provincia','placeholder'=>'Selecciona','class'=>'form-control','autofocus'=>'autofocus'])    !!}
                      </div>
                    </div>
                    <div class="form-group">
                      {!! Form::label('canton','Canton',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::select('id_canton', $cantones, null,['id'=>'canton','placeholder'=>'Selecciona','class'=>'form-control','autofocus'=>'autofocus'])    !!}
                      </div>
                    </div>
                    <div class="form-group">
                      {!! Form::label('parroquia','Parroquia',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::select('id_parroquias', $parroquias, null,['id'=>'parroquia','placeholder'=>'Selecciona','class'=>'form-control','autofocus'=>'autofocus'])    !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! form::label('imagen','Foto',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        <input type="file" name="img" id="img" accept="image/*"  class="form-control"/>
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('estado','Estado',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        <select name="status" class="form-control">
                          <option value="1">Activado</option>
                          <option value="0">Desactivado</option>
                        </select>
                      </div>  
                    </div>
                    <div class="form-group">
                      {!! Form::label('web','Web',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        <select name="web" class="form-control">
                          <option value="1">Visible</option>
                          <option value="0">Oculto</option>
                        </select>
                      </div>  
                    </div>

                    <div class="form-group">
                      {!! Form::label('profesion','Profesión',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('profetion',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Ingrese profesión ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('descripcion','Descripción',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::textarea('description',null,['class'=>'form-control', 'rows' => 2, 'cols' => 40,'autofocus'=>'autofocus','autocomplete'=>'off']) !!}

                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('fb','Facebook',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('fb',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Acceso a perfil facebook ...']) !!}
                      </div>
                    </div>
                    <div class="form-group">
                      {!! Form::label('twiter','Twiter',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('twi',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Acceso a perfil twiter ...']) !!}
                      </div>
                    </div>
                    <div class="form-group">
                      {!! Form::label('in','LiKeIn',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('in',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Acceso a perfil LiKeIn ...']) !!}
                      </div>
                    </div>

                    <div class="box-body">                      
                      <h4>Imagen : <strong>
                        <img src="{{ asset($employ->perfil.'') }}" width="320" alt="image02">     
                      </strong></h4>
                    </div>

                    <script>

                      $(function(){
                        $('#id_country').on('change', onSelectCountryChange);
                      });

                      function onSelectCountryChange(){
                        var id_country = $(this).val();
                        if (! id_country) 
                          $('#provincia').html('<option value="1">SELECCIONA PROVINCIA</option>');

                        $.get('/api/located/'+id_country+'/provincias', function(data){
                          $("#provincia").empty();
                          var html_select = '<option value="1">SELECCIONA PROVINCIA</option>';
                          for(var i=0; i<data.length; ++i)
                            html_select +='<option value="'+data[i].id+'">'+data[i].province+'</option>';
          //console.log(data[i]);
          //console.log(html_select);
          $('#provincia').html(html_select);
        });

                      }

                      $(function(){
                        $('#provincia').on('change', onSelectProvinceChange);
                      });

                      function onSelectProvinceChange(){
                        var id_country = $(this).val();
                        if (! id_country) 
                          $('#canton').html('<option value="1">SELECCIONA CANTON</option>');

                        $.get('/api/located/'+id_country+'/canton', function(data){
                          $("#canton").empty();
                          var html_select = '<option value="1">SELECCIONA CANTON</option>';
                          for(var i=0; i<data.length; ++i)
                            html_select +='<option value="'+data[i].id+'">'+data[i].canton+'</option>';
                          $('#canton').html(html_select);
                        });

                      }

                      $(function(){
                        $('#canton').on('change', onSelectCantonChange);
                      });

                      function onSelectCantonChange(){
                        var id_country = $(this).val();
                        if (! id_country) 
                          $('#parroquia').html('<option value="1">SELECCIONA PARROQUIA</option>');

                        $.get('/api/located/'+id_country+'/parroquia', function(data){
                          $("#parroquia").empty();
                          var html_select = '<option value="1">SELECCIONA PARROQUIA</option>';
                          for(var i=0; i<data.length; ++i)
                            html_select +='<option value="'+data[i].id+'">'+data[i].parroquia+'</option>';
                          $('#parroquia').html(html_select);
                        });

                      }
                    </script>
                    <div class="form-group"></div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <div class="col-sm-offset-2 col-sm-10">
                      <a href="{{ Route('employees.index') }}" type="button" class="btn btn-default pull-right">Cancelar</a>
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