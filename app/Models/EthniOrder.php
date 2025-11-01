<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EthniOrder extends Model
{

    use HasFactory;
       protected $table = 'ethni_orders'; // make sure this matches your table name

    protected $fillable = [
        'user_id',
        'seller_id',
        'product_id',
        'product_name',
        'price',
        'quantity',
        'subtotal',
        'payment_method',
        'status',
    ];

    // Relations
    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
