<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Money;
use Validator;
use Session;

class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.money.index');
    }

    public function listall()
    {
        $money = Money::orderBy('id','DESC')->get();
        return view('adminlte::layouts.money.list-money', compact('money'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::layouts.money.create');
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
            'money' => 'required|unique:money|max:20',
            'abreviatura' => 'required|unique:money|max:5',
            'img' => 'max:255',
            'statu' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/money/create')
            ->withErrors($validator)
            ->withInput();
        }else{            
            $money = new Money;
            $money->money = $request->money;
            $money->abreviatura = $request->abreviatura;
            $money->img = $request->img;
            $money->statu = $request->statu;
            $money->save();
            Session::flash('success', $request->money.' Registrado correctamente');
            return redirect('admin/money');
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
        $money = Money::find($id);
        return view('adminlte::layouts.money.show',compact('money'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $money = Money::FindOrFail($id);
        return view('adminlte::layouts.money.edit', array('money'=>$money));
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
            'money' => 'required|max:20',
            'abreviatura' => 'required|max:5',
            'img' => 'max:255',
            'statu' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/money/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }else{            
            $money = Money::findOrFail($id);
            $money->money = $request->money;
            $money->abreviatura = $request->abreviatura;
            $money->img = $request->img;
            $money->statu = $request->statu;
            $money->save();
            Session::flash('success', $request->money.' Actualizado correctamente');
            return redirect('admin/money');
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
        $money = Money::find($id);
        $money->delete();
        Session::flash('warning', 'Moneda '.$money->money.' eliminado');
        return back()->with('warning','Moneda '.$money->money.' eliminado');
    }
}
