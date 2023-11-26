<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;
use App\Mail\SendOtp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\FormatController;
use App\Models\Format;

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

// Auth
Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');

Route::get('auth/{provider}', 'App\Http\Controllers\SocialController@redirectToProvider');
Route::get('auth/{provider}/callback', 'App\Http\Controllers\SocialController@handleProviderCallback');

// Email Verification & Resend OTP
Route::post('/verify', function (Request $request) {
    $otp = implode('', $request->input('otp'));
    info($otp);
    $user = User::where('otp', $otp)->first();
    if (isset($user) && $user->email_verified_at < now()->addHour() && (!is_null($user))) {
        User::where('id', $user->id)
            ->update([
                'email_verified_at' => now()
            ]);
        return redirect()->route('base');
    } elseif (!$user) {
        return back()->with('error', 'Invalid OTP');
    } else {
        return back()->with('error', 'Verification code is expired');
    }
})->name('verify.email.code');

Route::get('resend/email/otp', function () {

    $data = User::where('email', Auth::user()->email)->first();
    $otp = mt_rand(1000, 9999);
    $data->update([
        'otp' => $otp,
    ]);
    Mail::to($data->email)->send(new SendOtp($otp, $data));
    if (isset($data) && (!is_null($data))) {
        return back()->with('success', 'OTP verification code has been sent to you email. Please Verify');
    }
})->name('resend.code');
//   Email Verification & Resend OTP

Route::get('otp-verification', function () {
    return view('auth.verify');
});

Route::get('/run-cleanup',  [HomeController::class, 'runCleanup'])->name('run-cleanup');


Route::get('register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::get('/compress', [HomeController::class, 'justcompress'])->name('get-justcompress');
Route::get('/blogs', [HomeController::class, 'blogs'])->name('get-blogs');
Route::get('/blog/{slug}', [HomeController::class, 'blogsdetail'])->name('get-blogs-detail');


Route::get('/check-responsiveness', [HomeController::class, 'checkresponsiveness'])->name('get-checkrespo');
Route::get('/how-its-work', [HomeController::class, 'howWorks'])->name('get-how-works');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicies'])->name('get-privacy-policies');
Route::get('/buy-us-coffee', [HomeController::class, 'support'])->name('get-support');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('get-contact');
Route::post('/contact', [HomeController::class, 'contactUs'])->name('contact.send');
Route::get('/term-and-condition', [HomeController::class, 'term'])->name('get-term');


Route::middleware(['auth', 'isVerified'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');
});


// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index']);
// Sitemap


// Super Admin Dashboard

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('settings', [HomeController::class, 'dailyQuotaView'])->name('index.dailyquota');


    // BLOGS
    Route::get('all-blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('add-blog', [BlogController::class, 'addBlog'])->name('add.blog');
    Route::post('add-blog', [BlogController::class, 'store'])->name('insert.blog');
    Route::get('edit-blog/{id}', [BlogController::class, 'editBlog'])->name('edit.blog');
    Route::post('update-blog/{id}', [BlogController::class, 'update'])->name('update.blog');
    Route::delete('delete-blog-image/{id}', [BlogController::class, 'deleteBlogImage'])->name('delete_blog_image');
    // BLOGS

    
    // Formats
    Route::get('formats', [FormatController::class, 'index'])->name('formats.index');
    Route::get('add-format', [FormatController::class, 'add'])->name('add.format');
    Route::post('add-format', [FormatController::class, 'store'])->name('insert.format');
    Route::get('edit-format/{id}', [FormatController::class, 'edit'])->name('edit.format');
    Route::post('update-format/{id}', [FormatController::class, 'update'])->name('update.format');
    // Formats

    Route::get('all_contact', [HomeController::class, 'indexContact'])->name('contact.index');
});


Route::get('/{format?}', function ($format = null) {

    if(empty($format))
    {
        return view('index');
    }

    $type = Format::where('slug',$format)->with('content')->first();

    if($type)
    {
        return view('index', compact('type'));
    }
    abort(404);     
})->name('base');
