<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Department;
use Validator;
use Session;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte::layouts.department.index');
    }

    public function listall()
    {
        $departments = Department::orderBy('id','DESC')->get();
        return view('adminlte::layouts.department.list-department', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminlte::layouts.department.create');
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
            'department' => 'required|unique:departments|max:25',
            'status' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/departments/create')
            ->withErrors($validator)
            ->withInput();
        }else{            
            $department = new Department;
            $department->department = $request->department;
            $department->status = $request->status;
            $department->save();
            Session::flash('success', $request->department.' Registrado correctamente');
            return redirect('admin/departments');
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
        $department = Department::find($id);
        return view('adminlte::layouts.department.show',compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::FindOrFail($id);
        return view('adminlte::layouts.department.edit', array('department'=>$department));
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
            'department' => 'required|unique:departments|max:25',
            'status' => 'required',
            ]);

        if ($validator->fails()) {
            return redirect('admin/departments/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }else{
            $department = Department::findOrFail($id);  
            $department->update($request->all());
            return redirect()->route('departments.index')
            ->with('success',$request->department.' actualizada correctamente');
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
        $department = Department::find($id);
        $department->delete();
        Session::flash('warning', 'Departamento '.$department->department.' eliminada');
        return back()->with('warning','Departamento '.$department->department.' eliminada');
    }
}
