@extends('layouts.admin')

@section('title', 'Author Requests | Admin | CodeContent.pro')

@section('content')
    <section>
        <div class="flex flex-wrap items-end justify-between gap-4">
            <div>
                <div class="eyebrow">
                    <span class="h-2 w-2 rounded-full bg-[#FACC15]"></span>
                    Admin / Author Requests
                </div>

                <h1 class="mt-4 text-3xl font-semibold tracking-tight sm:text-4xl">Author requests</h1>
                <p class="mt-4 max-w-2xl text-sm leading-7 text-muted sm:text-base">
                    Review people who want to contribute and manage their requests from one place.
                </p>
            </div>
        </div>

        <div class="mt-8 card overflow-hidden">
            @if ($requests->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-[#E5E5E5] text-sm">
                        <thead class="bg-[#F8F8F8]">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Name</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Email</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Role</th>
                                <th scope="col" class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-[0.16em] text-muted">Submitted</th>
                                <th scope="col" class="px-6 py-4 text-right text-xs font-semibold uppercase tracking-[0.16em] text-muted">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-[#E5E5E5] bg-white">
                            @foreach ($requests as $request)
                                <tr>
                                    <td class="px-6 py-4 font-medium text-[#0A0A0A]">{{ $request->name }}</td>
                                    <td class="px-6 py-4 text-muted">{{ $request->email }}</td>
                                    <td class="px-6 py-4 text-muted">{{ $request->job_role ?? '—' }}</td>
                                    <td class="px-6 py-4 text-muted">{{ $request->created_at?->format('M d, Y') }}</td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center justify-end gap-3">
                                            <a href="{{ route('admin.author-requests.show', $request) }}" class="inline-flex items-center justify-center rounded-full border border-[#E5E5E5] bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.12em] text-[#0A0A0A] transition hover:bg-[#F8F8F8]">More details</a>
                                            <form method="POST" action="{{ route('admin.author-requests.destroy', $request) }}" onsubmit="return confirm('Remove this author request?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center justify-center rounded-full border border-[#FECACA] bg-white px-4 py-2 text-xs font-semibold uppercase tracking-[0.12em] text-[#B91C1C] transition hover:bg-[#FEF2F2]">Remove</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="border-t border-[#E5E5E5] bg-[#F8F8F8]/70 px-6 py-4">
                    {{ $requests->links() }}
                </div>
            @else
                <div class="p-8 sm:p-10">
                    <p class="text-sm font-semibold text-[#0A0A0A]">No author requests yet</p>
                    <p class="mt-2 text-sm text-muted">Once contributors submit the form, their requests will appear here.</p>
                </div>
            @endif
        </div>
    </section>
@endsection
