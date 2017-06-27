<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
	return view('welcome');
});



Route::group(['middleware' => ['auth','admin']], function () {
	Route::get('/admin/home', function (){return view('adminlte::home');	});
	Route::get('/admin/config','Admin\EmpressController@index');
	Route::get('/admin/subcategory','Admin\SubcategoryController@index');
	Route::get('/admin/edit/empress/','Admin\EmpressController@edit');
	//Categorias//
	Route::resource('/admin/Categories','Admin\CategoryController');
	Route::resource('/admin/subcategories','Admin\SubcategoryController');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


Route::get('/redirect/{provider}','Auth\RegisterController@redirectToProvider');
Route::get('/callback/{provider}','Auth\RegisterController@handleProviderCallback');
//Route::get('/redirect/{provider}','SocialController@redirect');
//Route::get('/callback/{provider}','SocialController@callback');

//Route::get('login/facebook', 'Auth\RegisterController@redirectToProvider');
//Route::get('login/facebook/callback', 'Auth\RegisterController@handleProviderCallback');