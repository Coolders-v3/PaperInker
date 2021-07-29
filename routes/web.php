<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ReadWriter;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route Hooks - Do not delete//
Route::view('illustrations', 'livewire.illustrations.index')->middleware('auth')->name('illustrations');
Route::view('texts', 'livewire.texts.index')->middleware('auth')->name('texts');


//Rutas descripción personal//

/* Route::get('/home/create',[UserController::class,'create'])->middleware('auth')-> name('create'); */

/* Route::post('/home',[IllustratorController::class,'update'])->middleware('auth')->name('update'); */

/* Route::post('/home',[WriterController::class,'update'])->middleware('auth')->name('update'); */

/* Route::get('/home/edit/{id}',[UserController::class,'edit'])->middleware('auth')->name('edit'); */