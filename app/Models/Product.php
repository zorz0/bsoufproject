<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "description",
        "image",
        "price",
        "discount_price",
        "category_id"
    ];
    protected $table = "products";
}
