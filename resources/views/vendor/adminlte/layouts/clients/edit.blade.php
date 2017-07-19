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
            <!--titulo ventana-->Editar Cliente
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

                  {!! Form::model($cliente,['route'=>['clients.update', $cliente->id], 'method'=>'post','files' => 'true', 'enctype'=>'multipart/form-data']) !!}
                  {{ csrf_field() }}
                  {{ method_field('PUT') }}
                  <div class="box-body">
                    <div class="form-group">
                      {!! Form::label('name','Local',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('name_local',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Ingrese nombre del local ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('nomcli','Nombre cliente',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('nom_cli',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Ingrese nombre del cliente ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('appcli','Apellido cliente',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('app_cli',null,['class'=>'form-control','autocomplete'=>'off','autofocus'=>'autofocus','placeholder'=>'Ingrese apellido del cliente ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('ci','DNI',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('ci',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Identificación de cliente ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('ruclocal','Ruc Local',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('ruc_local',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Razon social ...']) !!}
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
                      {!! Form::label('dirlocal','Dirección local',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('dir_local',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Direccion del local ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('telefono','Telefono',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('phone_local',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Ingrese numero de telefono del local...']) !!}
                      </div>
                    </div>
                    
                    <div class="form-group">
                      {!! Form::label('celular','Celular',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('cel_local',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Ingrese numero de celular del local...']) !!}
                      </div>
                    </div>                    

                    <div class="form-group">
                      {!! Form::label('corrreo','Correo',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('mail_local',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Ingrese correo electronico del local...']) !!}
                      </div>
                    </div>       

                    <div class="form-group">
                      {!! Form::label('web','Web',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('web',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Pagina local...']) !!}
                      </div>
                    </div> 

                    <div class="form-group">
                      {!! Form::label('linkweb','Link Web',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('link_web',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Lonk Pagina local...']) !!}
                      </div>
                    </div> 

                    <div class="form-group">
                      {!! Form::label('profesion','Local de:',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::text('area_local',null,['class'=>'form-control','autofocus'=>'autofocus','autocomplete'=>'off','placeholder'=>'Ingrese area del local ...']) !!}
                      </div>
                    </div>

                    <div class="form-group">
                      {!! Form::label('descripcion','Descripción',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        {!! Form::textarea('description',null,['class'=>'form-control', 'rows' => 2, 'cols' => 40,'autofocus'=>'autofocus','autocomplete'=>'off']) !!}

                      </div>
                    </div>

                    <div class="form-group">
                      {!! form::label('imagen','Logo',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        <input type="file" name="logo" id="logo" accept="image/*"  class="form-control"/>
                      </div>
                    </div>

                    <div class="form-group">
                      {!! form::label('imagen','Tarjeta',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                      <input type="file" name="tarjeta" id="tarjeta" accept="image/*"  class="form-control"/>
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
                      {!! Form::label('web','Web Visible',['class'=>'col-sm-2 control-label']) !!}
                      <div class="col-sm-10">
                        <select name="web_visible" class="form-control">
                          <option value="1">Visible</option>
                          <option value="0">Oculto</option>
                        </select>
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

                    <div class="box-body">                      
                      <h4>Logo : <strong>
                        <img src="{{ asset($cliente->logo.'') }}" width="320" alt="image02">     
                      </strong></h4>
                    </div>
                    <div class="box-body">                      
                      <h4>Tarjeta : <strong>
                        <img src="{{ asset($cliente->tarjeta.'') }}" width="320" alt="image02">     
                      </strong></h4>
                    </div>

                    
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