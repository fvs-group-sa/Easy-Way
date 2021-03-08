<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('pages/index');
})->name('home');

Route::get('/services', function () {
    return view('pages/services');
})->name('services');

Route::get('/settings', function () {
    return view('admin/settings');
})->name('settings')->middleware('auth');

Route::get('/post', [PostsController::class, 'index'])->name('post');
Route::get('/newpost', [PostsController::class, 'newPostIndex'])->name('post.new');
Route::post('/post', [PostsController::class, 'store']);
Route::delete('/post/{post}', [PostsController::class, 'destroy'])->name('post.destroy');

Route::get('/admin', [PostsController::class, 'index'])
    ->name('admin')
    ->middleware('auth');

Route::get('/settings', [PostsController::class, 'index'])
    ->name('settings')
    ->middleware('auth');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);