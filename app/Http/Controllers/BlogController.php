<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $featuredPost = Post::query()
            ->with('category')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->where('is_featured', true)
            ->orderByDesc('published_at')
            ->first();

        $posts = Post::query()
            ->with('category')
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->when($featuredPost, fn ($query) => $query->whereKeyNot($featuredPost->id))
            ->orderByDesc('published_at')
            ->get();

        $postsPayload = $posts->map(function (Post $post): array {
            return [
                'title' => $post->title,
                'slug' => $post->slug,
                'excerpt' => $post->excerpt,
                'image' => $post->featured_image ? asset('storage/'.$post->featured_image) : null,
                'published_date' => optional($post->published_at)->format('M d, Y'),
                'category_name' => optional($post->category)->name,
                'category_slug' => optional($post->category)->slug,
                'read_url' => url('/blog/'.$post->slug),
            ];
        })->values();

        $categoriesPayload = $posts
            ->filter(fn (Post $post) => $post->category)
            ->map(fn (Post $post): array => [
                'name' => $post->category->name,
                'slug' => $post->category->slug,
            ])
            ->unique('slug')
            ->sortBy('name')
            ->values();

        return view('blog.index', [
            'featuredPost' => $featuredPost,
            'postsPayload' => $postsPayload,
            'categoriesPayload' => $categoriesPayload,
        ]);
    }
}
