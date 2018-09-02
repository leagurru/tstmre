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

//Route::resource('admin/organismos','AdminOrganismosController');
Route::resource('admin/organismos','AdminOrganismosController',['names'=>[
    'index'  => 'admin.organismos.index',
    'create' => 'admin.organismos.create',
    'store' => 'admin.organismos.store',
    'edit' => 'admin.organismos.edit'

]]);

//Route::resource('admin/mres','AdminMresController');
Route::resource('admin/mres','AdminMresController',['names'=>[
    'index'  => 'admin.mres.index',
    'create' => 'admin.mres.create',
    'store' => 'admin.mres.store',
    'edit' => 'admin.mres.edit'
]]);

//Route::resource('admin/edificios','AdminEdificiosController');
Route::resource('admin/edificios','AdminEdificiosController',['names'=>[
    'index'  => 'admin.edificios.index',
    'create' => 'admin.edificios.create',
    'store' => 'admin.edificios.store',
    'edit' => 'admin.edificios.edit'
]]);

//Route::resource('escritos','EscritosController',['names'=>[
//    'index'  => 'escritos.index',
//    'create' => 'escritos.create',
//    'store' => 'escritos.store',
//    'edit' => 'escritos.edit'
//]]);


Route::resource('escritos','EscritosController',['names'=>[
    'index'  => 'escritos.index'
]]);