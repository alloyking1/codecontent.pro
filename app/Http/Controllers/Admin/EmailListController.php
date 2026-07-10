<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailList;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EmailListController extends Controller
{
    public function index(): View
    {
        $subscribers = EmailList::query()
            ->latest()
            ->paginate(12);

        return view('admin.email-list.index', compact('subscribers'));
    }

    public function destroy(EmailList $emailList): RedirectResponse
    {
        $emailList->delete();

        return redirect()
            ->route('admin.email-list.index')
            ->with('success', 'Subscriber removed successfully.');
    }
}
