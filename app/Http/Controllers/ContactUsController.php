<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'company' => ['nullable', 'string', 'max:255'],
            'service' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json([
                    'message' => 'Please check your details and try again.',
                    'errors' => $validator->errors(),
                ], 422);
            }

            return back()->withErrors($validator)->withInput();
        }

        ContactUs::create($validator->validated());

        if ($request->expectsJson()) {
            return response()->json([
                'message' => 'Thanks! Your message has been received. We will be in touch soon.',
            ], 201);
        }

        return redirect()->route('contact')->with('success', 'Thanks! Your message has been received. We will be in touch soon.');
    }
}
