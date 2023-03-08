<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Language
{
    public function handle(Request $request, Closure $next)
    {
        // Obtener el idioma de la URL o de la sesión
        $lang = $request->lang ?? session('lang', config('app.locale'));

        // Establecer el idioma de la aplicación
        App::setLocale($lang);

        // Guardar el idioma en la sesión
        session()->put('lang', $lang);

        return $next($request);
    }
}