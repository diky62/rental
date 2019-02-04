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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home1','home1Controller@index')->name('home1');
Route::get('daftar','Register1Controller@index')->name('daftar');
Route::get('daftar','Register1Controller@store')->name('daftar');

Route::resources([
  "daftar"=>"Register1Controller",
  
  ]);



Route::group(['namespace' => 'Auth'], function () {
		Route::get('login', 'LoginController@showLogin')->name('showlogin');
		Route::post('login', 'LoginController@doLogin')->name('login');
		Route::get('logout', 'LoginController@logout')->name('logout');
	});

  Route::group(['namespace' => 'Crud'], function () {

    //Dashboard User

    Route::resources([
    "dashboarduser"=>"DashboardUserController",
    "history"=>"HistoriPesananController"
  ]);

    


      //ROLE MANAGEMENT
      Route::get('role', 'RoleManagementController@index')->name('role.index');
  		// Route::get('role/new', 'RoleManagementController@create')->name('role.tambahdata');
  		//Route::post('role/new', 'RoleManagementController@save')->name('role.save');
      //Route::get('role/update/{id}', 'RoleManagementController@edit')->name('role.edit');
      //Route::post('role/update/{id}', 'RoleManagementController@UpdateRole')->name('role.update');
      Route::delete('role/{id}', 'RoleManagementController@destroy')->name('role.delete');


      //MANAGEMENT PROFIL
      Route::get('profil', 'ProfilManagementController@index')->name('profil.index');

      //MANAGEMENT PESANAN
      Route::get('histori', 'HistoriPesananController@index')->name('histori.index');

      //MANAGEMENT RESERVASI (USER)
      Route::get('reservasi', 'ReservasiManagementController@index')->name('reservasi.index');
 

      //USER WEB MANAGEMENT
      Route::get('user', 'ControllerUser@data')->name('user.data');
      //Route::get('user/edituser/{id}', 'ControllerUser@edit')->name('user.edit');
      //Route::post('user/edituser/{id}', 'ControllerUser@update')->name('user.update');
      Route::post('user/hapususer/{id}', 'ControllerUser@destroy')->name('user.delete');
      //Route::get('user/newUser', 'ControllerUser@newUser')->name('user.newUser');
      //Route::post('user/tambahuser', 'ControllerUser@createUser')->name('user.tambah');

      //MOBIL
      Route::get('mobil', 'MobilController@index')->name('mobil.index');
  		Route::get('mobil/new', 'MobilController@create')->name('mobil.tambahdata');
      Route::post('mobil/newmobil', 'MobilController@createMobil')->name('mobil.tambahmobil');
      Route::post('mobil/hapusmobil/{id}', 'MobilController@destroy')->name('mobil.delete');
      Route::get('mobil/editmobil/{id}', 'MobilController@edit')->name('mobil.edit');
      Route::post('mobil/editmobil/{id}', 'MobilController@update')->name('mobil.update');

      //RENTAL
      Route::get('rental', 'RentalController@index')->name('rental.index');
  		Route::get('rental/new', 'RentalController@create')->name('rental.tambahdata');
      Route::post('rental/hapusrental/{id}', 'RentalController@destroy')->name('rental.delete');

      //VENDOR
      Route::get('vendor', 'VendorController@index')->name('vendor.index');
      Route::get('vendor/new', 'VendorController@create')->name('vendor.tambahdata');
      Route::post('vendor/newvendor', 'VendorController@createVendor')->name('vendor.tambahVendor');
      Route::post('vendor/hapusvendor/{id}', 'VendorController@destroy')->name('vendor.delete');
      Route::get('vendor/editvendor/{id}', 'VendorController@edit')->name('vendor.edit');
      Route::post('vendor/editvendor/{id}', 'VendorController@update')->name('vendor.update');
    });
;
