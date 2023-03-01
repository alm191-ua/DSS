<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Category extends Model
{
    use HasFactory;

    //Attributes id, tag, created_at, updated_at
    protected $fillable = ['tag'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
