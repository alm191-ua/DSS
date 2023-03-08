<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Book extends Model
{
    use HasFactory;

    //Attributes id, title, description, author_id, category_id, image, isbn, created_at, updated_at
    protected $fillable = ['title', 'description', 'author_id', 'category_id', 'image', 'isbn'];

    //Eloquent Relationships

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function bookshelves()
    {
        return $this->belongsToMany(Bookshelf::class);
    }


}
