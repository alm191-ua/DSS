{{-- default mail template --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Mail</title>
</head>
<body>
    <div class="container">
        <p>Hola, {{ $name }}</p>
        <br>
        {{ $body }}
        <br>
        <p>¡Muchas Gracias!</p>
    </div>
</body>
</html>