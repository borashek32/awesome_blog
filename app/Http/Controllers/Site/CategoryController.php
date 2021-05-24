<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where([
            'status' => 'active'
        ])
            ->orderBy('id', 'DESC')
            ->paginate(9);

        $categories->withPath('/posts');

        return view('categories.categories', compact('categories'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();

        return view('categories.one-category', compact('category'));
    }
}
