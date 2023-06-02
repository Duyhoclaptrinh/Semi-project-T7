<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');


Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/login_url', [UserController::class, 'showLogin'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('auth.login');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('/video-management', [VideoController::class, 'listVideo'])->name('management');
    Route::get('/video-add', [VideoController::class, 'add'])->name('video.add');
    Route::post('/video-add-success', [VideoController::class, 'store'])->name('video.store');
    Route::get('/video-update/{id}', [VideoController::class, 'edit'])->name('video.update');
    Route::post('/video-update-success', [VideoController::class, 'update'])->name('video.edit');
    Route::get('/video-delete/{id}', [VideoController::class, 'destroy'])->name('video.delete');
    Route::get('/search', [IndexController::class, 'search'])->name('search');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/register', [UserController::class, 'store'])->name('auth.register');
Route::get('/register_url', [UserController::class, 'showRegister'])->name('welcome.register');
