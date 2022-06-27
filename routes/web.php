<?php

use App\Http\Controllers\AuthorNovelPostCotroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { return view('index'); })->name('index');

Route::get('/authors', [AuthorNovelPostCotroller::class, 'index'])->name('authors.index');

Route::get('/register', [UserRegisterController::class, 'index'])->name('auths.register');
Route::post('/register', [UserRegisterController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'index'])->name('auths.index');
Route::post('/login', [AuthController::class, 'login'])->name('login');
