<?php

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

Route::get('/', function () {
    return view('main');
})->name("main");

Route::get('/join',function() {
    return view('join');
})->name('join');

Route::get('/login',function() {
    return view('login');
})->name('login');
Route::get('/logout',[\App\Http\Controllers\auth\LoginController::class,'logout'])->name('logout');
Route::post('/login',[\App\Http\Controllers\auth\LoginController::class,'login'])->name('post.login');
Route::post('/join',[\App\Http\Controllers\auth\JoinController::class,'register'])->name('post.join');
