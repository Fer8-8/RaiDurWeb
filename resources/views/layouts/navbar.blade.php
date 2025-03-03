<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Google Fonts: Saira -->
    <link href="https://fonts.googleapis.com/css2?family=Saira:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm fixed-top d-flex justify-content-between">

            <div class="container-fluid mx-0">

                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <a class="navbar-brand" href="{{ route('welcome') }}">
                        <img class='mx-2' src="/Images/RaiDurLogo.jpg" alt="Logo" width="auto" height="40">
                        <img src="/Images/RaiDurLogoText.jpg" alt="Logo" width="auto" height="40">
                      </a>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto gap-5">

                    <li class="nav-item">
                        <a href="" class="nav-link text-white">Servicios</a>
                    </li>
                    <li class="nav-item"><a href="" class="nav-link text-white saira-font">Nosotros</a></li>
                    <li class="nav-item"><a href="" class="nav-link text-white saira-font">FAQs</a></li>
                    @guest
                        <a href="{{ route('login') }}" type="button" class="btn btn-primary px-2 mx-3"><strong class="text-shadow-sm">INICIAR SESIÓN </strong></a>

                    @else
                        <li class="nav-item">asdfajsfd</li>
                    @endguest
                    <!-- Authentication Links -->
                    <!---
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    --->
                </ul>
            </div>
        </nav>

        <main class="py-0">
            @yield('content')
        </main>
    </div>
</body>
</html>
