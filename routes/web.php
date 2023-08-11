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
    return view('index');
});

Route::get('index', [\App\Http\Controllers\PortifolioController::class, 'index']);
Route::post('send-mail', [\App\Http\Controllers\PortifolioController::class, 'sendEmail']);
