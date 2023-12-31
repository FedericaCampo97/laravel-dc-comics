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

use App\Http\Controllers\ComicController;

Route::get('/', [ComicController::class, 'index']);
Route::get('/store', [ComicController::class, 'store']);
Route::get('/add_comic', [ComicController::class, 'show_add']);
