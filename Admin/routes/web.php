<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers;
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
// Route::get('/',[HomeController::class,'home']);
// Route::get('/login',[LoginController::class,'login']);
// Route::get('/button',[ButtonsController::class,'button']);
// Route::get('/registeration',[RegisterController::class,'registeration']);
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [HomeController::class, 'home']);
    Route::get('/login', [LoginController::class, 'login']);
    Route::get('/button', [ButtonsController::class, 'button']);
    Route::get('/registeration', [RegisterController::class, 'registeration']);
    Route::get('/cards', [CardController::class, 'cards']);
});

Route::fallback(function () {
    return view('layouts.404');
});
