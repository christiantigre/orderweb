<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Employ;
use App\Department;
use App\Country;
use App\Province;
use App\canton;
use App\parroquia;
use Carbon\Carbon;
use Input;
use Image;
use Session;

class EmployeController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.Employes.index');
    }

    public function listall()
    {
        $employees = Employ::orderBy('id','DESC')->get();
        return view('adminlte::layouts.employes.list-employ', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::orderBy('id','DESC')->where('status','1')->pluck('department','id');
        $countries = Country::orderBy('id','DESC')->pluck('country','id');
        $provinces = Province::orderBy('id','DESC')->pluck('province','id');
        $cantones = canton::orderBy('id','DESC')->pluck('canton','id');
        $parroquias = parroquia::orderBy('id','DESC')->pluck('parroquia','id');
        return view('adminlte::layouts.employes.create',compact('departments',
            'countries',
            'provinces',
            'cantones',
            'parroquias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $input  = $request->date_nac;
        $fecha_nac = Carbon::parse($input)->format('Y-m-d');
        //dd($conv);
        //$fecha_nac = Carbon::createFromFormat('Y-m-d', $conv);
        $file = Input::file('img');
        if(!empty($file)){
            $random = str_random(10);
            $nombre = $random.' - '.$file->getClientOriginalName();
            $path = public_path('uploads/avatars/'.$nombre);
            $url = '/uploads/avatars/'.$nombre;
            $image = Image::make($file->getRealPath());
            $image->resize(640, 400);
            if($image->save($path)){
                $employ = new Employ;
                $employ->name = $request->name;
                $employ->ci = $request->ci;
                $employ->lastname = $request->lastname;
                $employ->address = $request->address;
                $employ->cel = $request->cel;
                $employ->phone = $request->phone;
                $employ->email = $request->email;
                $employ->date_nac = $fecha_nac;
                $employ->perfil = 'uploads/avatars/'.$nombre;
                $employ->status = $request->status;
                $employ->id_country = $request->id_country;
                $employ->id_province = $request->id_province;
                $employ->id_canton = $request->id_canton;
                $employ->id_parroquias = $request->id_parroquias;
                $employ->id_departments = $request->id_department;
                $employ->save();
                Session::flash('success', $request->name.' Registrado correctamente');

                return redirect('admin/employees');
            }else{
                Session::flash('danger', $request->name.' No se pudo subir la imagen');
                return redirect('admin/employees');
            }
        }else{
            Session::flash('danger', $request->name.' No se pudo guardar los datos');
            return redirect('admin/employees');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employ = Employ::find($id);
        $fecha_nacimiento = $employ->date_nac;
        $hoy = Carbon::now();
        $diff = Carbon::createFromFormat('Y-m-d',$fecha_nacimiento);
        $final = $hoy->diffInYears($diff);
        //$date = Carbon::createFromDate(1970,19,12)->age;
        return view('adminlte::layouts.employes.show',compact('employ','final'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employ = Employ::FindOrFail($id);
        $departments = Department::orderBy('id','DESC')->where('status','1')->pluck('department','id');
        $countries = Country::orderBy('id','DESC')->pluck('country','id');
        $provinces = Province::orderBy('id','DESC')->pluck('province','id');
        $cantones = canton::orderBy('id','DESC')->pluck('canton','id');
        $parroquias = parroquia::orderBy('id','DESC')->pluck('parroquia','id');

        return view('adminlte::layouts.employes.edit', array('employ'=>$employ,
            'departments'=>$departments,
            'countries'=>$countries,
            'provinces'=>$provinces,
            'cantones'=>$cantones,
            'parroquias'=>$parroquias,
            ));
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
        $file = Input::file('img');
        if (!empty($file)) {
            $random = str_random(10);
            $nombre = $random.' - '.$file->getClientOriginalName();
            $path = public_path('uploads/avatars/'.$nombre);
            $url = '/uploads/avatars/'.$nombre;
            $image = Image::make($file->getRealPath());
            $image->resize(640, 400);
            if($image->save($path)){
                $employ = Employ::findOrFail($id);
                $employ->name = $request->name;
                $employ->ci = $request->ci;
                $employ->lastname = $request->lastname;
                $employ->address = $request->address;
                $employ->cel = $request->cel;
                $employ->phone = $request->phone;
                $employ->email = $request->email;
                $employ->date_nac = $fecha_nac;
                $employ->perfil = 'uploads/avatars/'.$nombre;
                $employ->status = $request->status;
                $employ->id_country = $request->id_country;
                $employ->id_province = $request->id_province;
                $employ->id_canton = $request->id_canton;
                $employ->id_parroquias = $request->id_parroquias;
                $employ->id_departments = $request->id_department;
                $employ->save();
                Session::flash('success', $request->name.' Registrado correctamente');

                return redirect('admin/employees');
            }else{
                Session::flash('danger', $request->name.' No se pudo subir laimagen');
                return redirect('admin/employees'); 
            }           
        }else{       
            $employ = Employ::findOrFail($id);; 
            $employ->name = $request->name;
            $employ->ci = $request->ci;
            $employ->lastname = $request->lastname;
            $employ->address = $request->address;
            $employ->cel = $request->cel;
            $employ->phone = $request->phone;
            $employ->email = $request->email;
            $employ->date_nac = $fecha_nac;
            $employ->status = $request->status;
            $employ->id_country = $request->id_country;
            $employ->id_province = $request->id_province;
            $employ->id_canton = $request->id_canton;
            $employ->id_parroquias = $request->id_parroquias;
            $employ->id_departments = $request->id_department;
            $employ->save();
            Session::flash('success', $request->name.' Actualizado correctamente');
            return redirect('admin/employees');
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
        $employ = Employ::find($id);
        $employ->delete();
        Session::flash('warning', ' '.$employ->name.' eliminado');
        return back()->with('warning',' '.$employ->name.' eliminado'); 
    }
}
