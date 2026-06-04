@extends('layouts.admin')

@section('title', 'Edit Category | Admin | CodeContent.pro')

@section('content')
    <section>
        <div class="eyebrow">
            <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
            Admin / Categories / Edit
        </div>

        <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Edit category</h1>
        <p class="mt-4 max-w-2xl text-sm leading-7 text-muted sm:text-base">
            Updating the category name automatically refreshes its slug while preserving uniqueness.
        </p>

        <div class="mt-8 card p-6 sm:p-8">
            <form method="POST" action="{{ route('admin.categories.update', $category) }}" class="space-y-6">
                @csrf
                @method('PATCH')

                @include('admin.categories.partials.form-fields', [
                    'category' => $category,
                    'submitLabel' => 'Update Category',
                ])
            </form>
        </div>
    </section>
@endsection
