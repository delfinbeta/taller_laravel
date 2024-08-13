<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categories\StoreCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;
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
  public function store(StoreCategoryRequest $request)
  {
    // $category_new = new Category();
    // $category_new->name = $request->name;
    // $category_new->save();

    // $category = Category::create(['name' => $request->name]);

    // $data = $request->validate([
    //   'name' => 'required|string|unique:categories',
    //   'description' => 'nullable|string',
    // ]);
    $data = $request->validated();

    $category = Category::create([
      'name' => $data['name'],
      'description' => $data['description'],
    ]);

    return redirect()->route('categories.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Category $category)
  {
    return view('admin.categories.show')->with('category', $category);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Category $category)
  {
    return view('admin.categories.edit')->with('category', $category);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateCategoryRequest $request, Category $category)
  {
    // $category->name = $request->name;
    // $category->description = $request->description;
    // $category->save();

    // $data = $request->validate([
    //   'name' => 'required|string|unique:categories',
    //   'description' => 'nullable|string',
    // ]);
    $data = $request->validated();

    $category->update([
      'name' => $data['name'],
      'description' => $data['description']
    ]);

    return redirect()->route('categories.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Category $category)
  {
    $category->delete();

    // Category::destroy(5);

    return redirect()->route('categories.index');
  }
}
