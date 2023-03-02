<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name','info'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function __construct(){
        $this->id = 0;
        $this->name = "";
        $this->info= "";

    } 
}
