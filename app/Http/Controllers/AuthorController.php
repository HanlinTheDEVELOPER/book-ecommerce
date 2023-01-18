<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function getAuthors()
    {
        $authors = Author::with('books')->get();
        // dd($data);
        return view('dashboard.pages.author')->with(['authors' => $authors]);
    }
}