<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Seller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
{
    $users = User::all();
    $sellers = Seller::all();
    $products = Product::all();

    $pendingSellers = Seller::where('is_approved', false)->get();
    $approvedSellers = Seller::where('is_approved', true)->get();

    return view('admin.dashboard', compact('users', 'sellers', 'products', 'pendingSellers', 'approvedSellers'));
}


    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect()->route('admin.dashboard')->with('success', 'User deleted successfully.');
    }

    public function deleteSeller($id)
    {
        Seller::destroy($id);
        return redirect()->route('admin.dashboard')->with('success', 'Seller deleted successfully.');
    }


    // block unblock 
    public function toggleUserBlock($id)
{
    $user = User::findOrFail($id);
    $user->is_blocked = !$user->is_blocked;
    $user->save();

    return redirect()->route('admin.dashboard')->with('success', 'User block status changed.');
}


public function toggleSellerBlock($id)
{
    $seller = Seller::findOrFail($id);
    $seller->is_blocked = !$seller->is_blocked;
    $seller->save();

    return redirect()->route('admin.dashboard')->with('success', 'Seller block status changed.');
}

public function showSellerProfile($id)
{
    $seller = Seller::findOrFail($id);
    $products = $seller->products()->latest()->take(50)->get();
    $totalProducts = $seller->products()->count();

    return view('admin.seller_profile', compact('seller', 'products', 'totalProducts'));
}


public function approveSeller($id)
{
    $seller = Seller::findOrFail($id);
    $seller->is_approved = true;
    $seller->save();

    return redirect()->route('admin.dashboard')->with('success', 'Seller approved successfully.');
}

public function disapproveSeller($id)
{
    $seller = Seller::findOrFail($id);
    $seller->is_approved = false;
    $seller->save();

    return redirect()->route('admin.dashboard')->with('success', 'Seller disapproved successfully.');
}



}
