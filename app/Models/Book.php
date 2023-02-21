<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Book extends Model
{
    use HasFactory;

    //Atributes
    protected $fillable = [
        'title',
        'description',
        'author_id',
        'category_id',
        'image',
        'isbn',
    ];

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
    public function __construct($title, $description, $author_id, $category_id, $image, $isbn)
    {
        $this->title = $title;
        $this->description = $description;
        $this->author_id = $author_id;
        $this->category_id = $category_id;
        $this->image = $image; //Añadir a la base de datos
        $this->isbn = $isbn;
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
