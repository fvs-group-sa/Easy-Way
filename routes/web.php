<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

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
});

Route::get('/services', function () {
    return view('pages/services');
});

Route::get('/post', [PostController::class, 'index'])
    ->name('post');


Route::get('/admin', [DashboardController::class, 'index'])
    ->name('admin');
    // ->middleware('auth');

    // Route::get('/logout', [LogoutController::class, 'store'])
    // ->name('dashboard');