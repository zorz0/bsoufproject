<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        "product_id",
        "user_id",
        "size",
        "quantity",
        "price_two",
        "discount",
        "status",
        "price",
        "totalprice"
    ];
    protected $table = "card";


    public function product()
    {
        return $this->belongsTo(Product::class,"product_id");
    }

    public function user()
    {
     return $this->belongsTo(User::class,$foriegnkey='user_id');
    }

}
