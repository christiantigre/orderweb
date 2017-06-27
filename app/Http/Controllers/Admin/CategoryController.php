<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(){
    	$categories = Category::orderBy('id','DESC')->get();
        return view('adminlte::layouts.category.index', compact('categories'));
    }

    public function show($id){
    	$category = Category::find($id);
    	return view('adminlte::layouts.category.show',compact('category'));
    }

    public function edit($id){
    	$category = Category::find($id);
    	return view('adminlte::layouts.category.edit',compact('category'));
    }

    public function create(){
    	return view('adminlte::layouts.category.create');
    }

    public function store(CategoryRequest $request){
    	$category = new Category;
        $category->name = $request->name;
        $category->des = $request->des;
        $category->save();
        return redirect('admin/Categories')->with('info', 'Producto registrado correctamente');
    }

	public function update(CategoryRequest $request, $id){
        $categories = Category::orderBy('id','DESC')->paginate();
        $category = Category::find($id);
        $category->name = $request->name;
        $category->des = $request->des;
        $category->save();
        return redirect('admin/Categories')->with('info', 'Producto actualizado correctamente');    	
    }    

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return back()->with('info','Categoria '.$category->name.' eliminada');
    }
}
