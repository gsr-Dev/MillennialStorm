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
        <header role="banner" class="body-color">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <a href="/" class="mb-n3">
                        <img src="/img/4XvRu9.svg" alt="logo" class="img-fluid">
                    </a>
                </div>

            </div>

            <nav class="navbar navbar-expand-lg navbar-dark body-color border-bottom border-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_toggle" aria-controls="navbar_nav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-center" id="navbar_toggle">

                    <div class="navbar-nav">

                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.irl')}}">irl</a>
                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.on-the-web')}}">On the web</a>
                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.lifestyle-&-motivation')}}">Lifestyle & Motivation</a>

                        <a class="nav-link text-uppercase text-primary px-3" href="{{route('category.in-my-backyard')}}">In my backyard</a>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <main>
                        @yield('main')
                    </main>
                </div>
                <div class="col-lg-4">
                    <aside>
                        <div class="container my-4">
                            <div class="bg-dark py-4 d-flex flex-column">
                                <h5 class="text-uppercase text-primary text-center">Follow Us</h5>
                                <div class="d-flex justify-content-center mx-auto pt-2">
                                    <a href="#"><i class="fi-xnsuxl-facebook text-primary px-2"></i></a>
                                    <a href="#"><i class="fi-xnsuxl-twitter text-primary px-2 border-left border-right border-primary"></i></a>
                                    <a href="#"><i class="fi-xnsuxl-instagram text-primary px-2"></i></a>
                                </div>
                                <a href="#" class="mx-auto pt-4">Contact</a>
                            </div>
                            <div class="bg-dark border-top border-primary py-4">
                                <h5 class="text-uppercase text-primary text-center">Subscribe to the newsletter</h5>
                                <form action="" class="px-4">
                                    <div class="form-group pt-2">
                                        <input type="email" name="email" id="email" class="form-control 
                                        shadow-none 
                                        bg-dark 
                                        border-top-0 
                                        border-left-0 
                                        border-right-0 
                                        rounded-0 
                                        border-primary" placeholder="Email...">

                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="first-name" id="first-name" class="form-control
                                        shadow-none
                                        bg-dark
                                        border-top-0
                                        border-left-0
                                        border-right-0
                                        rounded-0
                                        border-primary" placeholder="First Name...">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="last-name" id="last-name" class="form-control
                                        shadow-none
                                        bg-dark
                                        border-top-0
                                        border-left-0
                                        border-right-0
                                        rounded-0 
                                        border-primary" placeholder="Last Name...">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid bg-dark mt-4">
            <div class="container d-flex flex-row justify-content-left">
                <ul class="list-group list-group-flush bg-dark">
                    <li class="list-group-item bg-dark text-primary border-0"><strong>About</strong></li>
                    <li class="list-group-item bg-dark text-primary border-0">Millennial Storm</li>
                    <li class="list-group-item bg-dark text-primary border-0">Contributors</li>
                    <li class="list-group-item bg-dark text-primary border-0">Contact</li>
                </ul>
                <ul class="list-group list-group-flush bg-dark mr-2">
                    <li class="list-group-item bg-dark text-primary border-0"><strong>Legal</strong></li>
                    <li class="list-group-item bg-dark text-primary border-0">Privacy Policy</li>
                    <li class="list-group-item bg-dark text-primary border-0">Terms of Service</li>
                    <li class="list-group-item bg-dark text-primary border-0">Code of Conduct</li>
                </ul>


            </div>
            <div class="container py-4 text-muted">
                &copy; 2020 Millennial Storm. All rights reserved. Hand-coded in Aotearoa / New Zealand by local talent.
            </div>
        </div>
    </footer>
</body>

</html>