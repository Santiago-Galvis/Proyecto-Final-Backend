<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop_Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'score',
    ];

    public function Sellers()
    {
        return $this->belongTo(Seller::class);
    }

    public function Users()
    {
        return $this->belongTo(User::class);
    }

    
}
