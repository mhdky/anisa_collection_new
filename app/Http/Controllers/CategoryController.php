<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category) {
        return view('product.index', [
            'title' => $category->name . ' - Anisa Collection',
            'products' => $category->product()->paginate(12)->withQueryString()
        ]);
    }
}
