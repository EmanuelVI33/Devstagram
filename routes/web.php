<?php

use App\Http\Controllers\ImagenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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
    return view('home');
});

Route::get('/crear-cuenta', [RegisterController::class, 'index'] )->name('register');
Route::post('/crear-cuenta', [RegisterController::class, 'store'] )->name('register.store');

// Iniciar seción
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-store', [LoginController::class, 'store'])->name('login.store');

// Cerrar seción
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// Rutas dinamicas podemos pasar variables
Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');