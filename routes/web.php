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

Route::get('/', 'App\Http\Controllers\EmployeeController@index');
Route::post('departments/find', 'App\Http\Controllers\DepartmentController@find')->name('departments.find');

Route::resource('employees', 'App\Http\Controllers\EmployeeController');
Route::resource('departments', 'App\Http\Controllers\DepartmentController');

