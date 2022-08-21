<html class="no-js wf-opensans-n7-active wf-opensans-n5-active wf-opensans-n8-active wf-opensans-n6-active wf-opensans-n3-active wf-opensans-n4-active wf-active" lang="en" xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
    <head>
        <title>Aprende Fácil</title>
        <meta name="description" content="We are a tech oriented store with the best deals and products.">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="robots" content="follow, all">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/bootstrap/themes/382017/app.css?1619113824">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800%7COpen+Sans:300,400,500,600,700,800%7COpen+Sans:300,400,500,600,700,800" media="all">
        <script>
            WebFont.load({
                google: {
                    families: ["Open Sans:300,400,500,600,700,800", "Open Sans:300,400,500,600,700,800", "Open Sans:300,400,500,600,700,800"]
                }
            });
        </script>

        <style>
            body {
                font-family: 'Open Sans' !important;
                padding-top: 30px !important;
            }
            .page-header, h2 {
            font-family: 'Open Sans' !important;
            }
            .navbar-brand, .text-logo {
            font-family: 'Open Sans' !important;
            }
            p, .caption h4, label, table, .panel, #contactpage > h2.success, #contactpage h2.error  {
                font-size: 14px !important;
            }
            h2 {
                font-size: 30px !important;
            }
            .navbar-brand, .text-logo {
                font-size: 18px !important;
            }
            .navbar-left a {
                font-size: 14px !important;
            }
        </style>
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-JBWEC7QQTS"></script>
        <script type="text/javascript">
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-JBWEC7QQTS');
            order_items = null;
        </script>
        <script src="/javascripts/dist/jumpseller-2.0.0.js" defer="defer"></script>
    </head>
    <body>
    <!-- Navigation -->
    <div class="fixed-top">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Aprende Fácil
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a href="/" title="Películas" class="level-1 trsn nav-link">Todos los Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('listaDeseos', Auth::user() ? Auth::user()->id : '0') }}" title="Mi Lista de Deseos" class="level-1 trsn nav-link">Mi Lista de Deseos</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @if(Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Administrar</a>
                        </li>
                        @endif
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrar</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    @yield('content')
    <!-- Footer -->
    <hr>
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <p class="powered-by">© 2022 Peliculas.demo. Todos los derechos reservados
                    </p>
                </div>
            </div>
        </footer>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>