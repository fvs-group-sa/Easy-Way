<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\SettingsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// */
// Route::group(['prefix' => 'en'], function () {
//     App::setLocale('en');



    Route::get('/', function () {
        return view('pages/index');
    })->name('home');


  


    Route::get('/services', function () {
        return view('pages/services');
    })->name('services');

    Route::get('/settings', function () {
        return view('admin/settings');
    })->name('settings')->middleware('auth');

    Route::get('/post', [PostsController::class, 'index'])->name('post')->middleware('auth');
    Route::get('/newpost', [PostsController::class, 'newPostIndex'])->name('post.new')->middleware('auth');
    Route::post('/Addpost', [PostsController::class, 'store'])->name('addpost')->middleware('auth');
    Route::get('/editpost/{post}', [PostsController::class, 'editPost'])->name('editpost')->middleware('auth');
    Route::post('/updatepost/{post}', [PostsController::class, 'update'])->name('updatepost')->middleware('auth');
    Route::delete('/post/{post}', [PostsController::class, 'destroy'])->name('post.destroy')->middleware('auth');

    Route::get('/admin', [PostsController::class, 'index'])
        ->name('admin')
        ->middleware('auth');

    Route::get('/settings', [SettingsController::class, 'index'])
        ->name('settings')
        ->middleware('auth');

    Route::post('/logout', [LogoutController::class, 'store'])->name('logout')->middleware('auth');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);

    // Route::get('/register', [RegisterController::class, 'index'])->name('register');
    // Route::post('/register', [RegisterController::class, 'store']);


    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
// });

Route::get('set-locale/{locale}', function ($locale) {
    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale.setting');


// test
