<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Country;
use App\Http\Requests\CountryRequest;
use Session;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('id','DESC')->get();
        return view('adminlte::layouts.country.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function addcountry(CountryRequest $request){
        if ($request->ajax()) {
            $result = Country::create($request->all());
            if ($result) {
                Session::flash('success','Guardado con exito');
                return response()->json(['success'=>'true']);
            }else{
                Session::flash('danger','Se produjo un error al guardar');

                return response()->json(['success'=>'false']);
            }            
        }
    }

    public function listall()
    {
        $countries = Country::orderBy('id','DESC')->get();
        return view('adminlte::layouts.country.list-country', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->ajax()) {
            $result = Country::create($request->all());
            if ($result) {
                Session::flash('success','Guardado con exito');
                return response()->json(['success'=>'true']);
            }else{
                return response()->json(['success'=>'false']);
            }            
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
        $country = Country::find($id);
        return view('adminlte::layouts.country.show',compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country = Country::find($id);
        return view('adminlte::layouts.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CountryRequest $request, $id)
    {
        $country = Country::find($id);
        $country->country = $request->country;
        $country->iso = $request->iso;
        $country->save();
        return redirect('admin/countries')->with('info', 'Pais actualizado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::find($id);
        $country->delete();
        return back()->with('info','Pais '.$country->country.' eliminado correctamente');
    }
}
