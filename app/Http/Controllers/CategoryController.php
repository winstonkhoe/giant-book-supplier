<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategoryPage(Request $request, Category $category) {
        $categories = Category::all();
        return view('category', compact('category', 'categories'));
    }
}
