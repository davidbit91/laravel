<?php

namespace App\Http\Controllers;

Use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Show all the categories
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllCategories()
    {
        $categories = Category::all();

        return response()->json($categories,200);
    }
}
