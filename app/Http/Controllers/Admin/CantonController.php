<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\canton;
use App\Province;
use App\Http\Requests\CantonRequest;
use Session;

class CantonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.canton.index', compact('cantones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::orderBy('id','DESC')->get();
        return view('adminlte::layouts.canton.create',compact('provinces'));
    }

    public function listall()
    {
        $cantones = canton::orderBy('id','DESC')->get();
        return view('adminlte::layouts.canton.list-cantones', compact('cantones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CantonRequest $request)
    {
        $canton = new canton;
        $canton->canton = $request->canton;
        $canton->postal = $request->postal;
        $canton->id_province = $request->id_province;
        $canton->save(); 
        
        Session::flash('success', $request->canton.' Registrado correctamente');
        return redirect('admin/cantones');//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $canton = canton::find($id);
        return view('adminlte::layouts.canton.show',compact('canton'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinces = Province::orderBy('id','DESC')->get();
        $canton = canton::FindOrFail($id);
        return view('adminlte::layouts.canton.edit', array('canton'=>$canton,'provinces'=>$provinces));//
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
        $canton = canton::findOrFail($id);  //
        $canton->update($request->all());
        return redirect()->route('cantones.index')
        ->with('success',$request->canton.' actualizada correctamente');//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $canton = canton::find($id);
        $canton->delete();
        Session::flash('warning', 'Canton '.$canton->canton.' eliminado');
        return back()->with('warning','Canton '.$canton->canton.' eliminado'); //
    }
}
