<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body class="bg-ligth">
        <div class="container-fluid bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="fixed-top text-right p-2">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-outline-secondary">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-secondary">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-secondary ml-2">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
                <div class="row justify-content-center align-items-center vh-100">
                    <div class="col-lg-8 text-center">
                    <img src="{{ asset('backend/dist/img/mercado/logoo.png') }}" class="img-fluid mb-2" style="width: 180px;" alt="Imagen de bienvenida">
                        <h1 class="display-6 mb-3">¡Bienvenidos al Mercado      "El Vecindario!</h1>
                        <p class="lead">Descubre El Supermercado del Hogar: tu destino único para todas las necesidades del hogar. Desde productos de limpieza hasta utensilios de cocina y decoración, aquí encontrarás todo en un solo lugar. ¡Haz de tu casa un hogar perfectamente equipado con nuestra amplia selección y atención personalizada!</p>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-1">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <p class="text-muted">Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
