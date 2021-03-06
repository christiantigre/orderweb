<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Demostraction;
use App\tittles;
use App\Gallery;
use App\Category;
use App\Employ;
use App\Work;
use App\comentCli;
use App\Cliente;

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
        $works = Work::orderBy('id','DESC')->get();
        $clients = Cliente::orderBy('id','DESC')->get();
        $comClies = comentCli::orderBy('id','DESC')->where('accept','1')->get();
        $tittlesslides1 = tittles::orderBy('id','DESC')->where('id','1')->get();
        $tittlesslides2 = tittles::orderBy('id','DESC')->where('id','2')->get();
        $tittlesslides3 = tittles::orderBy('id','DESC')->where('id','3')->get();
        $tittlesslides4 = tittles::orderBy('id','DESC')->where('id','4')->get();
        $tittlesslides5 = tittles::orderBy('id','DESC')->where('id','5')->get();
        $tittlesslides6 = tittles::orderBy('id','DESC')->where('id','6')->get();
        $tittlesslides7 = tittles::orderBy('id','DESC')->where('id','7')->get();
        $tittlesslides8 = tittles::orderBy('id','DESC')->where('id','8')->get();
        $tittlesslides9 = tittles::orderBy('id','DESC')->where('id','9')->get();
        $thumbails = Gallery::orderBy('id','DESC')->where('status','1')->get();
        $categories = Category::orderBy('id','DESC')->where('thumb','1')->get();
        $emploies = Employ::orderBy('id','DESC')->where('web','1')->get();
        
        return view('pagina/index',compact(
            'slider'
            ,'demos'
            ,'tittlesslides1'
            ,'tittlesslides2'
            ,'tittlesslides3'
            ,'tittlesslides4'
            ,'tittlesslides5'
            ,'tittlesslides6'
            ,'tittlesslides7'
            ,'tittlesslides8'
            ,'tittlesslides9'
            ,'thumbails'
            ,'categories'
            ,'emploies'
            ,'works'
            ,'comClies'
            ,'clients'
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
