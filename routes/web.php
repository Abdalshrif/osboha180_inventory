<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
     return view('auth.login');
 });

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

//Route Fore admin
Route::get('/admin', 'adminController@index')->name('admin.index');
Route::get('admin/show{id}', 'adminController@show')->name('admin.show');
Route::get('admin/store', 'adminController@show')->name('admin.store');

//Route Monitor
Route::get('monitor', 'monitorController@index')->name('monitor.index');
Route::get('monitor/show{id}', 'monitorController@show')->name('monitor.show');
Route::get('monitor/store', 'monitorController@store')->name('monitor.store');

//Route Guided
Route::get('guided', 'guidedController@index')->name('guided.index');
Route::get('guided.show{id}', 'guidedController@show')->name('guided.show');
Route::get('guided/soter', 'guidedController@store')->name('guided.store');


// Permission route
    Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});


