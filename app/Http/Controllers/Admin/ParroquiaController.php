<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\canton;
use App\Province;
use App\parroquia;
use App\Http\Requests\ParroquiaRequest;
use Session;

class ParroquiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.parroquia.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cantones = canton::orderBy('id','DESC')->get();
        return view('adminlte::layouts.parroquia.create',compact('cantones'));
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ParroquiaRequest $request)
    {
        $parroquia = new parroquia;
        $parroquia->parroquia = $request->parroquia;
        $parroquia->postal = $request->postal;
        $parroquia->id_canton = $request->id_canton;
        $parroquia->save(); 
        
        Session::flash('success', $request->parroquia.' Registrada correctamente');
        return redirect('admin/parroquias');
    }

    public function listall()
    {
        $parroquias = parroquia::orderBy('id','DESC')->get();
        return view('adminlte::layouts.parroquia.list-parroquias', compact('parroquias'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parroquia = parroquia::find($id);
        return view('adminlte::layouts.parroquia.show',compact('parroquia'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $canton = canton::orderBy('id','DESC')->get();
        $parroquia = parroquia::FindOrFail($id);
        return view('adminlte::layouts.parroquia.edit', array('cantones'=>$canton,'parroquia'=>$parroquia));////
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
        $parroquia = parroquia::findOrFail($id);  //
        $parroquia->update($request->all());
        return redirect()->route('parroquias.index')
        ->with('success',$request->parroquia.' actualizada correctamente');//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parroquia = parroquia::find($id);
       $parroquia->delete();
       Session::flash('warning', 'Parroquia '.$parroquia->parroquia.' eliminada');
       return back()->with('warning','Parroquia '.$parroquia->parroquia.' eliminada'); 
   }
}
