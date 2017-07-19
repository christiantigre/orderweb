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


Route::get('/page', function () {
	return view('pagina/index');
});


Route::get('/', 'PageController@index');

Route::get('/administrador', 'Auth\AdminLoginController@showLoginForm');
Route::get('/administracion', 'Auth\AdminLoginController@showLoginForm');

Route::GET('admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');                
Route::post('admin/login','Auth\AdminLoginController@login')->name('dashboard');
//Route::get('administracion','AdminController@index');          





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
	//Marca//
	Route::resource('/admin/marcas','Admin\MarcaController');
	Route::get('admin/listmarcas','Admin\MarcaController@listall');
	//Colores//
	Route::resource('/admin/colores','Admin\ColorController');
	Route::get('admin/listcolores','Admin\ColorController@listall');
	//Size//
	Route::resource('/admin/sizes','Admin\SizeController');
	Route::get('admin/listsizes','Admin\SizeController@listall');
	//Money//
	Route::resource('/admin/money','Admin\MoneyController');
	Route::get('admin/listmoney','Admin\MoneyController@listall');
	//Pay Methods//
	Route::resource('/admin/pay','Admin\PayController');
	Route::get('admin/listpay','Admin\PayController@listall');
	//Slider//
	Route::resource('/admin/slider','Admin\SliderController');
	Route::get('admin/listslider','Admin\SliderController@listall');
	//desmostration//
	Route::resource('/admin/demostrationes','Admin\DemostrationController');
	Route::get('admin/listsdemo','Admin\DemostrationController@listall');
	//tittles//
	Route::resource('/admin/tittles','Admin\tittleController');
	Route::get('admin/listtittle','Admin\tittleController@listall');
	//Gallery//
	Route::resource('/admin/galleries','Admin\GalleryController');
	Route::get('admin/listgallery','Admin\GalleryController@listall');
	//Employees//
	Route::resource('/admin/employees','Admin\EmployeController');
	Route::get('admin/listemploy','Admin\EmployeController@listall');
	//Employees//
	Route::resource('/admin/departments','Admin\DepartmentController');
	Route::get('admin/listdepartment','Admin\DepartmentController@listall');
	//Works//
	Route::resource('/admin/works','Admin\WorkController');
	Route::get('admin/listwork','Admin\WorkController@listall');
	//Works//
	Route::resource('/admin/clients','Admin\ClientController');
	Route::get('admin/listclient','Admin\ClientController@listall');

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});


Route::get('/redirect/{provider}','Auth\RegisterController@redirectToProvider');
Route::get('/callback/{provider}','Auth\RegisterController@handleProviderCallback');
//Route::get('/redirect/{provider}','SocialController@redirect');
//Route::get('/callback/{provider}','SocialController@callback');

//Route::get('login/facebook', 'Auth\RegisterController@redirectToProvider');
//Route::get('login/facebook/callback', 'Auth\RegisterController@handleProviderCallback');