<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_id",
        "size",
        "quantity",
        "price_two",
        "discount",
        "status"
    ];
    protected $table = "product_size";
}
