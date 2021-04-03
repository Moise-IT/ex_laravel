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
})->name('app.home');

Route::get('/a-propos',function(){
    return view('a-propos');
})->middleware('test')->name('apropos');

///cClientController
Route::get('/clients',[App\Http\Controllers\ClientsController::class,'index'])->name('client.index');

Route::get('/clients/create',[App\Http\Controllers\ClientsController::class,'create'])->name('client.create');

Route::get('/clients/{client}',[App\Http\Controllers\ClientsController::class,'show'])->name('client.show');

Route::get('/clients/{client}/edit',[App\Http\Controllers\ClientsController::class,'edit'])->name('client.edit');

Route::post('/clients',[App\Http\Controllers\ClientsController::class,'store'])->name('client.store');

Route::patch('/clients/{client}',[App\Http\Controllers\ClientsController::class,'update'])->name('client.update');

Route::delete('/clients/{client}',[App\Http\Controllers\ClientsController::class,'destroy'])->name('client.destroy');

//ContactController
Route::get('/contact',[App\Http\Controllers\ContactController::class,'create'])->name('contact.create');

Route::post('/contact',[App\Http\Controllers\ContactController::class,'store'])->name('contact.store');

