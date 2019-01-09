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

Route::group(['namespace' => 'Auth'], function () {
		Route::get('login', 'LoginController@showLogin')->name('showlogin');
		Route::post('login', 'LoginController@doLogin')->name('login');
		Route::get('logout', 'LoginController@logout')->name('logout');
	});

  Route::group(['namespace' => 'Crud'], function () {

      //ROLE MANAGEMENT
      Route::get('role', 'RoleManagementController@index')->name('role.index');
  		Route::get('role/new', 'RoleManagementController@create')->name('role.tambahdata');
  		//Route::post('role/new', 'RoleManagementController@save')->name('role.save');
      //Route::get('role/update/{id}', 'RoleManagementController@edit')->name('role.edit');
      //Route::post('role/update/{id}', 'RoleManagementController@UpdateRole')->name('role.update');
      //Route::delete('role/{id}', 'RoleManagementController@destroy')->name('role.delete');


      //USER WEB MANAGEMENT
      Route::get('user', 'ControllerUser@data')->name('user.data');
      //Route::get('user/edituser/{id}', 'ControllerUser@edit')->name('user.edit');
      //Route::post('user/edituser/{id}', 'ControllerUser@update')->name('user.update');
      //Route::post('user/hapususer/{id}', 'ControllerUser@destroy')->name('user.delete');
      Route::get('user/newUser', 'ControllerUser@newUser')->name('user.newUser');
      //Route::post('user/tambahuser', 'ControllerUser@createUser')->name('user.tambah');

    });
;
