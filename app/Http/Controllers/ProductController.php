<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'name' => 'LISABO',
                'description' => 'Coffee table, ash veneer, 70x70 cm',
                'price' => 'Rp1.999.000',
                'image' => asset('images/product_images/table.jpg')
            ],
            [
                'name' => 'SANDARED',
                'description' => 'Pouffe, grey, 56 cm',
                'price' => 'Rp999.000',
                'image' => asset('images/product_images/pouffe.jpg')
            ],
            [
                'name' => 'EKTORP',
                'description' => 'Sofa, white, 3-seat',
                'price' => 'Rp5.499.000',
                'image' => asset('images/product_images/sofa.jpg')
            ],
            [
                'name' => 'MALM',
                'description' => 'Bed frame, white stained oak veneer, Queen size',
                'price' => 'Rp3.299.000',
                'image' => asset('images/product_images/bed.jpg')
            ],
            // 🔁 Add more products as needed
        ];

        return view('home', compact('products'));
    }
}
