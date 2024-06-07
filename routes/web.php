<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\StoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Admin\Category\Edit;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

use function Ramsey\Uuid\v1;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(FrontendController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/collections', 'newStories')->name('new-stories');
    // Route::get('/collections', 'detailStories')->name('detail-stories');
    // Route::get('/collections', 'trendingStories')->name('trending-stories');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index'])->
middleware('auth',)->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(CategoryController::class)->group(function() {
    Route::get('/category', 'index')->name('category');
});


Route::controller(StoryController::class)->group(function() {
    Route::get('/story', 'index')->name('story');
});

// User
Route::controller(UserController::class)->group(function() {
   Route::get('/user', 'index')->name('user'); 
});

require __DIR__.'/auth.php';
