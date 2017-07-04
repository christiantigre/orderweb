<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Statu;
use App\Http\Requests\StatuRequest;
use Session;

class StatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        //Session::flash('success','Inicio');
     return view('adminlte::layouts.statu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listall()
    {
        $status = Statu::orderBy('id','DESC')->paginate(5);
        return view('adminlte::layouts.statu.list-status', compact('status'));
    }

    public function create()
    {  
        return view('adminlte::layouts.statu.listall');
    }

    public function addstatus(StatuRequest $request)
    {

     if ($request->ajax()) {
        $result = Statu::create($request->all());
        if ($result) {
            Session::flash('success','Guardado con exito');
            return response()->json(['success'=>'true']);
        }else{
            return response()->json(['success'=>'false']);
        }            
    }
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
        $statu = Statu::find($id);
        return view('adminlte::layouts.statu.show',compact('statu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //echo '<script>alert("controlador")</script>';
        $status = Statu::find($id);
        return view('adminlte::layouts.statu.edit', compact('status'));
        //return response()->json($status);
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
        $statu = Statu::find($id);
        $statu->statu = $request->statu;
        $statu->save();
        return redirect('admin/status')->with('info', 'Estado actualizado correctamente'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statu = Statu::find($id);
        $statu->delete();
        return back()->with('info','Estado '.$statu->statu.' eliminada');
    }
}
