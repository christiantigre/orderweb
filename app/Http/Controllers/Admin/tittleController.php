<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\tittles;

class tittleController extends Controller
{
	public function index()
	{
		return view('adminlte::layouts.tittle.index');
	}
	public function listall()
    {
        $tittles = tittles::orderBy('id','DESC')->get();
        return view('adminlte::layouts.tittle.list-tittles', compact('tittles'));
    }
    public function edit($id)
    {
        $tittles = tittles::FindOrFail($id);
        return view('adminlte::layouts.tittle.edit', array('tittles'=>$tittles));//
    }
    public function update(Request $request, $id)
    {      
        $tittle = tittles::find($id);
        $tittle->tittle = $request->tittle;
        $tittle->paragraph = $request->paragraph;
        $tittle->save();
        return redirect('admin/tittles')->with('success', 'Titulo actualizado correctamente'); 
    }
    public function show($id)
    {
        $tittle = tittles::find($id);
        return view('adminlte::layouts.tittle.show',compact('tittle'));
    }

}
