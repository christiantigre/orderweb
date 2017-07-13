<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use Input;
use Image;
use Session;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.slider.index');
    }

    public function listall()
    {
        $sliders = Slider::orderBy('id','DESC')->get();
        return view('adminlte::layouts.slider.list-sliders', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::layouts.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = Input::file('img');
        $random = str_random(10);
        $nombre = $random.' - '.$file->getClientOriginalName();
        $path = public_path('uploads/slider/'.$nombre);
        $url = '/uploads/slider/'.$nombre;
        $image = Image::make($file->getRealPath());
        $image->resize(300, 200);
        if($image->save($path)){
            $slider = new Slider;
            $slider->tittle = $request->tittle;
            $slider->subtittle = $request->subtittle;
            $slider->paragraph = $request->paragraph;
            $slider->link = $request->link;
            $slider->tittle_link = $request->tittle_link;
            $slider->img = 'uploads/slider/'.$nombre;
            $slider->save();
            Session::flash('success', $request->tittle.' Registrado correctamente');

            return redirect('admin/slider');
        }else{
            return 'No Guardado';
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
        $slider = Slider::find($id);
        return view('adminlte::layouts.slider.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::FindOrFail($id);
        return view('adminlte::layouts.slider.edit', array('slider'=>$slider));//
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
        $file = Input::file('img');
        if (!empty($file)) {
            $random = str_random(10);
            $nombre = $random.' - '.$file->getClientOriginalName();
            $path = public_path('uploads/slider/'.$nombre);
            $url = '/uploads/slider/'.$nombre;
            $image = Image::make($file->getRealPath());
            $image->resize(300, 200);
            if($image->save($path)){
                $slider = Slider::findOrFail($id);            
                $slider->tittle = $request->tittle;
                $slider->subtittle = $request->subtittle;
                $slider->paragraph = $request->paragraph;
                $slider->link = $request->link;
                $slider->tittle_link = $request->tittle_link;
                $slider->img = 'uploads/slider/'.$nombre;
                $slider->save();
                Session::flash('success', $request->tittle.' Actualizado correctamente');
                return redirect('admin/slider'); 
            }else{
                Session::flash('success', $request->tittle.' No se pudo subir laimagen');
                return redirect('admin/slider'); 
            }           
        }else{        
            $slider = Slider::findOrFail($id);
            $slider->tittle = $request->tittle;
            $slider->subtittle = $request->subtittle;
            $slider->paragraph = $request->paragraph;
            $slider->link = $request->link;
            $slider->tittle_link = $request->tittle_link;
            $slider->save();
            Session::flash('success', $request->tittle.' Actualizado correctamente');
            return redirect('admin/slider');
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
        $slider = Slider::find($id);
        $slider->delete();
        Session::flash('warning', ' '.$slider->tittle.' eliminado');
        return back()->with('warning',' '.$slider->tittle.' eliminado'); 
    }
}
