<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $featuredPost = Post::query()
            ->select(['id', 'title', 'slug', 'excerpt', 'featured_image', 'published_at', 'category_id'])
            ->with('category:id,name,slug')
            ->published()
            ->where('is_featured', true)
            ->orderByDesc('published_at')
            ->first();

        $posts = Post::query()
            ->select(['id', 'title', 'slug', 'excerpt', 'featured_image', 'published_at', 'category_id'])
            ->with('category:id,name,slug')
            ->published()
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
                'read_url' => route('blog.show', $post->slug),
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

    public function show(Post $post): View
    {
        abort_unless($post->is_published && $post->published_at, 404);

        $post->loadMissing([
            'category:id,name,slug',
            'author:id,name,slug,description,website_url,twitter_url,linkedin_url,github_url',
        ]);

        $plainTextBody = trim(strip_tags($post->body));
        $wordCount = str_word_count($plainTextBody);
        $readingTimeMinutes = max(1, (int) ceil($wordCount / 200));

        $relatedPosts = Post::query()
            ->select(['id', 'title', 'slug', 'excerpt', 'featured_image', 'published_at', 'category_id'])
            ->with('category:id,name,slug')
            ->published()
            ->whereKeyNot($post->id)
            ->when($post->category_id, fn ($query) => $query->where('category_id', $post->category_id))
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();

        return view('blog.show', [
            'post' => $post,
            'readingTimeMinutes' => $readingTimeMinutes,
            'relatedPosts' => $relatedPosts,
        ]);
    }
}
