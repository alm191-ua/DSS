<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase; // Utiliza esta trait para asegurarte de que se vacíe la base de datos antes de cada prueba

    
    public function test_create_user(){
        $user = new User();
        $user->is_admin = false;
        $user->username = "testuser";
        $user->password = "testpassword";
        $user->email = "algo@gmail.com";

        $this->assertEquals("testuser", $user->username);
        $this->assertEquals("testpassword", $user->password);
        $this->assertEquals("algo@gmail.com", $user->email);
        $this->assertTrue($user->is_admin === false);

        $user->delete();

    }



    public function test_can_create_user()
    {
        // Crea un usuario utilizando los datos de prueba
        $user = User::create([
            'id' => 1,
            'is_admin' => false,
            'username' => 'testuser',
            // bycrypt() es una función de Laravel que encripta la contraseña
            'password' => bcrypt('testpassword'),
            'email' => 'testuser@example.com',
        ]);

        // Verifica que el usuario se haya creado correctamente
        $this->assertEquals(1, $user->id);
        $this->assertEquals('testuser', $user->username);
        $this->assertTrue($user->is_admin === false);
    }

    /**
     * Prueba que un usuario se haya creado correctamente
     *
     * @return void
     */
    public function test_user_exists()
    {
        // Crea un usuario utilizando los datos de prueba
        $user = User::create([
            'id' => 1,
            'is_admin' => false,
            'username' => 'testuser',
            'password' => bcrypt('testpassword'),
            'email' => 'testuser@example.com',
        ]);

        // Verifica que el usuario se haya creado correctamente
        $this->assertDatabaseHas('users', [
            'id' => 1,
            'username' => 'testuser',
            'email' => 'testuser@example.com',
        ]);
    }
}
