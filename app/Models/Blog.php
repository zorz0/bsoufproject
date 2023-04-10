<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "title",
        "description",
        "image"
    ];
    protected $table = "blogs";

    public function users()
    {
        return $this->belongsTo(User::class,"user_id");
    }
}
