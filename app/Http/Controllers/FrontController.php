<?php

namespace App\Http\Controllers;

use App\Models\Course;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function details(Course $course)
    {
        // dd($course);
        return view('front.details');
    }
}
