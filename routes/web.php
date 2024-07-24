<?php

use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    $users = User::all();

    return view('users')->with('users', $users);
})->name('users');

Route::get('/categories', function () {
    $categories = Category::all();

    return view('categories')->with('categories', $categories);
})->name('categories');

Route::get('/posts', function () {
    $posts = Post::all();
    // $posts = Post::where('points', 5)->get();
    // SELECT * FROM posts WHERE points=5;

    $destacados = Post::where('points', 5)->count();
    $total = Post::count();

    $max = Post::max('points');
    $min = Post::min('points');
    $avg = Post::avg('points');
    $sum = Post::sum('points');

    return view('posts')->with('posts', $posts)
                        ->with('destacados', $destacados)
                        ->with('total', $total)
                        ->with('max', $max)
                        ->with('min', $min)
                        ->with('avg', $avg)
                        ->with('sum', $sum);
})->name('posts');

Route::get('/posts/{id}/show', function (int $id) {
    $post = Post::findOrFail($id);
    // $post = Post::where('id', $id)->first();
    // $post = Post::where('points', 5)->first();
    // $post = Post::firstWhere('points', 5);

    return view('post_show')->with('post', $post);
})->name('posts.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
