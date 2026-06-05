@php
    $titleValue = old('title', $post?->title ?? '');
    $slugValue = old('slug', $post?->slug ?? '');
    $excerptValue = old('excerpt', $post?->excerpt ?? '');
    $bodyValue = old('body', $post?->body ?? '');
    $metaTitleValue = old('meta_title', $post?->meta_title ?? '');
    $metaDescriptionValue = old('meta_description', $post?->meta_description ?? '');
    $metaKeywordsValue = old('meta_keywords', $post?->meta_keywords ?? '');
    $selectedCategory = (int) old('category_id', $post?->category_id ?? 0);
    $selectedAuthor = (int) old('author_id', $post?->author_id ?? 0);
    $publishedAtValue = old('published_at', $post?->published_at?->format('Y-m-d\TH:i'));
    $isFeatured = old('is_featured', $post?->is_featured ?? false);
    $isPublished = old('is_published', $post?->is_published ?? false);
@endphp

<div
    x-data="{
        title: @js($titleValue),
        slug: @js($slugValue),
        slugDirty: @js($slugValue !== ''),
        toSlug(value) {
            return String(value || '')
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-');
        }
    }"
    class="grid gap-8 lg:grid-cols-[1.25fr_0.75fr]"
>
    <div class="space-y-6">
        <div>
            <label for="title" class="block text-sm font-semibold text-[#0A0A0A]">Title</label>
            <input type="text" id="title" name="title" x-model="title" @input="if (!slugDirty) { slug = toSlug(title); }" required maxlength="255" class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]" placeholder="Post title">
            @error('title')
                <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="slug" class="block text-sm font-semibold text-[#0A0A0A]">Slug</label>
            <input type="text" id="slug" name="slug" x-model="slug" @input="slug = toSlug($event.target.value); slugDirty = slug.length > 0;" maxlength="255" class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]" placeholder="leave blank to auto-generate from title">
            <p class="mt-2 text-xs text-muted">Type a title and the slug updates live until you manually edit the slug. Server still enforces uniqueness on save.</p>
            @error('slug')
                <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="excerpt" class="block text-sm font-semibold text-[#0A0A0A]">Excerpt</label>
            <textarea id="excerpt" name="excerpt" rows="4" required class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]" placeholder="Short summary shown in listings.">{{ $excerptValue }}</textarea>
            @error('excerpt')
                <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="body" class="block text-sm font-semibold text-[#0A0A0A]">Body</label>
            <textarea id="body" name="body" rows="14" required class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm leading-7 text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]" placeholder="Write the full article content.">{{ $bodyValue }}</textarea>
            @error('body')
                <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
            @enderror
        </div>

        <div class="card-surface border border-[#E5E5E5] p-5 sm:p-6">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">SEO</p>

            <div class="mt-4 space-y-4">
                <div>
                    <label for="meta_title" class="block text-sm font-semibold text-[#0A0A0A]">Meta Title</label>
                    <input type="text" id="meta_title" name="meta_title" value="{{ $metaTitleValue }}" maxlength="255" class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]">
                    @error('meta_title')
                        <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="meta_description" class="block text-sm font-semibold text-[#0A0A0A]">Meta Description</label>
                    <textarea id="meta_description" name="meta_description" rows="3" class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]">{{ $metaDescriptionValue }}</textarea>
                    @error('meta_description')
                        <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="meta_keywords" class="block text-sm font-semibold text-[#0A0A0A]">Meta Keywords</label>
                    <textarea id="meta_keywords" name="meta_keywords" rows="2" class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]" placeholder="keyword 1, keyword 2, keyword 3">{{ $metaKeywordsValue }}</textarea>
                    @error('meta_keywords')
                        <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </div>

    <div class="space-y-6">
        <div class="card-surface border border-[#E5E5E5] p-5 sm:p-6">
            <label for="category_id" class="block text-sm font-semibold text-[#0A0A0A]">Category</label>
            <select id="category_id" name="category_id" required class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]">
                <option value="">Select category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @selected($selectedCategory === $category->id)>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
            @enderror
        </div>

        <div class="card-surface border border-[#E5E5E5] p-5 sm:p-6">
            <label for="author_id" class="block text-sm font-semibold text-[#0A0A0A]">Author</label>
            <select id="author_id" name="author_id" required class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]">
                <option value="">Select author</option>
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" @selected($selectedAuthor === $author->id)>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
            @error('author_id')
                <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
            @enderror
        </div>

        <div class="card-surface border border-[#E5E5E5] p-5 sm:p-6">
            <label for="featured_image" class="block text-sm font-semibold text-[#0A0A0A]">Featured Image</label>
            <input type="file" id="featured_image" name="featured_image" accept="image/*" class="mt-2 block w-full text-sm text-muted file:mr-4 file:rounded-full file:border file:border-[#E5E5E5] file:bg-white file:px-4 file:py-2 file:text-xs file:font-semibold file:uppercase file:tracking-[0.12em] file:text-[#0A0A0A] hover:file:border-[#0A0A0A]">
            <p class="mt-2 text-xs text-muted">Accepted: JPG, PNG, WEBP up to 5MB.</p>

            @if ($post?->featured_image)
                <div class="mt-4 overflow-hidden rounded-2xl border border-[#E5E5E5]">
                    <img src="{{ asset('storage/'.$post->featured_image) }}" alt="Current featured image" class="h-44 w-full object-cover" loading="lazy">
                </div>
            @endif

            @error('featured_image')
                <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
            @enderror
        </div>

        <div class="card-surface border border-[#E5E5E5] p-5 sm:p-6">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">Publishing</p>

            <div class="mt-4 space-y-4">
                <label class="inline-flex items-center gap-3">
                    <input type="checkbox" name="is_featured" value="1" @checked((bool) $isFeatured) class="h-4 w-4 rounded border-[#D4D4D4] text-[#0A0A0A] focus:ring-[#0A0A0A]">
                    <span class="text-sm text-[#0A0A0A]">Mark as featured post</span>
                </label>

                <label class="inline-flex items-center gap-3">
                    <input type="checkbox" name="is_published" value="1" @checked((bool) $isPublished) class="h-4 w-4 rounded border-[#D4D4D4] text-[#0A0A0A] focus:ring-[#0A0A0A]">
                    <span class="text-sm text-[#0A0A0A]">Publish post</span>
                </label>

                <div>
                    <label for="published_at" class="block text-sm font-semibold text-[#0A0A0A]">Publish Date (optional)</label>
                    <input type="datetime-local" id="published_at" name="published_at" value="{{ $publishedAtValue }}" class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]">
                    @error('published_at')
                        <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex flex-wrap items-center gap-3 pt-2">
    <button type="submit" class="button-primary">{{ $submitLabel }}</button>
    <a href="{{ route('admin.posts.index') }}" class="button-secondary">Cancel</a>
</div>
