<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/usm/logo.png')}}" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://kit.fontawesome.com/f0c1ebd83a.js" crossorigin="anonymous"></script>
    <title>@yield('titulo')</title>
</head>
<body>
<header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="{{asset('assets/usm/logo.png')}}" width="40" height="28" alt="logo">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="true"
               data-target="nav-menu">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="nav-menu" class="navbar-menu">
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
                        <a class="navbar-item" target="_blank"
                           href="https://github.com/LIbanezDev/material_usm_project">
                            GitHub
                        </a>
                    </div>
                </div>
                <div class="navbar-item">
                    <button class="button is-white"
                            onclick="window.open('https://github.com/LIbanezDev/material_usm_project', '_blank');">
                            <span class="fa fa-github">
                            </span>
                    </button>
                </div>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    @auth()
                        <p class="navbar-item"><strong>{{Auth::user()->name}}</strong></p>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="button is-white" onclick="this.closest('form').submit()">
                                <span class="fa fa-power-off has-text-danger">
                                </span>
                            </button>
                        </form>
                    @else
                        <div class="buttons">
                            <a class="button is-light" href="{{route('Auth::login')}}">
                                Ingresar
                            </a>
                        </div>
                    @endauth
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{asset('js/axios_config.js')}}"></script>
@yield('script')

<script>
    @yield("javascript")
</script>
</body>
</html>

