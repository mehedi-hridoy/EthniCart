<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SellerAuthController extends Controller
{
    public function showRegisterForm()
    {
        if (Auth::guard('seller')->check()) {
            return redirect()->route('seller.dashboard');
        }
        return view('seller.register');
    }

   public function register(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:sellers',
        'password' => 'required|min:8|confirmed',
        'phone' => 'required|string',
        'seller_image' => 'nullable|image|max:2048',
        'nid' => 'required|string',
        'nid_file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:4096',
        'production_area' => 'required|string',
        'business_type' => 'required|string',
        'product_description' => 'required|string',
        'proof_file' => 'nullable|image|max:4096',
        'bank_account' => 'required|string',
        'bank_name' => 'required|string',
        'mobile_wallet' => 'nullable|string',
    ]);

    $data = $request->only([
        'name', 'email', 'phone', 'nid', 'production_area', 
        'business_type', 'product_description', 'bank_account', 
        'bank_name', 'mobile_wallet'
    ]);

    // handle file uploads
    if ($request->hasFile('seller_image')) {
        $data['seller_image'] = $request->file('seller_image')->store('sellers', 'public');
    }
    if ($request->hasFile('nid_file')) {
        $data['nid_file'] = $request->file('nid_file')->store('sellers', 'public');
    }
    if ($request->hasFile('proof_file')) {
        $data['proof_file'] = $request->file('proof_file')->store('sellers', 'public');
    }

    $data['password'] = Hash::make($request->password);
    $data['is_approved'] = false;

    Seller::create($data);

    return redirect()->route('seller.login')->with('success', 'Registration successful! Please log in.');
}


    public function showLoginForm()
    {
        if (Auth::guard('seller')->check()) {
            return redirect()->route('seller.dashboard');
        }
        return view('seller.login');
    }




 public function login(Request $request)
{
    $validated = $request->validate([
        'email' => ['required','email'],
        'password' => ['required'],
    ]);

    if (Auth::guard('seller')->attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
        $seller = Auth::guard('seller')->user();

        if (!$seller->is_approved) {
            Auth::guard('seller')->logout();
            return back()->with('error', 'Your account is pending approval by the admin.')
                         ->withInput($request->except('password'));
        }

        $request->session()->regenerate();
        return redirect()->route('seller.dashboard')->with('success','Welcome back!');
    }

    return back()->with('error', 'Invalid login credentials.')
                ->withInput($request->except('password'));
}


    public function logout()
    {
        Auth::guard('seller')->logout();
        return redirect()->route('seller.login');
    }
}
