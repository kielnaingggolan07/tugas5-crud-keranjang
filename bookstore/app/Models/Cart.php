<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'qty',
        'totalharga',
        'product_id'
    ];

    public function products()
    { 
        return $this->belongsTo(Product::class);
    }
}
