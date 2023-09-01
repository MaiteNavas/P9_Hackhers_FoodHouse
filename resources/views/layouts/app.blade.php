<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Food House - @yield('nombre_pagina')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        
    </head>

    <header>
    <div class="center">
        <div class="botones">
            <a class="btn custom-btn" href="/">Usuarios</a>
            <a class="btn custom-btn" href="/admin">Admin</a>
        </div>
    </div>
    </header>
    <hr>

    <body>
        
    <h2>@yield('nombre_pagina')</h2>

    </body>
</html>