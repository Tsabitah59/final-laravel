<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $trendingStory = Story::where('trending', '1')->latest()->take(10)->get();

        return view('dashboard', compact('trendingStory'));
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 5c8209f58507bc2abab36124b4adb687bcc45aaa
