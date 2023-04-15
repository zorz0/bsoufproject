<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        "status",
        "payment_method",
        "payment_status",
        "payment_id",
        "total_price",
        "address",
        "phone",
        "email",
        "name",
        "surname",
        "country",
        "city",
        "postal_code",
        "shipping_price"
    ];
    protected $table = "orders";

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
