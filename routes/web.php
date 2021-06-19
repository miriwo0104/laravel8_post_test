<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostTestController;

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

Route::get('/input', [PostTestController::class, 'input'])->name('input');
Route::get('/post', [PostTestController::class, 'post'])->name('post');
Route::get('/display', [PostTestController::class, 'display'])->name('display');