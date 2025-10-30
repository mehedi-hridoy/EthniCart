<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductViewController extends Controller
{
    /**
     * Display a single product detail page.
     */
    public function show(Product $product)
    {
        // Eager load images for better performance
        $product->load('images');
        
        return view('product.show', [
            'product' => $product,
        ]);
    }
}
