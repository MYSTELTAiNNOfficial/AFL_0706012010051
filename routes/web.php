<?php

use App\Http\Controllers\BookshelfController;
use App\Http\Controllers\CommonControl;
use App\Http\Controllers\BookController;
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

Route::get('/', [CommonControl::class, 'index']);
Route::get('/about', [CommonControl::class, 'about']);
Route::resource('books', BookController::class);
Route::resource('bookshelfs', BookshelfController::class);
