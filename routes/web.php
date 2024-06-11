<?php

use App\Http\Controllers\DashboardController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', [
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "active" => "about",
        "name" => "Nijigasaki",
        "email" => "nijigasaki@gmail.com",
        "image" => "niji.jpeg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        "active" => 'categories',
        'posts' => $category->posts->load('category','user')
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'active' => "Author Post",
        'posts' => $author->posts->load('category', 'user')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');