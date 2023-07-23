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
Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');

// Auth
Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');


Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/compress', [HomeController::class, 'justcompress'])->name('get-justcompress');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('get-blogs');


Route::get('/checkresponsivness', [HomeController::class, 'checkresponsiveness'])->name('get-checkrespo');

Route::get('/{format?}', function ($format = null) {
    return view('index',compact('format'));
})->name('base');



Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');





// Super Admin Dashboard

// Route::middleware(['auth'])->group(function () {

   
    Route::get('settings', [HomeController::class, 'dailyQuotaView'])->name('index.dailyquota');

    //FAQS 
    Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs.index');
    Route::get('add-faqs', [HomeController::class, 'addFaqs'])->name('add.faqs');
    Route::post('add-faqs', [HomeController::class, 'insertFaqs'])->name('insert.faqs');
    Route::get('edit-faqs/{id}', [HomeController::class, 'editFaqs'])->name('edit.faqs');
    Route::post('update-faqs/{id}', [HomeController::class, 'updateFaqs'])->name('update.faqs');
    //FAQS 

    // BLOGS
    Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('add-blog', [BlogController::class, 'addBlog'])->name('add.blog');
    Route::post('add-blog', [BlogController::class, 'store'])->name('insert.blog');
    Route::get('edit-blog/{id}', [BlogController::class, 'editBlog'])->name('edit.blog');
    Route::post('update-blog/{id}', [BlogController::class, 'update'])->name('update.blog');
    Route::delete('delete-blog-image/{id}', [BlogController::class, 'deleteBlogImage'])->name('delete_blog_image');
    // BLOGS

// });
