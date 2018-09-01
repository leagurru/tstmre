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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/about','UsersController@index);
Route::get('/about', function () {
    return 'hi about page';
});

//Route::get('/user','UserController@index');

Route::resource('admin/users','AdminUsersController');

Route::resource('organismos/index','OrganismoController');

Route::resource('escritos/index','EscritoController');