<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    
    protected $fillable = [
        'id',
        'is_admin',
        'username',
        'password',
        'email',
    ];

    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function suggestions()
    {
        return $this->hasMany(Suggestion::class);
    }

    public function bookshelves()
    {
        return $this->hasMany(Bookshelf::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean',
    ];

    /**
     * Always encrypt the password when it is updated.
     *
     * @param $value
     * @return string
     */
    public function setPasswordAttribute($value) 
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
