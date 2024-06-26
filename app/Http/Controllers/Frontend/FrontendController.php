<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Story;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() {
        $trendingStory = Story::where('trending', '1')->latest()->take(10)->get();
        $categories = Category::where('status', '0')->get();
        return view('dashboard', compact('trendingStory', 'categories'));
    }

    public function newStories() {
        $newStories = Story::latest()->take(16)->get();
        return view('frontend.collections.new-story', compact('newStories'));
    }

    // public function detailStories() {
    //     $detailStories = Story::latest()->take(16)->get();
    //     return view('frontend.collections.detail-story', compact('detailStories'));
    // }

    // public function trendingStories() {
    //     $trendingStories = Story::latest()->take(16)->get();
    //     return view('frontend.collections.trending-story', compact('trendingStories'));
    // }
    
}
