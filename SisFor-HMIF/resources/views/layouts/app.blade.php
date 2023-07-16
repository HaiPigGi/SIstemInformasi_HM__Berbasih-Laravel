<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HMIF') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-LONG_UNIQUE_HASH" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-LONG_UNIQUE_HASH" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>

<body>
    <div id="app">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark nav-top navbar-shrink">
            <a class="navbar-brand" href="{{ url('/') }}"><img width="200px" src="{{ asset('img/hm/logo_usd.png') }}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <a class="nav-item nav-link active" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ url('/kepengurusan') }}">Kepengurusan</a>
                <a class="nav-item nav-link" href="{{ url('/organisasi') }}">Event</a>
                <a class="nav-item nav-link" href="{{ url('/prodi') }}">Aspirasi</a>
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-item btn tombol" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="avatar"> <!-- Display the user's avatar -->
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
            </ul>
        </nav>
        <!-- Akhir Navbar -->

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<style>
    .tombol {
        background-color: #ff971e;
        text-transform: uppercase;
        border-radius: 20px;
        color: white;
        font-family: sans-serif;
        font-weight: bold;
    }

    .tombol-al {
        background-color: #ff971e;
        text-transform: uppercase;
        color: white;
        font-family: sans-serif;
        font-weight: bold;
        border-radius: 20px;
    }

    .avatar {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin-right: 5px;
    }
</style>

</html>
