<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suggestion extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','phone','message','user_id'];

    // Realcion Sugerencia pertenece a Usuario (1 a muchos )
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }

    //Constructor

    public function __construct(){
        $this->id = 0;
        $this->name = "";
        $this->email = "";
        $this->phone = "";
        $this->message = "";
        $this->user_id = null;
    } 
}





