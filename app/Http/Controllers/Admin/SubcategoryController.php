<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subcategory;
use App\Category;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::orderBy('id','DESC')->get();
        return view('adminlte::layouts.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id','DESC')->pluck('name','id');
        return view('adminlte::layouts.subcategory.create',compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategories = new SubCategory;
        $subcategories->name = $request->name;
        $subcategories->status = $request->status;
        $subcategories->description = $request->description;
        $subcategories->id_categorie = $request->category_id;
        $subcategories->save();
        return redirect('admin/subcategory')->with('info', $request->name.'. Registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategory = SubCategory::find($id);

        return view('adminlte::layouts.subcategory.show',compact('subcategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $subcategory = SubCategory::find($id);
        //$categories = Category::orderBy('id','DESC')->pluck('name','id');
        $categories = Category::pluck('name', 'id');
        

        return view('adminlte::layouts.subcategory.edit',compact('subcategory','categories'));
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
        $subcategory = SubCategory::find($id);
        $subcategory->name = $request->name;
        $subcategory->description = $request->description;
        $subcategory->id_categorie = $request->category_id;
        $subcategory->status = $request->status;
        $subcategory->save();
        return redirect('admin/subcategories')->with('info', $request->name.' Actualizado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->delete();
        return back()->with('info','Sub - Categoria '.$subcategory->name.' eliminada');
    }
}
