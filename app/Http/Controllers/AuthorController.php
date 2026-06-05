<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\View\View;

class AuthorController extends Controller
{
    public function index(): View
    {
        $authors = Author::query()
            ->latest()
            ->paginate(9);

        return view('authors.index', compact('authors'));
    }

    public function show(Author $author): View
    {
        $posts = $author->posts()
            ->with('category')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->paginate(9);

        return view('authors.show', compact('author', 'posts'));
    }
}
