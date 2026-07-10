@extends('layouts.admin')

@section('title', 'Author Request Details | Admin | CodeContent.pro')

@section('content')
    <section>
        <div class="flex flex-wrap items-end justify-between gap-4">
            <div>
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Admin / Author Requests / Details
                </div>

                <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Author request details</h1>
                <p class="mt-4 max-w-2xl text-sm leading-7 text-muted sm:text-base">
                    Review the full submission details, including the longer introduction and any publication links.
                </p>
            </div>

            <a href="{{ route('admin.author-requests.index') }}" class="button-secondary px-5 py-3 text-sm">Back to list</a>
        </div>

        <div class="mt-8 grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
            <div class="card p-6 sm:p-8">
                <div class="space-y-6">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">Name</p>
                        <p class="mt-2 text-lg font-semibold text-[#0A0A0A]">{{ $authorRequest->name }}</p>
                    </div>

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">Email</p>
                        <p class="mt-2 text-base text-[#0A0A0A]">{{ $authorRequest->email }}</p>
                    </div>

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">Job role</p>
                        <p class="mt-2 text-base text-[#0A0A0A]">{{ $authorRequest->job_role ?? '—' }}</p>
                    </div>

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">Website</p>
                        <p class="mt-2 text-base text-[#0A0A0A]">{{ $authorRequest->website_url ?? '—' }}</p>
                    </div>

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">Tell us about yourself</p>
                        <p class="mt-2 whitespace-pre-line text-base leading-7 text-[#0A0A0A]">{{ $authorRequest->message }}</p>
                    </div>

                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">Previous publications</p>
                        <p class="mt-2 whitespace-pre-line text-base leading-7 text-[#0A0A0A]">{{ $authorRequest->publications ?? '—' }}</p>
                    </div>
                </div>
            </div>

            <div class="card p-6 sm:p-8">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-muted">Submitted</p>
                <p class="mt-2 text-base text-[#0A0A0A]">{{ $authorRequest->created_at?->format('M d, Y \a\t H:i') }}</p>

                <div class="mt-8">
                    <form method="POST" action="{{ route('admin.author-requests.destroy', $authorRequest) }}" onsubmit="return confirm('Remove this author request?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="inline-flex items-center justify-center rounded-full border border-[#FECACA] bg-white px-5 py-3 text-sm font-semibold uppercase tracking-[0.12em] text-[#B91C1C] transition hover:bg-[#FEF2F2]">Delete request</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
