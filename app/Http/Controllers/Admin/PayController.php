<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paymethod;
use Validator;
use Session;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.pay.index');
    }

    public function listall()
    {
        $paypethod = Paymethod::orderBy('id','DESC')->get();
        return view('adminlte::layouts.pay.list-pay', compact('paypethod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::layouts.pay.create');
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
            'method' => 'required|unique:paymethods|max:35',
            'cuenta' => 'unique:paymethods',
            'num_tarjeta' => 'unique:paymethods',
            'titular' => 'max:255',
            'statu' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/pay/create')
            ->withErrors($validator)
            ->withInput();
        }else{            
            $pay = new Paymethod;
            $pay->method = $request->method;
            $pay->banco = $request->banco;
            $pay->cuenta = $request->cuenta;
            $pay->titular = $request->titular;
            $pay->num_tarjeta = $request->num_tarjeta;
            $pay->statu = $request->statu;
            $pay->save();
            Session::flash('success', $request->method.' Registrado correctamente');
            return redirect('admin/pay');
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
        $pay = Paymethod::find($id);
        return view('adminlte::layouts.pay.show',compact('pay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pay = Paymethod::FindOrFail($id);
        return view('adminlte::layouts.pay.edit', array('pay'=>$pay));
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
            'method' => 'required|max:35',
            'titular' => 'max:255',
            'statu' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/pay/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }else{            
            $pay = Paymethod::findOrFail($id);
            $pay->method = $request->method;
            $pay->banco = $request->banco;
            $pay->cuenta = $request->cuenta;
            $pay->titular = $request->titular;
            $pay->num_tarjeta = $request->num_tarjeta;
            $pay->statu = $request->statu;
            $pay->save();
            Session::flash('success', $request->method.' Actualizado correctamente');
            return redirect('admin/pay');
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
        $pay = Paymethod::find($id);
        $pay->delete();
        Session::flash('warning', 'Metodo '.$pay->pay.' eliminado');
        return back()->with('warning','Metodo '.$pay->pay.' eliminado');
    }
}
