@extends('layouts.admin')

@section('title', 'Edit Post | Admin | CodeContent.pro')

@section('content')
    <section>
        <div class="eyebrow">
            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
            Admin / Posts / Edit
        </div>

        <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Edit post</h1>
        <p class="mt-4 max-w-2xl text-sm leading-7 text-muted sm:text-base">
            Update content, publication state, featured visibility, image, and metadata.
        </p>

        <div class="mt-8 card p-6 sm:p-8">
            <form method="POST" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data" class="space-y-8">
                @csrf
                @method('PATCH')

                @include('admin.posts.partials.form-fields', [
                    'post' => $post,
                    'categories' => $categories,
                    'authors' => $authors,
                    'submitLabel' => 'Update Post',
                ])
            </form>
        </div>
    </section>
@endsection
