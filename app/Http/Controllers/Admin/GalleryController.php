<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use App\Category;
use Input;
use Image;
use Session;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.gallery.index');
    }

    public function listall()
    {
        $galleries = Gallery::orderBy('id','DESC')->get();
        return view('adminlte::layouts.gallery.list-gallery', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id','DESC')->where('thumb','1')->pluck('name','id');
        return view('adminlte::layouts.gallery.create',compact('categories'));
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
        if(!empty($file)){
            $random = str_random(10);
            $nombre = $random.' - '.$file->getClientOriginalName();
            $path = public_path('uploads/gallery/'.$nombre);
            $url = '/uploads/gallery/'.$nombre;
            $image = Image::make($file->getRealPath());
            $image->resize(640, 400);
            if($image->save($path)){
                $gallery = new Gallery;
                $gallery->tittle1 = $request->tittle1;
                $gallery->tittle2 = $request->tittle2;
                $gallery->subtittle = $request->subtittle;
                $gallery->client = $request->client;
                $gallery->date = $request->date;
                $gallery->link = $request->link;
                $gallery->paragraph = $request->paragraph;
                $gallery->id_categorie = $request->tag;
                $gallery->img = 'uploads/gallery/'.$nombre;
                $gallery->status = $request->status;
                $gallery->save();
                Session::flash('success', $request->tittle1.' Registrado correctamente');

                return redirect('admin/galleries');
            }else{
                Session::flash('danger', $request->tittle1.' No se pudo subir la imagen');
                return redirect('admin/galleries');
            }
        }else{
            Session::flash('danger', $request->tittle1.' No se pudo guardar los datos');
            return redirect('admin/galleries');
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
        $gallery = Gallery::find($id);
        return view('adminlte::layouts.gallery.show',compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::FindOrFail($id);
        $categories = Category::orderBy('id','DESC')->where('thumb','1')->pluck('name','id');


        return view('adminlte::layouts.gallery.edit', array('gallery'=>$gallery,'categories'=>$categories));
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
            $path = public_path('uploads/gallery/'.$nombre);
            $url = '/uploads/gallery/'.$nombre;
            $image = Image::make($file->getRealPath());
            $image->resize(640, 400);
            if($image->save($path)){
                $gallery = Gallery::findOrFail($id);    
                $gallery->tittle1 = $request->tittle1;
                $gallery->tittle2 = $request->tittle2;
                $gallery->subtittle = $request->subtittle;
                $gallery->client = $request->client;
                $gallery->date = $request->date;
                $gallery->link = $request->link;
                $gallery->paragraph = $request->paragraph;
                $gallery->id_categorie = $request->tag;
                $gallery->img = 'uploads/gallery/'.$nombre;
                $gallery->status = $request->status;
                $gallery->save();
                Session::flash('success', $request->tittle1.' Actualizado correctamente');
                return redirect('admin/galleries'); 
            }else{
                Session::flash('danger', $request->tittle1.' No se pudo subir laimagen');
                return redirect('admin/galleries'); 
            }           
        }else{       
            $gallery = Gallery::findOrFail($id);     
            $gallery->tittle1 = $request->tittle1;
            $gallery->tittle2 = $request->tittle2;
            $gallery->subtittle = $request->subtittle;
            $gallery->client = $request->client;
            $gallery->date = $request->date;
            $gallery->link = $request->link;
            $gallery->paragraph = $request->paragraph;
            $gallery->id_categorie = $request->tag;
            $gallery->status = $request->status;
            $gallery->save();
            Session::flash('success', $request->tittle1.' Actualizado correctamente');
            return redirect('admin/galleries');
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
        $gallery = Gallery::find($id);
        $gallery->delete();
        Session::flash('warning', ' '.$gallery->tittle1.' eliminado');
        return back()->with('warning',' '.$gallery->tittle1.' eliminado'); 
    }
}
