<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Province;
use App\Country;
use App\Http\Requests\ProvinceRequest;
use Session;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::orderBy('id','DESC')->get();
        return view('adminlte::layouts.province.index',compact('provinces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::orderBy('id','DESC')->get();
        //dd($countries);
        return view('adminlte::layouts.province.create',compact('countries'));
    }


    public function listall()
    {
        $provinces = Province::orderBy('id','DESC')->get();
        return view('adminlte::layouts.province.list-provinces', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvinceRequest $request)
    {
        $pais = $request->id_country;
        $country = Country::where('country',$pais)->get()->first();
        $id_pais = $country->id;
        $provincia = new Province;
        $provincia->province = $request->province;
        $provincia->postal = $request->postal;
        $provincia->id_country = $id_pais;
        $provincia->save(); 
        
        Session::flash('success', $request->province.' Registrado correctamente');
        return redirect('admin/provinces');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $countries = Country::orderBy('id','DESC')->get();

        $province = Province::find($id);
        return view('adminlte::layouts.province.edit', compact('province','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProvinceRequest $request, $id)
    {
        $pais = $request->id_country;
        $country = Country::where('country',$pais)->get()->first();
        $id_pais = $country->id;
        $province = Province::find($id);
        $province->province = $request->province;
        $province->postal = $request->postal;
        $province->id_country = $id_pais;
        $province->save(); 
        return redirect()->route('provinces.index')
        ->with('info','Provincia actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
