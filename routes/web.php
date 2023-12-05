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

Route::get('/wait',function() {
    return view('wait-create');
})->name('wait.create')->middleware('auth');
Route::get('/menu',[\App\Http\Controllers\crm\OrderController::class,'getMenu'])->name('wait.menu')->middleware('auth');

Route::get("/wait-order",function() {
    return view('wait-order');
})->name('wait.order')->middleware('auth');

Route::get('/pay',function() {
    return view('pay');
})->name('wait.pay')->middleware('auth');

Route::post('/order',[\App\Http\Controllers\OrderController::class,'order'])->name('post.order');

Route::get("/stream",[\App\Http\Controllers\StreamController::class,'stream'])->name("stream")->middleware('auth');

Route::prefix('crm')->group(function() {
    Route::get('login',function() {
        return view('crm.login');
    })->name('crm.login');
    Route::get('market-info',[\App\Http\Controllers\crm\ChangeInfoController::class,'marketInfo'])->name('crm.info');
    Route::get('market-wait',[\App\Http\Controllers\crm\OrderController::class,'marketWait'])->name('crm.wait');
    Route::get('logout',[\App\Http\Controllers\crm\LoginController::class,'logout'])->name('crm.logout');
//    POST
    Route::post('register',[\App\Http\Controllers\crm\JoinController::class,'register'])->name("post.crm.register");
    Route::post('login',[\App\Http\Controllers\crm\LoginController::class,'login'])->name('post.crm.login');
    Route::post('notice',[\App\Http\Controllers\crm\ChangeInfoController::class,'changeNotice']);
    Route::post('name',[\App\Http\Controllers\crm\ChangeInfoController::class,'changeMarketName']);
    Route::post('loc',[\App\Http\Controllers\crm\ChangeInfoController::class,'changeLocation']);

    Route::post('order',[\App\Http\Controllers\crm\OrderController::class,'waitingFinish']);
});
