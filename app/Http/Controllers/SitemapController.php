<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SitemapController extends Controller
{
    public function index(): Response
    {
        return response()
            ->view('sitemaps.index', [
                'sitemaps' => [
                    [
                        'loc' => route('sitemaps.pages'),
                        'lastmod' => now()->toDateString(),
                    ],
                    [
                        'loc' => route('sitemaps.blog'),
                        'lastmod' => Post::query()
                            ->published()
                            ->max('updated_at')?->toDateString(),
                    ],
                ],
            ])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    public function pages(): Response
    {
        return response()
            ->view('sitemaps.pages', [
                'urls' => [
                    [
                        'loc' => route('home'),
                        'lastmod' => now()->toDateString(),
                        'changefreq' => 'weekly',
                        'priority' => '1.0',
                    ],
                    [
                        'loc' => route('blog.index'),
                        'lastmod' => Post::query()
                            ->published()
                            ->max('updated_at')?->toDateString() ?? now()->toDateString(),
                        'changefreq' => 'daily',
                        'priority' => '0.8',
                    ],
                ],
            ])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }

    public function blog(): Response
    {
        $posts = Post::query()
            ->published()
            ->orderByDesc('published_at')
            ->get(['slug', 'updated_at', 'published_at']);

        return response()
            ->view('sitemaps.blog', [
                'posts' => $posts,
            ])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
