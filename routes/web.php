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
	Route::get('/admin/', function (){return view('adminlte::home');	});
	Route::get('/admin/home', function (){return view('adminlte::home');	});
	Route::get('/admin/config','Admin\EmpressController@index');
	Route::get('/admin/subcategory','Admin\SubcategoryController@index');
	Route::get('/admin/edit/empress/','Admin\EmpressController@edit');
	//Categorias//
	Route::resource('/admin/Categories','Admin\CategoryController');
	//Sub - Categorias//
	Route::resource('/admin/subcategories','Admin\SubcategoryController');
	//Estados pedido//
	Route::resource('/admin/status','Admin\StatuController');
	Route::get('admin/listallstatus','Admin\StatuController@listall');
	Route::post('admin/addstatus','Admin\StatuController@addstatus');
	Route::get('admin/updatestatus/{id}','Admin\StatuController@edit');
	//Country//
	Route::resource('/admin/countries','Admin\CountryController');
	Route::post('admin/addcountry','Admin\CountryController@addcountry');
	Route::get('admin/listcountry','Admin\CountryController@listall');
	//Provinces//
	Route::resource('/admin/provinces','Admin\ProvinceController');
	Route::get('admin/listprovinces','Admin\ProvinceController@listall');
	//Cantones//
	Route::resource('/admin/cantones','Admin\CantonController');
	Route::get('admin/listcantones','Admin\CantonController@listall');
	//Parroquias//
	Route::resource('/admin/parroquias','Admin\ParroquiaController');	
	Route::get('admin/listparroquias','Admin\ParroquiaController@listall');
    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


Route::get('/redirect/{provider}','Auth\RegisterController@redirectToProvider');
Route::get('/callback/{provider}','Auth\RegisterController@handleProviderCallback');
//Route::get('/redirect/{provider}','SocialController@redirect');
//Route::get('/callback/{provider}','SocialController@callback');

//Route::get('login/facebook', 'Auth\RegisterController@redirectToProvider');
//Route::get('login/facebook/callback', 'Auth\RegisterController@handleProviderCallback');