<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'stock',
        'commodity_id',
        'product_type',
        'price'
    ];

    public function commodity ()
    {
        return $this->belongsTo(Commodity::class);
    }
}
