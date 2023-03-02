<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;


use Tests\TestCase;
use App\Models\Author;
use App\Models\Book;

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
        $autor->id = 1 ; 
        $autor->name = "Jeff Kinney​​" ;
        $autor->birthdate = "​19/2/1971​" ;
        $autor->isDeath = false ;
        $autor->deathdate = "-1​" ;
        $autor->info= $texto ;

        // Comparaciones
        $this->assertEquals(1,$autor->id);
        $this->assertEquals("​19/2/1971​",$autor->birthdate);
        $this->assertFalse($autor->isDeath);
        $this->assertEquals("-1",$autor->deathdate);
        $this->assertEquals($texto,$autor->info);
    }

}

///vendor/bin/phpunit --filter AuthorTest