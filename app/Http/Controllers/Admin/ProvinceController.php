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
        $provincia = new Province;
        $provincia->province = $request->province;
        $provincia->postal = $request->postal;
        $provincia->id_country = $request->id_country;
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
        $province = Province::find($id);
        return view('adminlte::layouts.province.show',compact('province'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$countries = Country::orderBy('id','DESC')->get();
        $countries = Country::orderBy('id','DESC')->get();
        $province = Province::FindOrFail($id);
        return view('adminlte::layouts.province.edit', array('province'=>$province,'countries'=>$countries));
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
        /*$province = Province::find($id);
        $province->province = $request->province;
        $province->postal = $request->postal;
        $province->id_country = $request->id_country;
        $province->update(); */

        $prov = Province::findOrFail($id);  //
        $prov->update($request->all());
        return redirect()->route('provinces.index')
        ->with('success',$request->province.' Provincia actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $province = Province::find($id);
        $province->delete();
        return back()->with('warning','Provincia '.$province->province.' eliminada');
    }
}
