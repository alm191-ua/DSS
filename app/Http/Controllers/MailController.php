<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    public function index()
    {
        $destinatario = "contact.wordwaves@ejemplo.com";
        $nombre = "Nombre de usuario";
        $correo = new WelcomeMail($nombre);
        Mail::to($destinatario)->send($correo);
    }
}
//Ahora, en tu controlador, debes instanciar la clase WelcomeMail y 
//usar el método send() de la clase Mail de Laravel para enviar el correo electrónico: