<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

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
    // $category_new = new Category();
    // $category_new->name = 'Cine';
    // $category_new->save();

    // $category1 = Category::create(['name' => 'Cine2']);

    // $category2 = Category::create([
    //     'name' => 'Cocina',
    //     'description' => 'Recetas, restaurantes y mucho más.',
    // ]);

    // $category7 = Category::findOrFail(7);
    // $category7->name = 'Películas';
    // $category7->save();
    // $category7->update(['name' => 'Películas Editado']);

    // $category6 = Category::findOrFail(6);
    // $category6->delete();

    // Category::destroy(5);

    $categories = Category::all();

    return view('categories')->with('categories', $categories);
})->name('categories');

Route::get('/posts', function () {
    // Post::where('points', 5)->update(['title' => 'DESTACADO']);

    // Post::where('points', 5)->delete();
    // $posts  = Post::onlyTrashed()->get();
    // $posts[0]->restore();

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
