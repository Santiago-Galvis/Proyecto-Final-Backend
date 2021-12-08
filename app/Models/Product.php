<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'brand',
        'image',
    ];

    public function Categories()
    {
        return $this->belongTo(Category::class);
    }

    public function Sellers()
    {
        return $this->hasMany(Seller::class);
    }
}
