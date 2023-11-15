<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::all();
    //     return view('category.index', ['categories' => $categories]);
    // }

    // public function create()
    // {
    //     return view('category.create');
    // }


    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //     ]);

    //     $category = Category::create($request->all());

    //     return redirect()->route('category.index')->with('success', 'Category created successfully.');
    // }
}
