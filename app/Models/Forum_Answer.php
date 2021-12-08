<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum_Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer',
    ];

    public function Forum_Questions()
    {
        return $this->belongTo(Forum_Question::class);
    }
}
