<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // If no query provided, redirect back
        if (empty($query)) {
            return redirect()->back()->with('error', 'Please enter a search term');
        }
        
        // Search products by name, description, or display_page (tag)
        $products = Product::where(function($q) use ($query) {
            $q->where('name', 'LIKE', "%{$query}%")
              ->orWhere('description', 'LIKE', "%{$query}%")
              ->orWhere('display_page', 'LIKE', "%{$query}%");
        })
        ->where('stock', '>', 0) // Only show products in stock
        ->orderBy('created_at', 'desc')
        ->paginate(12);
        
        return view('search', [
            'products' => $products,
            'query' => $query,
            'resultCount' => $products->total()
        ]);
    }
    
    public function suggestions(Request $request)
    {
        $query = $request->input('query');
        
        if (empty($query)) {
            return response()->json(['products' => []]);
        }
        
        // Get top 8 matching products for autocomplete
        $products = Product::where(function($q) use ($query) {
            $q->where('name', 'LIKE', "%{$query}%")
              ->orWhere('description', 'LIKE', "%{$query}%")
              ->orWhere('display_page', 'LIKE', "%{$query}%");
        })
        ->select('id', 'name', 'description', 'price', 'image', 'stock')
        ->orderByRaw("CASE 
            WHEN name LIKE ? THEN 1
            WHEN name LIKE ? THEN 2
            WHEN description LIKE ? THEN 3
            ELSE 4
        END", ["{$query}%", "%{$query}%", "%{$query}%"])
        ->limit(8)
        ->get();
        
        return response()->json(['products' => $products]);
    }
}
