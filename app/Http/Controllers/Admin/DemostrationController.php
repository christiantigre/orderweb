<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Demostraction;
use Input;
use Image;
use Session;

class DemostrationController extends Controller
{
	public function index()
	{
		return view('adminlte::layouts.demos.index');
	}

	public function listall()
	{
		$demos = Demostraction::orderBy('id','DESC')->get();
		return view('adminlte::layouts.demos.list-demos', compact('demos'));
	}

	public function create()
	{
		return view('adminlte::layouts.demos.create');
	}

	public function store(Request $request)
	{
		$file = Input::file('img');
		$random = str_random(10);
		$nombre = $random.' - '.$file->getClientOriginalName();
		$path = public_path('uploads/demos/'.$nombre);
		$url = '/uploads/demos/'.$nombre;
		$image = Image::make($file->getRealPath());
		$image->resize(300, 200);
		if($image->save($path)){
			$slider = new Demostraction;
			$slider->tittle = $request->tittle;
			$slider->paragraph = $request->paragraph;
			$slider->link = $request->link;
			$slider->img = 'uploads/demos/'.$nombre;
			$slider->save();
			Session::flash('success', $request->tittle.' Registrado correctamente');

			return redirect('admin/demostrationes');
		}else{
			return 'No Guardado';
		}
	}
	public function show($id)
	{
		$demo = Demostraction::find($id);
		return view('adminlte::layouts.demos.show',compact('demo'));
	}

	public function edit($id)
	{
		$demo = Demostraction::FindOrFail($id);
        return view('adminlte::layouts.demos.edit', array('demo'=>$demo));//
    }

    public function update(Request $request, $id)
    {
    	$file = Input::file('img');
    	if (!empty($file)) {
    		$random = str_random(10);
    		$nombre = $random.' - '.$file->getClientOriginalName();
    		$path = public_path('uploads/demos/'.$nombre);
    		$url = '/uploads/demos/'.$nombre;
    		$image = Image::make($file->getRealPath());
    		$image->resize(300, 200);
    		if($image->save($path)){
    			$slider = Demostraction::findOrFail($id);            
    			$slider->tittle = $request->tittle;
    			$slider->paragraph = $request->paragraph;
    			$slider->link = $request->link;
    			$slider->img = 'uploads/demos/'.$nombre;
    			$slider->save();
    			Session::flash('success', $request->tittle.' Actualizado correctamente');
    			return redirect('admin/demostrationes'); 
    		}else{
    			Session::flash('success', $request->tittle.' No se pudo subir laimagen');
    			return redirect('admin/demostrationes'); 
    		}           
    	}else{        
    		$slider = Demostraction::findOrFail($id);
    		$slider->tittle = $request->tittle;
    		$slider->paragraph = $request->paragraph;
    		$slider->link = $request->link;
    		$slider->save();
    		Session::flash('success', $request->tittle.' Actualizado correctamente');
    		return redirect('admin/demostrationes');
    	}
    }

    public function destroy($id)
    {
    	$demo = Demostraction::find($id);
    	$demo->delete();
    	Session::flash('warning', ' '.$demo->tittle.' eliminado');
    	return back()->with('warning',' '.$demo->tittle.' eliminado'); 
    }

}
