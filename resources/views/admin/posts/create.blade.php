@extends('layouts.admin')

@section('title', 'Create Post | Admin | CodeContent.pro')

@section('content')
    <section>
        <div class="eyebrow">
            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
            Admin / Posts / Create
        </div>

        <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Create post</h1>
        <p class="mt-4 max-w-2xl text-sm leading-7 text-muted sm:text-base">
            Build a complete article with publishing controls, feature flags, and SEO metadata.
        </p>

        <div class="mt-8 card p-6 sm:p-8">
            <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data" class="space-y-8">
                @csrf

                @include('admin.posts.partials.form-fields', [
                    'post' => null,
                    'categories' => $categories,
                    'submitLabel' => 'Create Post',
                ])
            </form>
        </div>
    </section>
@endsection
