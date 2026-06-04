@php
    $nameValue = old('name', $category?->name ?? '');
    $descriptionValue = old('description', $category?->description ?? '');
@endphp

<div>
    <label for="name" class="block text-sm font-semibold text-[#0A0A0A]">Name</label>
    <input
        type="text"
        id="name"
        name="name"
        value="{{ $nameValue }}"
        required
        maxlength="255"
        class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]"
        placeholder="e.g. Developer Education"
    >
    @error('name')
        <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="description" class="block text-sm font-semibold text-[#0A0A0A]">Description (optional)</label>
    <textarea
        id="description"
        name="description"
        rows="5"
        class="mt-2 w-full rounded-2xl border border-[#E5E5E5] bg-white px-4 py-3 text-sm text-[#0A0A0A] shadow-sm focus:border-[#0A0A0A] focus:ring-[#0A0A0A]"
        placeholder="Short internal context for this category."
    >{{ $descriptionValue }}</textarea>
    @error('description')
        <p class="mt-2 text-sm text-[#B91C1C]">{{ $message }}</p>
    @enderror
</div>

<div class="flex flex-wrap items-center gap-3 pt-2">
    <button type="submit" class="button-primary">{{ $submitLabel }}</button>
    <a href="{{ route('admin.categories.index') }}" class="button-secondary">Cancel</a>
</div>
