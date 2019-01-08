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
Route::get('home1','SystemController@index')->name('home1');

Route::group(['namespace' => 'Auth'], function () {
		Route::get('login', 'LoginController@showLogin')->name('showlogin');
		Route::post('login', 'LoginController@doLogin')->name('login');
		Route::get('logout', 'LoginController@logout')->name('logout');
	});

Route::group(['namespace' => 'Crud'], function () {

        //ROLE MANAGEMENT
    Route::get('role', 'RoleController@index')->name('role.tampilData');
		Route::get('role/new', 'RoleController@create')->name('role.tambahdata');

	});
;
