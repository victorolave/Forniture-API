<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'total',
        'customer',
        'estimated_delivery_date',
    ];

    public function products () {
        return $this->belongsToMany(Product::class, 'invoice_products', 'invoice_id', 'product_id');
    }
}
