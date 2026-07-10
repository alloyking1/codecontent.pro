<?php

namespace App\Http\Controllers;

use App\Models\EmailList;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;

class EmailListController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:email_list,email'],
            'job_role' => ['required', 'string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Please check your details and try again.',
                'errors' => $validator->errors(),
            ], 422);
        }

        EmailList::create($validator->validated());

        return response()->json([
            'message' => 'Thanks! We will be in touch soon.',
        ], 201);
    }
}
