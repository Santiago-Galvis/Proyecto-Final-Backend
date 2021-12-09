<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum_Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
    ];

    public function Forum_Answers()
    {
        return $this->hasMany(Forum_Answer::class);
    }

    public function Users()
    {
        return $this->belongTo(User::class);
    }
}
