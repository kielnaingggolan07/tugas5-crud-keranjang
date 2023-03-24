<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use app\Models\Cart;

class Product extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'judul',
        'pengarang',
        'penerbit',
        'tahunterbit',
        'harga', 
        'category_id',
    ];

    public function category()
    { 
        return $this->belongsTo(Category::class);
    }

    public function carts() {
        return $this->hasMany(Cart::class);
    }    
}
