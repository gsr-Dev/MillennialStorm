<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Millennial Storm</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="min-vh-100">
        <nav class="navbar navbar-expand-md navbar-dark nav-color border-bottom border-primary">
            <div class="container justify-content-center">
                <div class="row d-flex">
                    <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase" href="/contributors">Contributors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-uppercase" href="#">item</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">

                <main class="py-4">
                    @yield('main')
                </main>


            </div>
        </div>

        <footer class="fixed-bottom">
            Copyright 2020 Greg
        </footer>
    </div>
</body>

</html>