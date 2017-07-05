<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Size;
use Validator;
use Session;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.size.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::layouts.size.create');
    }

    public function listall()
    {
        $sizes = Size::orderBy('id','DESC')->get();
        return view('adminlte::layouts.size.list-sizes', compact('sizes'));
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
            'size' => 'required|unique:sizes|max:20',
            'abreviatura' => 'required|unique:sizes|max:5',
            'medida' => 'max:5',
            'statu' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/sizes/create')
            ->withErrors($validator)
            ->withInput();
        }else{            
            $size = new Size;
            $size->size = $request->size;
            $size->abreviatura = $request->abreviatura;
            $size->medida = $request->medida;
            $size->statu = $request->statu;
            $size->save();
            Session::flash('success', $request->size.' Registrado correctamente');
            return redirect('admin/sizes');
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
        $size = Size::find($id);
        return view('adminlte::layouts.size.show',compact('size'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $size = Size::FindOrFail($id);
        return view('adminlte::layouts.size.edit', array('size'=>$size));
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
            'size' => 'required',
            'abreviatura' => 'required|max:5',
            'medida' => 'max:5',
            'statu' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/sizes/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }else{  
            $size = Size::findOrFail($id);
            $size->size = $request->size;
            $size->abreviatura = $request->abreviatura;
            $size->medida = $request->medida;
            $size->statu = $request->statu;
            $size->save();
            Session::flash('success', $request->size.' Actualizado correctamente');
            return redirect('admin/sizes');
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
        $size = Size::find($id);
        $size->delete();
        Session::flash('warning', 'Medida '.$size->size.' eliminado');
        return back()->with('warning','Medida '.$size->size.' eliminado');
    }
}
