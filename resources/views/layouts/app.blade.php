<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{config('app.name', 'Millennial Storm')}}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>

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
                        <img src="/img/4XvRu9.svg" alt="logo" class="img-fluid">
                    </a>
                </div>

            </div>

            <nav class="navbar navbar-expand-lg navbar-dark nav-color border-bottom border-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_toggle" aria-controls="navbar_nav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-center" id="navbar_toggle">

                    <div class="navbar-nav">

                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.politics')}}">Politics</a>


                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.reviews')}}">Reviews</a>


                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.motivation')}}">Motivation</a>


                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.clap-back')}}">Clap-back</a>


                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.in-my-backyard')}}">In my backyard</a>


                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <main class="py-4">
                        @yield('main')
                    </main>
                </div>
                <div class="col-lg-4">
                    <aside class="py-4">
                        @yield('secondary')
                    </aside>
                </div>
            </div>
        </div>


    </div>
    <footer>
        <div class="container-fluid bg-dark">
            <div class="d-flex flex-row justify-content-center">
                <div>Flex item 1</div>
                <div>Flex item 2</div>
            </div>
        </div>
    </footer>
</body>

</html>