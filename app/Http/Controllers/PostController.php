<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $posts = Post::all();

    return view('admin.posts.index')->with('posts', $posts);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $categories = Category::all();

    return view('admin.posts.create')->with('categories', $categories);
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $post = Post::create([
      'title' => $request->title,
      'content' => $request->content,
      'points' => $request->points,
      'category_id' => $request->category_id
    ]);

    return redirect()->route('posts.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Post $post)
  {
    return view('admin.posts.show')->with('post', $post);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Post $post)
  {
    $categories = Category::all();

    return view('admin.posts.edit')->with('post', $post)->with('categories', $categories);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Post $post)
  {
    $post->update([
      'title' => $request->title,
      'content' => $request->content,
      'points' => $request->points,
      'category_id' => $request->category_id
    ]);

    return redirect()->route('posts.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Post $post)
  {
    $post->delete();

    return redirect()->route('posts.index');
  }
}
