<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Page\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('home.index');

Route::get('/register',[AuthController::class, 'register'])->name('auth.register');
Route::get('/login',[AuthController::class, 'login'])->name('auth.login');

Route::get('/job-lists', [HomeController::class, 'jobLists'])->name('home.jobs');
