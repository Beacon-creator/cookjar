<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AboutController extends Controller
{
    public function index()
    {
        $author = Author::first(); // or where('is_owner', true)->first()

        return view('pages.about.index', compact('author'));
    }
}
