<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuthorRequest;
use App\Models\Category;
use App\Models\EmailList;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_posts' => Post::count(),
            'total_categories' => Category::count(),
            'featured_posts' => Post::where('is_featured', true)->count(),
            'published_posts' => Post::where('is_published', true)->count(),
            'total_subscribers' => EmailList::count(),
            'total_author_requests' => AuthorRequest::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
