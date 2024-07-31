<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $categories = Category::all();

    return view('admin.categories.index')->with('categories', $categories);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('admin.categories.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    // $category_new = new Category();
    // $category_new->name = $request->name;
    // $category_new->save();

    // $category = Category::create(['name' => $request->name]);

    $category = Category::create([
      'name' => $request->name,
      'description' => $request->description,
    ]);

    return redirect()->route('categories.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Category $category)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Category $category)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Category $category)
  {
    // $category7 = Category::findOrFail(7);
    // $category7->name = 'Películas';
    // $category7->save();
    // $category7->update(['name' => 'Películas Editado']);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Category $category)
  {
    // $category6 = Category::findOrFail(6);
    // $category6->delete();

    // Category::destroy(5);
  }
}
