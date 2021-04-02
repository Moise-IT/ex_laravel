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


Route::get('/',function(){
    return view('home');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/a-propos',function(){
    return view('a-propos');
});

Route::get('/clients',[App\Http\Controllers\ClientsController::class,'index']);

Route::get('/clients/create',[App\Http\Controllers\ClientsController::class,'create']);

Route::get('/clients/{client}',[App\Http\Controllers\ClientsController::class,'show']);

Route::get('/clients/{client}/edit',[App\Http\Controllers\ClientsController::class,'edit']);

Route::post('/clients',[App\Http\Controllers\ClientsController::class,'store']);

Route::patch('/clients/{client}',[App\Http\Controllers\ClientsController::class,'update']);

Route::delete('/clients/{client}',[App\Http\Controllers\ClientsController::class,'destroy']);

