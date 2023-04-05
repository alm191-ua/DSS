<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/dino.css') }}" />
  </head>
  <body>
    <div class="introduction">
      <h1 class="msg">404</h1>
    </div>
    <div class="game">
      <div id="score"></div>
      <div id="dino"></div>
      <div id="cactus"></div>
    </div>
    <div class="start_menu">
      <button tabindex="-1" id="start">Start</button>
    </div>
    <script src="{{ asset('js/dino.js') }}"></script>
  </body>
</html>
