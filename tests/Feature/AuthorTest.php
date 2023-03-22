<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


use Tests\TestCase;
use App\Models\Author;
use App\Models\Book;
use App\Models\Category;

class AuthorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    // Funcion Basica de prueba de la Clase Autor 
    public function test_example_author()
    {
        $texto = "J​eff Kinney, es el creador de la serie El diario de Greg. También creó la página web Poptropica.​";

        $autor = new Author();
        $autor->name = "Jeff Kinney​​" ;
        $autor->info= $texto ;

        // Comparaciones
        $this->assertEquals($texto,$autor->info);
        $this->assertEquals("Jeff Kinney​​",$autor->name);


        
    }

    // Funcion de comprobacion de guardado y eliminacion en la base de datos 

    public function test_save_delete_author(){
        $texto = "J​eff Kinney, es el creador de la serie El diario de Greg. También creó la página web Poptropica.​";

        $autor = new Author();
        $autor->name = "Jeff Kinney​​" ;
        $autor->info= $texto ;
        $autor->save();

        // Comprobacion de que se encuentra en la base de datos 
        $this->assertDatabaseHas('authors', [
            'info' => $texto,
        ]);

        $this->assertDatabaseHas('authors', [
            'name' => "Jeff Kinney​​",
        ]);


        $autor->delete();

        // Comprobacion de que se ha eliminado correctamente 
        $this->assertDatabaseMissing('authors', [
            'info' => $texto,
        ]);

        $this->assertDatabaseMissing('authors', [
            'name' => "Jeff Kinney",
        ]);
    }

    // Funcion de comprobacion de relacion 1 a muchos Autores-Libros 

    public function test_relation_authors_books(){

        $texto = "J​eff Kinney, es el creador de la serie El diario de Greg. También creó la página web Poptropica.​";
        $autor = new Author();
        $autor->name = "Jeff Kinney​​" ;
        $autor->info= $texto ;
        $autor->save();

        // $categoria = Category::create([
        //     'tag' => 'Comedy'
        // ]);

        $libro= Book::create([
            'title' => 'EL Diario de Greg ',
            'author_id' => $autor->id,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
            'category_id' => Category::all()->random()->id,
            'isbn' => '978-3-16-148410-0',
        ]);
        
        $libro2= Book::create([
            'title' => 'EL Diario de Greg 2 ',
            'author_id' => $autor->id,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.',
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51Zt3J9ZQNL._SX331_BO1,204,203,200_.jpg',
            'category_id' => Category::all()->random()->id,
            'isbn' => '978-3-16-148410-1',
        ]);

        $libro->author()->associate($autor);
        $libro2->author()->associate($autor);
        $this->assertEquals($autor->id, $libro->author->id);
        $this->assertEquals($autor->id, $libro2->author->id);
        $this->assertEquals($libro->author->id, $libro2->author->id);

        // $autor->delete();
        // $categoria-> delete();
        // $libro->delete();
        // $libro2->delete();

    } 



}


