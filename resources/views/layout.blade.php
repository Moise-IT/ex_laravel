<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    </head>
    <body>
       <div class="container">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="/">Acceuil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/a-propos">A propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contactez-nous</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/clients">Voir nos clients</a>
              </li>
        </ul>

        <!--C'est ici qu'on va injecter nos pages -->
        @yield('content')
       </div>
    </body>
</html>
