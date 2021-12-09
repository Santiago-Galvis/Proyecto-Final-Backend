<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Shop_Comments()
    {
        return $this->hasMany(Shop_Comment::class);
    }

    public function Sellers()
    {
        return $this->belongTo(Seller::class);
    }

    public function Technician_Comments()
    {
        return $this->hasMany(Technician_Comment::class);
    }

    public function Technicians()
    {
        return $this->belongTo(Technician::class);
    }

    public function Forum_Questions()
    {
        return $this->hasMany(Forum_Question::class);
    }

    public function Services()
    {
        return $this->hasMany(Service::class);
    }
}
