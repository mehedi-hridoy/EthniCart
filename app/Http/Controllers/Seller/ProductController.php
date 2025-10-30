<?php
namespace App\Http\Controllers\Seller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use App\Models\ProductImage;

class ProductController extends Controller
{
    // List products for the authenticated seller
    public function index(Request $request)
    {
        $sellerId = Auth::guard('seller')->id();
        $q = trim($request->get('q', ''));
        $query = Product::where('seller_id', $sellerId);
        if ($q !== '') {
            $query->where('name', 'like', "%{$q}%");
        }
        $products = $query->latest()->get();
        return view('seller.products', compact('products', 'q'));
    }
    // Show the upload form
    public function create()
    {
        return view('seller.upload');
    }
    
    // Handle form submission
    public function store(Request $request)
    {
        // Validate ALL inputs including display_page and multiple images
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'nullable|string',
            'images' => 'required|array|min:1|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'display_page' => 'required|string|max:255', 
            'unit' => 'required|string|max:10', 
        ]);

        // Store first image as primary
        $primaryImagePath = $request->file('images')[0]->store('products', 'public');
        
        // Create product
        $product = Product::create([
            'seller_id' => Auth::guard('seller')->id(),
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description,
            'image' => $primaryImagePath,
            'display_page' => $request->display_page,
            'unit' => $request->unit, 
        ]);

        // Store all images in product_images table
        foreach ($request->file('images') as $index => $image) {
            $imagePath = $image->store('products', 'public');
            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => $imagePath,
                'sort_order' => $index,
            ]);
        }
        
        return redirect()->route('seller.product.create')->with('success', 'Product uploaded successfully!');
    }
    
    // Update product stock
    public function updateStock(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'stock' => 'required|integer|min:0',
        ]);

        $product = Product::findOrFail($request->product_id);
        
        // Check if the product belongs to the authenticated seller
        if ($product->seller_id != Auth::guard('seller')->id()) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        $product->stock = $request->stock;
        $product->save();

        return redirect()->route('seller.dashboard')->with('success', 'Product stock updated successfully.');
    }

    // Remove the specified product from storage
    public function destroy(Product $product)
    {
        // Check if the product belongs to the authenticated seller
        if ($product->seller_id != Auth::guard('seller')->id()) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }

        // Delete product primary image if exists
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        // Delete all product images
        foreach ($product->images as $image) {
            Storage::disk('public')->delete($image->image_path);
            $image->delete();
        }

        $product->delete();

        return redirect()->route('seller.dashboard')->with('success', 'Product deleted successfully.');
    }
}