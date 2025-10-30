<?php

namespace App\Helpers;

use App\Models\Product;

class ProductHelper
{
    /**
     * Get products for a specific page/category
     * Includes products tagged for homepage and parent categories
     * 
     * @param string $page The page/category identifier
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getProductsForPage($page)
    {
        // For homepage, get all products with show_on_homepage = true
        if ($page === 'home' || $page === 'homepage') {
            return Product::where('show_on_homepage', true)->get();
        }
        
        // For other pages, get:
        // 1. Products directly tagged for this page
        // 2. Products where this page is the parent category (subcategory products)
        return Product::where(function($query) use ($page) {
            $query->where('display_page', $page)
                  ->orWhere('parent_category', $page);
        })->get();
    }
    
    /**
     * Category mapping for subcategories
     * @return array
     */
    public static function getCategoryMap()
    {
        return [
            'A1_foods_fruits' => 'foods',
            'A2_foods_sweets' => 'foods',
            'A3_foods_snacks' => 'foods',
            'A4_foods_dairy' => 'foods',
            'C1_Fish&Meat_fish' => 'fish&meat',
            'C2_Fish&Meat_Meat' => 'fish&meat',
            'F1_Beauty&Care_SkinCare' => 'beauty&care',
            'F2_Beauty&Care_HairCare' => 'beauty&care',
            'I1_Clothings_WomenWear' => 'Clothing&Apparels',
            'I2_Clothings_MenWear' => 'Clothing&Apparels',
        ];
    }
}
