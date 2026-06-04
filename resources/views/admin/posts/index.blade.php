@extends('layouts.admin')

@section('title', 'Posts | Admin | CodeContent.pro')

@section('content')
    <section>
        <div class="flex flex-wrap items-end justify-between gap-4">
            <div>
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Admin / Posts
                </div>

                <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Posts</h1>
                <p class="mt-4 max-w-2xl text-sm leading-7 text-muted sm:text-base">
                    Create, draft, publish, and feature blog posts while managing metadata and article imagery.
                </p>
            </div>

            <a href="{{ route('admin.posts.create') }}" class="button-primary">Create Post</a>
        </div>

        <div class="mt-8 card overflow-hidden">
            @if ($posts->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-[#E5E5E5] text-sm">
                        <thead class="bg-[#F8F8F8]">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Post</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Category</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Status</th>
                                <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Published</th>
                                <th class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-[0.16em] text-muted">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#E5E5E5] bg-white">
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4">
                                        <p class="font-medium text-[#0A0A0A]">{{ $post->title }}</p>
                                        <p class="mt-1 text-xs text-muted">/{{ $post->slug }}</p>
                                    </td>
                                    <td class="px-6 py-4 text-muted">{{ $post->category?->name }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-wrap items-center gap-2">
                                            @if ($post->is_published)
                                                <span class="inline-flex rounded-full border border-[#DCFCE7] bg-[#F0FDF4] px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.08em] text-[#166534]">Published</span>
                                            @else
                                                <span class="inline-flex rounded-full border border-[#E5E7EB] bg-[#F8F8F8] px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.08em] text-muted">Draft</span>
                                            @endif

                                            @if ($post->is_featured)
                                                <span class="inline-flex rounded-full border border-[#FDE68A] bg-[#FEF9C3] px-2.5 py-1 text-xs font-semibold uppercase tracking-[0.08em] text-[#854D0E]">Featured</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-muted">{{ $post->published_at?->format('M d, Y') ?? 'Not published' }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-end gap-3">
                                            <a href="{{ route('admin.posts.edit', $post) }}" class="button-secondary px-4 py-2 text-xs uppercase tracking-[0.12em]">Edit</a>

                                            <form method="POST" action="{{ route('admin.posts.destroy', $post) }}" onsubmit="return confirm('Delete this post? This cannot be undone.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center justify-center rounded-full border border-[#FECACA] bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.12em] text-[#B91C1C] transition hover:bg-[#FEF2F2]">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="border-t border-[#E5E5E5] bg-[#F8F8F8]/70 px-6 py-4">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="p-8 sm:p-10">
                    <p class="text-sm font-semibold text-[#0A0A0A]">No posts yet</p>
                    <p class="mt-2 text-sm text-muted">Create your first blog post and save it as draft or publish immediately.</p>
                    <a href="{{ route('admin.posts.create') }}" class="button-primary mt-6">Create First Post</a>
                </div>
            @endif
        </div>
    </section>
@endsection
