<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        // 'name', 'detail', 'image'
        'name', 'category_id', 'type', 'image', 'brand', 'price', 'description', 'status', 'feature'
    ];
}