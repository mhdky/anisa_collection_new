<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('product.index', [
            'title' => 'Product - Anisa Collection',
            'products' => Product::latest()->searching()->paginate(12)->withQueryString()
        ]);
    }
}
