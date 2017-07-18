<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Work;
use Validator;
use Session;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.works.index');
    }

    public function listall()
    {
        $works = Work::orderBy('id','DESC')->get();
        return view('adminlte::layouts.works.list-works', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::layouts.works.create');
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
            'work' => 'required|unique:works|max:35',
            'porcentaje' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/works/create')
            ->withErrors($validator)
            ->withInput();
        }else{            
            $work = new Work;
            $work->work = $request->work;
            $work->porcentaje = $request->porcentaje;
            $work->save();
            Session::flash('success', $request->work.' Registrado correctamente');
            return redirect('admin/works');
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
        $work = Work::find($id);
        return view('adminlte::layouts.works.show',compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $work = Work::find($id);
        return view('adminlte::layouts.works.edit', compact('work'));
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
            'work' => 'required|unique:works|max:35',
            'porcentaje' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/works/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }else{
            $work = Work::findOrFail($id);  
            $work->update($request->all());
            return redirect()->route('works.index')
            ->with('success',$request->work.' actualizada correctamente');
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
        $work = Work::find($id);
        $work->delete();
        return back()->with('info','Trabajo '.$work->work.' eliminada');
    }
}
