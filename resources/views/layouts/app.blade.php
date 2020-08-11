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
        <header role="banner" class="nav-color">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <a href="/" class="mb-n3">
                        <img src="/img/4XvRu9.svg" alt="logo">
                    </a>
                </div>

            </div>

            <nav class="navbar navbar-expand-md navbar-dark nav-color border-bottom border-primary">
                <div class="container justify-content-center">
                    <div class="row d-flex">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" href="{{route('category.politics')}}">Politics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" href="{{route('category.reviews')}}">Reviews</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" href="{{route('category.motivation')}}">Motivation</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" href="{{route('category.clap-back')}}">Clap-back</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" href="{{route('category.in-my-backyard')}}">In my backyard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <main class="py-4">
                        @yield('main')
                    </main>
                </div>
                <div class="col-4">
                    <aside class="py-4">
                        @yield('secondary')
                    </aside>
                </div>
            </div>
        </div>

        <footer>
            <div class="container-fluid bg-primary">
                <div class="d-flex flex-row justify-content-center">
                    <div>Flex item 1</div>
                    <div>Flex item 2</div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>