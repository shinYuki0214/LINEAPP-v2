<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LineLoginController;
use App\Http\Controllers\LineMessengerController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// ラインログイン用
Route::get('/linelogin', [LineLoginController::class,'lineLogin'])->name('linelogin');
Route::get('/callback', [LineLoginController::class,'callback'])->name('callback');

// LINE メッセージ受信
Route::post('/line/webhook', [LineMessengerController::class,'webhook'])->name('line.webhook');
// LINE メッセージ送信用
Route::get('/line/message', [LineMessengerController::class,'message']);