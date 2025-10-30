<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\EthniOrder;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $sellerId = Auth::guard('seller')->id();
        $status = $request->query('status');
        $query = EthniOrder::where('seller_id', $sellerId)->latest();
        if ($status) {
            $query->where('status', $status);
        }
        $orders = $query->paginate(15);

        $stats = [
            'total' => (clone $query)->count(),
            'pending' => EthniOrder::where('seller_id', $sellerId)->where('status', 'pending')->count(),
            'processing' => EthniOrder::where('seller_id', $sellerId)->where('status', 'processing')->count(),
            'delivered' => EthniOrder::where('seller_id', $sellerId)->where('status', 'delivered')->count(),
            'cancelled' => EthniOrder::where('seller_id', $sellerId)->where('status', 'cancelled')->count(),
        ];

        return view('seller.orders', compact('orders', 'stats', 'status'));
    }

    public function updateStatus(Request $request, EthniOrder $order)
    {
        $request->validate([
            'status' => 'required|in:pending,processing,delivered,cancelled'
        ]);
        // ensure seller owns this order
        if ($order->seller_id !== Auth::guard('seller')->id()) {
            return redirect()->back()->with('error', 'Unauthorized action.');
        }
        $order->status = $request->status;
        $order->save();
        return redirect()->back()->with('success', 'Order status updated.');
    }
}
