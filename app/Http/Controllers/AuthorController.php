<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function getAuthors()
    {
        $authors = Author::with('books')->orderBy('name')->get();
        return view('Pages.Author.list')->with(['authors' => $authors]);
    }

    public function createAuthor(AuthorRequest $request)
    {
        if ($request->hasFile('photo')) {
            $name = rand() . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('upload/AuthorProfileImage'), $name);
            $path = 'upload/AuthorProfileImage/' . $name;
        } else {
            $path = null;
        }
        $author = [
            'name' => $request->name,
            'about' => $request->about,
            'photo' => $path
        ];
        Author::create($author);
        return redirect('/authors');
    }

    public function authorDetail($id)
    {
        $author = Author::with('books')->find($id);
        return view('Pages.Author.author')->with(['author' => $author]);
    }

    public function deleteAuthor($id)
    {
        Author::find($id)->delete();
        return redirect('/authors');
    }
}