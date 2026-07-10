<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuthorRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthorRequestController extends Controller
{
    public function index(): View
    {
        $requests = AuthorRequest::query()
            ->latest()
            ->paginate(12);

        return view('admin.author-requests.index', compact('requests'));
    }

    public function show(AuthorRequest $authorRequest): View
    {
        return view('admin.author-requests.show', compact('authorRequest'));
    }

    public function destroy(AuthorRequest $authorRequest): RedirectResponse
    {
        $authorRequest->delete();

        return redirect()
            ->route('admin.author-requests.index')
            ->with('success', 'Author request removed successfully.');
    }
}
