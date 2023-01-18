<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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


Route::get('dashboard', function () {
    return view('dashboard.pages.home');
});

Route::get('/authors', [AuthorController::class, 'getAuthors']);

Route::get('/books', [BookController::class, 'getBooks']);
Route::get('/books/{id}', [BookController::class, 'getBookById']);