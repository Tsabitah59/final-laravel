<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('admin.category.index');
    }

    public function create() {
        // dd($id);
        // $category = Category::findOrFail($id);
        return view('livewire.admin.category.create');
    }

    
}
