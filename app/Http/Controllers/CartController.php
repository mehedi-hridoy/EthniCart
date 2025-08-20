<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Get user-specific cart key
    private function getCartKey()
    {
        return 'cart_' . (Auth::check() ? Auth::id() : Session::getId());
    }
    
    public function index()
    {
        $cart = session()->get($this->getCartKey(), []);
        return view('cart.index', compact('cart'));
    }
    public function add(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $cart = session()->get($this->getCartKey(), []);
    
    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->name,
            "price" => $product->price,
            "image" => $product->image,
            "quantity" => 1,
            "seller_id" => $product->seller_id, // ✅ add seller_id
        ];
    }
    
    session()->put($this->getCartKey(), $cart);
    
    if ($request->expectsJson()) {
        return response()->json(['success' => true]);
    }
    
    return redirect()->back()->with('success', 'Added to cart!');
}

    
    public function update(Request $request, $id)
    {
        $cart = session()->get($this->getCartKey(), []);
        
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put($this->getCartKey(), $cart);
        }
        
        return redirect()->back();
    }
    
    public function remove($id)
    {
        $cart = session()->get($this->getCartKey(), []);
        
        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put($this->getCartKey(), $cart);
        }
        
        return redirect()->back();
    }
    
    
   // Transfer guest cart to user cart (call this after login)
public function transferGuestCartToUser()
{
    if (!Auth::check()) {
        return;
    }

    $guestCartKey = 'cart_' . Session::getId();
    $userCartKey  = 'cart_' . Auth::id();

    $guestCart = session()->get($guestCartKey, []);
    $userCart  = session()->get($userCartKey, []);

    if (!empty($guestCart)) {
        foreach ($guestCart as $id => $item) {
            // ✅ Ensure seller_id is always present
            if (!isset($item['seller_id'])) {
                $product = Product::find($id);
                $item['seller_id'] = $product ? $product->seller_id : null;
            }

            if (isset($userCart[$id])) {
                $userCart[$id]['quantity'] += $item['quantity'];
            } else {
                $userCart[$id] = $item;
            }
        }

        session()->put($userCartKey, $userCart);
        session()->forget($guestCartKey);
    }
}

}