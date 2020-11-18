<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="De After. Op 11 december 2020 is de online editie van een 7 uur durende after vol chille muziek, activiteiten, sociale interactie en gezelligheid.">
    <meta name="keywords" content="After, Afterparty, Event, Evenement, Online evenement, Online event, 11 december 2020, 11-12-2020">
    <meta property="og:title" content="De After">
    <meta property="og:description" content="De After. Op 11 december 2020 is de online editie van een 7 uur durende after vol chille muziek, activiteiten, sociale interactie en gezelligheid.">
    <meta property="og:url" content="https://de-after.nl/">
    <meta property="og:image" content="https://de-after.nl/share-image.png">
    <meta property="og:site_name" content="De After">
    <meta property="og:type" content="website">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>De After</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <div class="vh-100" id="app">
        @auth
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">
                <!-- Right Side Of Navbar -->
                
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if(Auth::user()->booker_name)
                                {{ Auth::user()->booker_name }}
                            @else
                                Account
                            @endif
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
                </ul>
            </div>
        </nav>
        @endauth

        <div class="page d-flex align-items-center">
            @yield('content')
        </div>
    </div>
    <!-- @if (\Request::is('/'))
        <script src="{{ asset('js/countdown.js') }}"></script>
    @endif -->
</body>
</html>
