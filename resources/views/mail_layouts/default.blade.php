{{-- default mail template --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Mail</title>
</head>
<body>
    <div class="container">
        <p>Hi, {{ $name }}</p>
        <br>
        {{ $body }}
        <br>
        <p>Thank you</p>
    </div>
</body>
</html>
