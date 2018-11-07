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

Route::get('/home', 'HomeController@index')->name('home');



// Authentication Routes...
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//mannagement routes

Route::group(['prefix' => 'manage','middleware'=>'role:superadministrator|administrator|manager|server'], function () {
    //Route::redirect('/', 'ManageController@dashboard', 301);
    Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users', 'UserController');
    Route::get('/products')->name('manage.produts');

});