<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    function getBooks()
    {
        $data = Book::with(['publisher', 'additionalBookinfo'])->get();
        return $data[0];
    }
}