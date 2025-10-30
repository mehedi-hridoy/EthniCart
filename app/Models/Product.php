<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller_id',
        'name',
        'description',
        'price',
        'stock',
        'image',
        'display_page', 
        'parent_category',
        'show_on_homepage',
        'unit',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class)->orderBy('sort_order');
    }
}
