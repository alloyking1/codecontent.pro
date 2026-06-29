<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $featuredPost = \App\Models\Post::where('is_featured', true)->latest()->first();
        return view('home', ['featuredPost' => $featuredPost]);
    }

    public function services()
    {
        return view('services');
    }

    public function technicalWriting()
    {
        return view('technical-writing');
    }

    public function developerEducation()
    {
        return view('developer-education');
    }
}
