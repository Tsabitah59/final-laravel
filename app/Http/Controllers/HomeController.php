<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Story;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $categories = Category::all();
        $trendingStory  = Story::all();

        if(Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user') {
                return view('dashboard', compact('categories', 'trendingStory'));
            } else if($usertype == 'admin') {
                return view('admin.admindashboard');
            } else {
                return redirect()->back();
            }
        }
    }
}
