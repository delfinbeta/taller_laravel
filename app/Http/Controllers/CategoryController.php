<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
  public function index(): View
  {
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
  }
}
