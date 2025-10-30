<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Seller;

class SettingsController extends Controller
{
    public function edit()
    {
        $seller = Auth::guard('seller')->user();
        return view('seller.settings', compact('seller'));
    }

    public function update(Request $request)
    {
        $seller = Auth::guard('seller')->user();
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:sellers,email,' . $seller->id,
            'phone' => 'nullable|string|max:30',
            'seller_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $seller->name = $request->name;
        $seller->email = $request->email;
        $seller->phone = $request->phone;

        if ($request->hasFile('seller_image')) {
            if ($seller->seller_image) {
                Storage::disk('public')->delete($seller->seller_image);
            }
            $path = $request->file('seller_image')->store('sellers', 'public');
            $seller->seller_image = $path;
        }

        // Do NOT allow changing nid or other sensitive docs
        $seller->save();

        return redirect()->route('seller.settings.edit')->with('success', 'Profile updated successfully.');
    }
}
