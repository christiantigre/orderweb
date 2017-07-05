<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Color;
use Validator;
use Session;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.color.index');
    }

    public function listall()
    {
        $colores = Color::orderBy('id','DESC')->get();
        return view('adminlte::layouts.color.list-colores', compact('colores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::layouts.color.create');
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
            'color' => 'required|unique:colors|max:15',
            'codigo' => 'required|unique:colors|max:15',
            'statu' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/colores/create')
            ->withErrors($validator)
            ->withInput();
        }else{            
            $color = new Color;
            $color->color = $request->color;
            $color->codigo = $request->codigo;
            $color->statu = $request->statu;
            $color->save();
            Session::flash('success', $request->color.' Registrado correctamente');
            return redirect('admin/colores');
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
        $color = Color::find($id);
        return view('adminlte::layouts.color.show',compact('color'));//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $color = Color::FindOrFail($id);
        return view('adminlte::layouts.color.edit', array('color'=>$color));
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
            'color' => 'required|max:15',
            'codigo' => 'required|max:15',
            'statu' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/colores/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }else{ 
            $color = Color::findOrFail($id);
            $color->color = $request->color;
            $color->codigo = $request->codigo;
            $color->statu = $request->statu;
            $color->save();
            //$color->update($request->all());
            return redirect()->route('colores.index')
            ->with('success',$request->color.' actualizado correctamente');
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
        $color = Color::find($id);
        $color->delete();
        Session::flash('warning', 'Color '.$color->color.' eliminado');
        return back()->with('warning','Color '.$color->color.' eliminado');
    }
}
