<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Demostraction;
use App\tittles;
use App\Gallery;
use App\Category;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::orderBy('id','DESC')->get();
        $demos = Demostraction::orderBy('id','DESC')->get();
        $tittlesslides1 = tittles::orderBy('id','DESC')->where('id','1')->get();
        $tittlesslides2 = tittles::orderBy('id','DESC')->where('id','2')->get();
        $tittlesslides3 = tittles::orderBy('id','DESC')->where('id','3')->get();
        $tittlesslides4 = tittles::orderBy('id','DESC')->where('id','4')->get();
        $tittlesslides5 = tittles::orderBy('id','DESC')->where('id','5')->get();
        $thumbails = Gallery::orderBy('id','DESC')->where('status','1')->get();
        $categories = Category::orderBy('id','DESC')->where('thumb','1')->get();
        
        return view('pagina/index',compact(
            'slider'
            ,'demos'
            ,'tittlesslides1'
            ,'tittlesslides2'
            ,'tittlesslides3'
            ,'tittlesslides4'
            ,'tittlesslides5'
            ,'thumbails'
            ,'categories'
            ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
