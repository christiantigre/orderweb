<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cliente;
use Carbon\Carbon;
use Input;
use Image;
use Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('adminlte::layouts.clients.index');
    }

    public function listall()
    {
        $clients = Cliente::orderBy('id','DESC')->get();
        return view('adminlte::layouts.clients.list-client', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hoy = Carbon::now();
        $cliente = Cliente::find($id);
        if(!empty($cliente->date_nac)){           
            $fecha_nacimiento = $cliente->date_nac;
            $diff = Carbon::createFromFormat('Y-m-d',$fecha_nacimiento);
            $final = $hoy->diffInYears($diff);
        }else{
            $final = "";
        }
        //$date = Carbon::createFromDate(1970,19,12)->age;
        return view('adminlte::layouts.clients.show',compact('cliente','final'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::FindOrFail($id);
        return view('adminlte::layouts.clients.edit', array('cliente'=>$cliente));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input  = $request->date_nac;
        $fecha_nac = Carbon::parse($input)->format('Y-m-d');
        $file = Input::file('logo');
        $filet = Input::file('tarjeta');
        if (!empty($file)) {
            $random = str_random(10);
            $nombre = $random.' - '.$file->getClientOriginalName();
            $path = public_path('uploads/logos/'.$nombre);
            $url = '/uploads/logos/'.$nombre;
            $image = Image::make($file->getRealPath());
            $image->resize(640, 400);
            if($image->save($path)){
                $cliente = Cliente::findOrFail($id);
                $cliente->name_local = $request->name_local;
                $cliente->nom_cli = $request->nom_cli;
                $cliente->app_cli = $request->app_cli;
                $cliente->ci = $request->ci;
                $cliente->ruc_local = $request->ruc_local;
                $cliente->date_nac = $fecha_nac;
                $cliente->dir_local = $request->dir_local;
                $cliente->phone_local = $request->phone_local;
                $cliente->cel_local = $request->cel_local;
                $cliente->web = $request->web;
                $cliente->link_web = $request->link_web;
                $cliente->area_local = $request->area_local;
                $cliente->description = $request->description;
                $cliente->logo = 'uploads/logos/'.$nombre;
                $cliente->status = $request->status;
                $cliente->web_visible = $request->web_visible;
                $cliente->fb = $request->fb;
                $cliente->twi = $request->twi;
                $cliente->save();
                Session::flash('success', $request->name_local.' Registrado correctamente');

                return redirect('admin/clients');
            }else{
                Session::flash('danger', $request->name_local.' No se pudo subir la imagen del logo');
                return redirect('admin/clients'); 
            } 
        }
        if (!empty($filet)) {
            $randomt = str_random(10);
            $nombret = $randomt.' - '.$filet->getClientOriginalName();
            $patht = public_path('uploads/tarjetas/'.$nombret);
            $urlt = '/uploads/tarjetas/'.$nombret;
            $imaget = Image::make($filet->getRealPath());
            $imaget->resize(640, 400);

            if($imaget->save($patht)){
                $cliente = Cliente::findOrFail($id);
                $cliente->name_local = $request->name_local;
                $cliente->nom_cli = $request->nom_cli;
                $cliente->app_cli = $request->app_cli;
                $cliente->ci = $request->ci;
                $cliente->ruc_local = $request->ruc_local;
                $cliente->date_nac = $fecha_nac;
                $cliente->dir_local = $request->dir_local;
                $cliente->phone_local = $request->phone_local;
                $cliente->cel_local = $request->cel_local;
                $cliente->web = $request->web;
                $cliente->link_web = $request->link_web;
                $cliente->area_local = $request->area_local;
                $cliente->description = $request->description;
                $cliente->tarjeta = 'uploads/tarjetas/'.$nombret;
                $cliente->status = $request->status;
                $cliente->web_visible = $request->web_visible;
                $cliente->fb = $request->fb;
                $cliente->twi = $request->twi;
                $cliente->save();
                Session::flash('success', $request->name_local.' Registrado correctamente');

                return redirect('admin/clients');
            }else{
                Session::flash('danger', $request->name_local.' No se pudo subir la imagen de la tarjeta');
                return redirect('admin/clients'); 
            }            
        }
        if ((empty($file)) OR (empty($filet))) {
            $cliente = Cliente::findOrFail($id);; 
            $cliente->name_local = $request->name_local;
            $cliente->nom_cli = $request->nom_cli;
            $cliente->app_cli = $request->app_cli;
            $cliente->ci = $request->ci;
            $cliente->ruc_local = $request->ruc_local;
            $cliente->date_nac = $fecha_nac;
            $cliente->dir_local = $request->dir_local;
            $cliente->phone_local = $request->phone_local;
            $cliente->cel_local = $request->cel_local;
            $cliente->web = $request->web;
            $cliente->link_web = $request->link_web;
            $cliente->area_local = $request->area_local;
            $cliente->description = $request->description;
            $cliente->status = $request->status;
            $cliente->web_visible = $request->web_visible;
            $cliente->fb = $request->fb;
            $cliente->twi = $request->twi;
            $cliente->save();
            Session::flash('success', $request->name_local.' Actualizado correctamente');
            return redirect('admin/clients');          
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return back()->with('info','Cliente de local '.$cliente->name_local.' eliminado');
    }
}
