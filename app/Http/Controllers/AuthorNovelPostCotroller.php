<?php

namespace App\Http\Controllers;

use App\Models\AuthorNovelPost;
use Illuminate\Http\Request;

class AuthorNovelPostCotroller extends Controller
{
    public function index()
    {
        return view('authors.index');
    }
    public function create()
    {
        return view('authors.create');
    }

    public function store(Request $request)
    {
        $validated = $request -> validate([
           'title' => 'required',
           'body' => 'required',
        ]);

        $post = AuthorNovelPost::create([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect()->route('authors.index');
    }
}
