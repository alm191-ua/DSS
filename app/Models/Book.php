<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Book extends Model
{
    use HasFactory;

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


    //Constructor
    public function __construct()
    {
        $this->title = "";
        $this->description = "";
        $this->author_id = 0;
        $this->category_id = 0;
        $this->image = "";
        $this->isbn = "";
    }

    //Getters
    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAuthorId()
    {
        return $this->author_id;
    }

    public function getCategoryId()
    {
        return $this->category_id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

}
