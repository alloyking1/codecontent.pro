@extends('layouts.admin')

@section('title', 'Categories | Admin | CodeContent.pro')

@section('content')
    <section>
        <div class="flex flex-wrap items-end justify-between gap-4">
            <div>
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Admin / Categories
                </div>

                <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Categories</h1>
                <p class="mt-4 max-w-2xl text-sm leading-7 text-muted sm:text-base">
                    Organize blog content with clear category groups for filtering, navigation, and publishing workflows.
                </p>
            </div>

            <a href="{{ route('admin.categories.create') }}" class="button-primary">Create Category</a>
        </div>

        <div class="mt-8 card overflow-hidden">
            @if ($categories->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-[#E5E5E5] text-sm">
                        <thead class="bg-[#F8F8F8]">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Name</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Slug</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Created</th>
                                <th scope="col" class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-[0.16em] text-muted">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#E5E5E5] bg-white">
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="px-6 py-4 font-medium text-[#0A0A0A]">{{ $category->name }}</td>
                                    <td class="px-6 py-4 text-muted">{{ $category->slug }}</td>
                                    <td class="px-6 py-4 text-muted">{{ $category->created_at?->format('M d, Y') }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-end gap-3">
                                            <a href="{{ route('admin.categories.edit', $category) }}" class="button-secondary px-4 py-2 text-xs uppercase tracking-[0.12em]">Edit</a>

                                            <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" onsubmit="return confirm('Delete this category? This cannot be undone.');">
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
                    {{ $categories->links() }}
                </div>
            @else
                <div class="p-8 sm:p-10">
                    <p class="text-sm font-semibold text-[#0A0A0A]">No categories yet</p>
                    <p class="mt-2 text-sm text-muted">Create your first category to start organizing blog posts.</p>
                    <a href="{{ route('admin.categories.create') }}" class="button-primary mt-6">Create First Category</a>
                </div>
            @endif
        </div>
    </section>
@endsection
