<?php

namespace App\Http\Controllers\User;

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LessonViewController extends Controller
{
    public function index()
    {
        $lessons = Auth::user()->lessons;
        return view('user.lessons', compact('lessons'));
    }
}
