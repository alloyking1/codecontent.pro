@extends('layouts.admin')

@section('title', 'Create Category | Admin | CodeContent.pro')

@section('content')
    <section>
        <div class="eyebrow">
            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
            Admin / Categories / Create
        </div>

        <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Create category</h1>
        <p class="mt-4 max-w-2xl text-sm leading-7 text-muted sm:text-base">
            Category slugs are generated automatically from the name and kept unique.
        </p>

        <div class="mt-8 card p-6 sm:p-8">
            <form method="POST" action="{{ route('admin.categories.store') }}" class="space-y-6">
                @csrf

                @include('admin.categories.partials.form-fields', [
                    'category' => null,
                    'submitLabel' => 'Create Category',
                ])
            </form>
        </div>
    </section>
@endsection
