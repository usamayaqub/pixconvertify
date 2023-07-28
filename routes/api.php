<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/convert-image', [HomeController::class, 'convertImage'])->name('convert.image');
Route::post('/compress-image', [HomeController::class, 'compressImage'])->name('compress.image');
Route::post('/send-email-with-images', [HomeController::class, 'sendEmail'])->name('send.email');
Route::get('/yt', [HomeController::class, 'download']);

Route::post('upload-image', [BlogController::class, 'uploadImage']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
