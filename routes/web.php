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

//Route::resource('admin/users','AdminUsersController');

Route::resource('admin/users','AdminUsersController',['names'=>[
    'index'  => 'admin.users.index',
    'create' => 'admin.users.create',
    'store' => 'admin.users.store',
    'edit' => 'admin.users.edit'

]]);

//Route::resource('admin/organismos','OrganismosController');
//Route::resource('admin/organismos','OrganismosController',['names'=>[
//    'index'  => 'admin.organismos.index',
//    'create' => 'admin.organismos.create',
//    'store' => 'admin.organismos.store',
//    'edit' => 'admin.organismos.edit'
//
//]]);



Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {

    Route::resource('edificios','EdificiosController');
    Route::resource('mres','MresController');
    Route::resource('organismos','OrganismosController');

});


Route::prefix('user')->name('user.')->namespace('User')->group(function () {
    Route::resource('escritos','EscritosController');
});



//Route::resource('escritos','EscritosController',['names'=>[
//    'index'  => 'escritos.index',
//    'create' => 'escritos.create',
//    'store' => 'escritos.store',
//    'edit' => 'escritos.edit'
//]]);


//Route::resource('escritos','EscritosController',['names'=>[
//    'index'  => 'escritos.index'
//]]);