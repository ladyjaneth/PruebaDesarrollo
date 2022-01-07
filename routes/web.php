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

Route::get('/', 'App\Http\Controllers\EmpleadosController@index');
Route::get('/empleados','App\Http\Controllers\EmpleadosController@create')->name('empleados.create');
Route::post('/empleados','App\Http\Controllers\EmpleadosController@store')->name('empleados.store');
