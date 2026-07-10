<?php

namespace App\Http\Controllers;

use App\Models\AuthorRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthorRequestController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:author_requests,email'],
            'job_role' => ['nullable', 'string', 'max:255'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
            'publications' => ['nullable', 'string', 'max:2000'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Please check your details and try again.',
                'errors' => $validator->errors(),
            ], 422);
        }

        AuthorRequest::create($validator->validated());

        return response()->json([
            'message' => 'Thanks! Your author request has been received.',
        ], 201);
    }
}
