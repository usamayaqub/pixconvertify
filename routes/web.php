<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/compress', [HomeController::class, 'justcompress'])->name('get-justcompress');

Route::get('/checkresponsivness', [HomeController::class, 'checkresponsiveness'])->name('get-checkrespo');

Route::get('/{format?}', function ($format = null) {
    return view('index',compact('format'));
})->name('base');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
