<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        @yield('css')
    </style>
    <title>@yield('titulo')</title>
</head>
<body>
<header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="{{asset('assets/usm/logo.png')}}" width="50" height="28" alt="logo">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
               data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Inicio
                </a>

                <a class="navbar-item" href="{{route('Contribuir')}}">
                    Contribuir
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Mas
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="{{route('Static::about')}}">
                            About
                        </a>
                        <a class="navbar-item" href="{{route('Static::contact')}}">
                            Contact
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" target="_blank" href="https://github.com/LIbanezDev/material_usm_project">
                            GitHub
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a class="button is-info" href="{{route('Auth::register')}}">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="{{route('Auth::login')}}">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<main class="p-4">
    @yield("contenido")
</main>
<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('js/axios_config.js')}}"></script>
@yield('script')

<script>
    @yield("javascript")
</script>
</body>
</html>

