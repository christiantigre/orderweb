<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admins;
use Illuminate\Support\Facades\Input as input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class AdminsController extends Controller
{
	use AuthenticatesUsers;

	protected $guard = 'wed_admin';

	public function showLoginForm()
	{
		return view('adminlte::auth.admin.login');
	}

	public function login(Request $request){
		Auth::login($request, true);   
	}
}
