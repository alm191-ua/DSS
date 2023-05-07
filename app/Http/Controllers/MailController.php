<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\WelcomeMail;

class MailController extends Controller
{
    public function send()
    {
        // $destinatario = "contact.wordwaves@ejemplo.com";
        $receptor = "llorens.akira@gmail.com";
        $nombre = "Nombre de usuario";
        $correo = new WelcomeMail($nombre);
        Mail::to($receptor)->send($correo);
    }
}
//Ahora, en tu controlador, debes instanciar la clase WelcomeMail y 
//usar el método send() de la clase Mail de Laravel para enviar el correo electrónico: