<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admins;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function index(){
		return view('adminlte::home');
	}
}
