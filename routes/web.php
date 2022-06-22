<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


// Route::get('/','App\Http\Controllers\StudentController\StudentController@index');

Route::get('/',[StudentController::Class,'index']);
Route::get('create',[StudentController::Class,'create']);
Route::post('/',[StudentController::Class,'store']);
Route::get('edit/{id}',[StudentController::Class,'edit']);
Route::post('edit/{id}',[StudentController::Class,'updete']);
Route::get('delete/{id}',[StudentController::Class,'destroy']);

 
   
   

