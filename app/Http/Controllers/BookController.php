<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public  function getBooks()
    {
        $data = Book::with(['publisher', 'additionalBookinfo', 'categories'])->get();
        return $data;
    }

    public function getBookById($id)
    {
        $data = Book::with(['publisher', 'additionalBookinfo', 'categories'])->find($id);
        return $data;
    }
}