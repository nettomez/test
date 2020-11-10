<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/netto-meza', function () {
    return view('hola');
});


/*Route::get('permiso', 'PermisoController@create');
Route::get('permiso', 'PermisoController@index');*/
Route::view('permiso', 'permiso');