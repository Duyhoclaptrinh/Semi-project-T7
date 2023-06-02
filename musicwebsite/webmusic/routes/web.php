<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AudioController;
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
    Route::get('/audio-management', [AudioController::class, 'listAudio'])->name('management');
    Route::get('/audio-add', [AudioController::class, 'add'])->name('audio.add');
    Route::post('/audio-add-success', [AudioController::class, 'store'])->name('audio.store');
    Route::get('/audio-update/{id}', [AudioController::class, 'edit'])->name('audio.update');
    Route::post('/audio-update-success', [AudioController::class, 'update'])->name('audio.edit');
    Route::get('/audio-delete/{id}', [AudioController::class, 'destroy'])->name('audio.delete');
    Route::get('/search', [IndexController::class, 'search'])->name('search');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/register', [UserController::class, 'store'])->name('auth.register');
Route::get('/register_url', [UserController::class, 'showRegister'])->name('welcome.register');
