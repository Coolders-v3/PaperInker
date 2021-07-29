<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ReadWriter;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\UserSlides;

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

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
//Route::get('home', [App\Http\Controllers\HomeController::class, 'indexW'])->middleware('auth')->name('texts');
//Route Hooks - Do not delete//
Route::view('illustrations', 'livewire.illustrations.index')->middleware('auth')->name('illustrations');
Route::view('texts', 'livewire.texts.index')->middleware('auth')->name('texts');
Route::get('/slides', [UserSlides::class, 'render'])->middleware('auth')->name('slides');

Route::view('/showIllustrator', 'livewire.illustrations.show-illustrator')->middleware('auth')->name('showIllustrator');
Route::view('/showWriter', 'livewire.texts.show-writer')->middleware('auth')->name('showWriter');
