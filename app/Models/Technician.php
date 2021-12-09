<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'rating',
        'facebook',
        'twitter',
        'instagram',
    ];

    public function Services()
    {
        return $this->hasMany(Service::class);
    }

    public function Technician_Comments()
    {
        return $this->hasMany(Technician_Comment::class);
    }

    public function Users()
    {
        return $this->belongTo(User::class);
    }
}
