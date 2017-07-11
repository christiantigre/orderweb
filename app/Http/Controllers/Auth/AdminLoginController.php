<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Session;

class AdminLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin');
	}

	public function showLoginForm(){
		return view('adminlte::auth.admin.login');
	}

	public function login(Request $request)
	{	
		$user = new User;
		$this->validate($request, [
			'email'    => 'required|email|max:255',
			'password' => 'required|min:6',
			]);

		$the_user = $user->select()->where('email', '=', $request->email)->first();
		$email = $user->email = $the_user->email;
		$active = $user->active = $the_user->active;

		if($active=='1'){
			if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
				return redirect('admin/home');
			}
			return redirect()->back()->withInput($request->only('email', 'remember'));
		}else{
			Session::flash('info', ' Usuario inactivo');
			return redirect()->back()->with('info', 'Producto registrado correctamente');
		}

		
	}
}
