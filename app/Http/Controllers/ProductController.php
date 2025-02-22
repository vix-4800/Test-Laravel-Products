<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products.index', [
            'products' => Product::with('category')->get(),
        ]);
    }

    public function edit(Product $product): View
    {
        return view('products.edit', [
            'product' => $product,
        ]);
    }
}
