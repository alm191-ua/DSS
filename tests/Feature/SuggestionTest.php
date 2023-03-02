<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase; 
use App\Models\Suggestion;
use App\Models\Author;
use App\Models\User;

class SuggestionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example_suggestion()
    {
        $usuario = User::create([
            "is_admin" => false,
            'username' => "Raul Hernandez",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email' => "RaulHernandez@ua.es" , 
            'email_verified_at' => now(),            

        ]);

        $texto = "Añadir un modo oscuro " ;
        $sugerencia = new Suggestion();


        $sugerencia->name = $usuario->username; 
        $sugerencia->email = $usuario->email; 
        $sugerencia->phone = "678430102"; 
        $sugerencia->message = $texto; 
        $sugerencia->user_id = $usuario->id; 

        // Comparaciones
        $this->assertEquals("Raul Hernandez",$sugerencia->name);
        $this->assertEquals("RaulHernandez@ua.es" ,$sugerencia->email);
        $this->assertEquals("678430102",$sugerencia->phone);
        $this->assertEquals($texto,$sugerencia->message);
        $this->assertEquals($usuario->id,$sugerencia->user_id);

        $usuario->delete();
    }
    // Funcion de comprobacion de guardado y eliminacion en la base de datos 
    public function test_save_delete_suggestion(){
        $usuario = User::create([
            "is_admin" => false,
            'username' => "Raul Hernandez",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email' => "RaulHernandez@ua.es" , 
            'email_verified_at' => now(),            

        ]);

        $texto = "Añadir un modo oscuro " ;
        $sugerencia = new Suggestion();


        $sugerencia->name = $usuario->username; 
        $sugerencia->email = $usuario->email; 
        $sugerencia->phone = "678430102"; 
        $sugerencia->message = $texto; 
        $sugerencia->user_id = $usuario->id; 

        $sugerencia->save();

        //Comparaciones 
        $this->assertDatabaseHas('suggestions', [
            'name' => $usuario->username,
        ]);

        $this->assertDatabaseHas('suggestions', [
            'message' => $texto,
        ]);



        $sugerencia->delete();
        $usuario->delete();

        // Comprobacion de que se ha eliminado correctamente 
        $this->assertDatabaseMissing('suggestions', [
            'name' => $usuario->username,
        ]);

        $this->assertDatabaseMissing('suggestions', [
            'message' => $texto,
        ]);
    }

    // Funcion de comprobacion de una Sugerencia sin necesidad de ser un usuario loggeado 

    public function test_suggestion_non_registred (){
        

        $texto = "Añadir un modo oscuro " ;
        $sugerencia = new Suggestion();


        $sugerencia->name = "Raul Hernandez"; 
        $sugerencia->email = "Raul@ua.es"; 
        $sugerencia->message = $texto; 



        $sugerencia->save();
        //Comparaciones 
        $this->assertDatabaseHas('suggestions', [
            'name' => "Raul Hernandez",
        ]);

        $this->assertDatabaseHas('suggestions', [
            'message' => $texto,
        ]);



        $sugerencia->delete();



        // Comprobacion de que se ha eliminado correctamente 
        $this->assertDatabaseMissing('suggestions', [
            'name' => "Raul Hernandez",
        ]);

        $this->assertDatabaseMissing('suggestions', [
            'message' => $texto,
        ]);

    }

    // Funcion de comprobacion de relacion 1 a muchos (Usuario /Sugerencias  )
   public function test_relation_users_suggestions(){
        $usuario = User::create([
            "is_admin" => false,
            'username' => "Raul Hernandez",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'email' => "RaulHernandez@ua.es" , 
            'email_verified_at' => now(),            

        ]);

        $texto = "Añadir un modo oscuro " ;
        $sugerencia = new Suggestion();


        $sugerencia->name = $usuario->username; 
        $sugerencia->email = $usuario->email; 
        $sugerencia->phone = "678430102"; 
        $sugerencia->message = $texto; 
        $sugerencia->user_id = $usuario->id; 

        $sugerencia->save();

        // Reallizamos la asociacion 

        $sugerencia->user()->associate($usuario);

        // Comparaciones 
        $this->assertEquals($sugerencia->user_id , $sugerencia->user->id);
        $this->assertEquals($sugerencia->name , $sugerencia->user->username);

        $sugerencia->delete();
        $usuario->delete();

    }


}
//./vendor/bin/phpunit --filter SuggestionTest

