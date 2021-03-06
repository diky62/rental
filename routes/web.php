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
  return view('auth/login');
});

Route::get('daftar', 'Register1Controller@index')->name('daftar');


Route::get('check',function(){
  switch (Auth::user()->roles_id) {
    case '1':
      return redirect('dashboard_admin?login=true');
      break;
    case '2':
      return redirect('dashboard?login=true');
      break;
    case '3':
      return redirect('/homeuser?login=true');
      break;

    default:
      # code...
      break;
  }
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>'auth'],function(){
  Route::group(['middleware'=>'role:1'],function(){
    Route::get('dashboard_admin','DashboardAdminController@index')->name('dashboard_admin');
    Route::get('/home1','Home1Controller@index')->name('home1');

Route::group(['namespace' => 'Auth'], function () {
});

        Route::get('/home', 'HomeController@index')->name('home');
        // Route::get('daftar','Register1Controller@index')->name('daftar');
        // Route::get('daftar','Register1Controller@store')->name('daftar');


        Route::resources([
          "daftar"=>"Register1Controller"
              ]);


  Route::group(['namespace' => 'Crud'], function () {
    //USER WEB MANAGEMENT
    Route::get('user', 'ControllerUser@data')->name('user.data');
    //Route::get('user/edituser/{id}', 'ControllerUser@edit')->name('user.edit');
    //Route::post('user/edituser/{id}', 'ControllerUser@update')->name('user.update');
    Route::post('user/hapususer/{id}', 'ControllerUser@destroy')->name('user.delete');
    //Route::get('user/newUser', 'ControllerUser@newUser')->name('user.newUser');
    //Route::post('user/tambahuser', 'ControllerUser@createUser')->name('user.tambah');

    //ROLE MANAGEMENT
    Route::get('role', 'RoleManagementController@index')->name('role.index');
    // Route::get('role/new', 'RoleManagementController@create')->name('role.tambahdata');
    //Route::post('role/new', 'RoleManagementController@save')->name('role.save');
    //Route::get('role/update/{id}', 'RoleManagementController@edit')->name('role.edit');
    //Route::post('role/update/{id}', 'RoleManagementController@UpdateRole')->name('role.update');
    //Route::delete('role/{id}', 'RoleManagementController@destroy')->name('role.delete');

    //VENDOR
    Route::get('vendor', 'VendorController@index')->name('vendor.index');
    // Route::get('datavendor', 'VendorController@index1')->name('vendor.index1');
    // Route::get('vendor/new', 'VendorController@create')->name('vendor.tambahdata');
    // Route::post('vendor/newvendor', 'VendorController@createVendor')->name('vendor.tambahVendor');
    Route::post('vendor/hapusvendor/{id}', 'VendorController@destroy')->name('vendor.delete');
    // Route::get('vendor/editvendor/{id}', 'VendorController@edit')->name('vendor.edit');
    // Route::post('vendor/editvendor/{id}', 'VendorController@update')->name('vendor.update');
    Route::post('vendor/status/{id}', 'VendorController@vendorStatus')->name('vendor.status');
  });
  });
});

Route::group(['middleware'=>'role:2'],function(){
  Route::get('dashboard','DashboardVendorController@index')->name('dashboard');
  Route::get('/home2','Home2Controller@index')->name('home2');
  Route::get('dashboard_vendor','DashboardVendorController@index')->name('dashboard');

    Route::group(['namespace' => 'Crud'], function () {
      Route::get('dashboard','DashboardVendorController@index')->name('dashboard');

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
        Route::post('rental/status/{id}', 'RentalController@rentalStatus')->name('rental.status');

        //VENDOR
        // Route::get('vendor', 'VendorController@index')->name('vendor.index');
        Route::get('datavendor', 'Vendor1Controller@index1')->name('vendor.index1');
        Route::get('vendor/new', 'Vendor1Controller@create')->name('vendor.tambahdata');
        Route::post('vendor/newvendor', 'Vendor1Controller@createVendor')->name('vendor.tambahVendor');
        // Route::post('vendor/hapusvendor/{id}', 'VendorController@destroy')->name('vendor.delete');
        Route::get('vendor/editvendor/{id}', 'Vendor1Controller@edit')->name('vendor.edit');
        Route::post('vendor/editvendor/{id}', 'Vendor1Controller@update')->name('vendor.update');

        //Data Available
        // Route::post('vendor/status/{id}', 'Vendor1Controller@vendorStatus')->name('vendor.status');

        //DATA PELANGGAN
        Route::get('datapelanggan', 'UserMobileController@index')->name('user.mobile');
        Route::post('datapelanggan/hapusdatapelanggan/{id}', 'UserMobileController@destroy')->name('user.mobile.delete');

        //STOK MOBIL
        Route::get('stok_mobil', 'StokMobilController@index')->name('stok.mobil');
        Route::get('stok_mobil/new', 'StokMobilController@create')->name('stok_mobil.tambahdata');
        Route::post('stok_mobil/new_stok_mobil', 'StokMobilController@createStokMobil')->name('stok_mobil.tambahmobil');
        Route::post('stok_mobil/hapusmobil/{id}', 'StokMobilController@destroy')->name('stok_mobil.delete');
        Route::get('stok_mobil/edit_stok_mobil/{id}', 'StokMobilController@edit')->name('stok_mobil.edit');
        Route::post('stok_mobil/edit_stok_mobil/{id}', 'StokMobilController@update')->name('stok_mobil.update');
        Route::post('stok_mobil/status/{id}', 'StokMobilController@StokMobilStatus')->name('stok_mobil.status');

        //notification
        Route::get('readNotif','NotificationController@readNotif');
      });
    });

Route::group(['middleware'=>'role:3'],function(){
  // Route::get('/homeuser','User\HomeUserController@index')->name('homeuser');
  Route::resources([
    "/homeuser"=>"User\HomeUserController",
      "profil"=>"User\ProfilController",
      "reservasi"=>"ReservasiController",
      "history"=>"User\HistoryController",
      "success"=>"User\SuccessController",

    ]);

    Route::post('/homeuser/show','User\HomeUserController@show')->name('/homeuser.show');
    Route::post('/homeuser/create/{id}','User\HomeUserController@create')->name('/homeuser.create');
    Route::post('/homeuser/store','User\HomeUserController@store')->name('/homeuser.store');
    Route::post('/homeuser/rent','User\HomeUserController@rent')->name('/homeuser.rent');

});
