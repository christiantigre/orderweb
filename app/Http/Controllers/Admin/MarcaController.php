<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Marca;
use Validator;
use Session;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.marca.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::layouts.marca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'marca' => 'required|unique:marcas|max:25',
            'statu' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/marcas/create')
            ->withErrors($validator)
            ->withInput();
        }else{            
            $marca = new Marca;
            $marca->marca = $request->marca;
            $marca->statu = $request->statu;
            $marca->save();
            Session::flash('success', $request->marca.' Registrado correctamente');
            return redirect('admin/marcas');
        }
    }

    public function listall()
    {
        $marcas = Marca::orderBy('id','DESC')->get();
        return view('adminlte::layouts.marca.list-marcas', compact('marcas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = Marca::find($id);
        return view('adminlte::layouts.marca.show',compact('marca'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marca = Marca::FindOrFail($id);
        return view('adminlte::layouts.marca.edit', array('marca'=>$marca));
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
       $validator = Validator::make($request->all(), [
        'marca' => 'required|unique:marcas|max:25',
        'statu' => 'required',
        ]);

       if ($validator->fails()) {
        return redirect('admin/marcas/'.$id.'/edit')
        ->withErrors($validator)
        ->withInput();
    }else{
        $marca = Marca::findOrFail($id);  //
        $marca->update($request->all());
        return redirect()->route('marcas.index')
        ->with('success',$request->marca.' actualizada correctamente');
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
        $marca = Marca::find($id);
        $marca->delete();
        Session::flash('warning', 'Marca '.$marca->marca.' eliminada');
        return back()->with('warning','Marca '.$marca->marca.' eliminada');
    }
}
