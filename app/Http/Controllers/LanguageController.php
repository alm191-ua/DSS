<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    public function cambiarIdioma($idioma)
    {
        App::setLocale($idioma);
        return redirect()->back();
    }
}
