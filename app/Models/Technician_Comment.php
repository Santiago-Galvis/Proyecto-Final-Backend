<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technician_Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'score',
    ];

    public function Technician()
    {
        return $this->belongTo(Technician::class);
    }

    public function Users()
    {
        return $this->belongTo(User::class);
    }
}
