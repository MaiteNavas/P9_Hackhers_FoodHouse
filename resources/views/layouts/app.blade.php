<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Food House - @yield('nombre_pagina')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        
    </head>

    <header>
        <nav>
            <a href="/">Inicio</a>
            <a href="/">Categorías</a>
            <a href="/">Mi cuenta</a>
        </nav>
    </header>
    <hr>

    <body>
        
    <h2>@yield('nombre_pagina')</h2>

    </body>
</html>