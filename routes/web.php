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




Route::get('/authors', [AuthorController::class, 'getAuthors']);
Route::get('/authors/{id}', [AuthorController::class, 'authorDetail']);
Route::post('/authors', [AuthorController::class, 'createAuthor']);
Route::get('/author/{id}', [AuthorController::class, 'deleteAuthor']);
Route::get('/author/{id}/edit', [AuthorController::class, 'editAuthor']);
Route::post('/author/{id}/edit', [AuthorController::class, 'updateAuthor']);

Route::get('/books', [BookController::class, 'getBooks']);
Route::get('/books/{id}', [BookController::class, 'getBookById']);