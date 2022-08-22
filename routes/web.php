<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ekleController;
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

Route::get('/ekle',[ekleController::class,'create']);
Route::post('/ekler',[ekleController::class,'store'])->name('oyun.ekle.post');
