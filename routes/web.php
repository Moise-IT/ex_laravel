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
})->middleware('auth');

Route::get('/a-propos',function(){
    return view('a-propos');
})->middleware('test');

///cClientController
Route::get('/clients',[App\Http\Controllers\ClientsController::class,'index']);

Route::get('/clients/create',[App\Http\Controllers\ClientsController::class,'create']);

Route::get('/clients/{client}',[App\Http\Controllers\ClientsController::class,'show']);

Route::get('/clients/{client}/edit',[App\Http\Controllers\ClientsController::class,'edit']);

Route::post('/clients',[App\Http\Controllers\ClientsController::class,'store']);

Route::patch('/clients/{client}',[App\Http\Controllers\ClientsController::class,'update']);

Route::delete('/clients/{client}',[App\Http\Controllers\ClientsController::class,'destroy']);

//ContactController
Route::get('/contact',[App\Http\Controllers\ContactController::class,'create']);

Route::post('/contact',[App\Http\Controllers\ContactController::class,'store'])->name('contact.store');

