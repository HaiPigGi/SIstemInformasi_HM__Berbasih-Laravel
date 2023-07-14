<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'HMIF') }}</title>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="text-center mb-4">
                            <a href="{{ url('/') }}">
                                <img class="mb-4" src="{{ asset('img/hm/Logo HMIF.jpg') }}" alt="" width="200"
                                    height="200">
                            </a>
                            <p class="h7">Login menggunakan username dan password</p>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Username (Your Name)') }}</label>
                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                style="background-color: #F3F3F3; border: none;">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password (Min. 8 Characters)') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" style="background-color: #F3F3F3; border: none;">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="mb-0 text-center">
                            <button type="submit" class="btn btn-signin btn-lg mb-3">
                                {{ __('Login') }}
                            </button>
                            <br>
                            <div class="mb-0 text-center">
                                <a href="{{ route('google.login') }}" class="btn btn-google btn-lg mb-3">
                                    <img src="{{ asset('img/google.jpg') }}" alt="Google Icon" class="google-icon">
                                    <span class="google-button-text">{{ __('Google') }}</span>
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            background-image: url(img/hm/projek\ Organisasi.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
        }

        .container {
            background-color: #f0912b;
        }

        .container .card {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            background-color: #fff;
            padding: 25px;
            width: 560px;
            max-width: 100%;
        }

        .form-signin {
            width: 100%;
            padding: 15px;
            margin: auto;
        }

        .form-control {
            margin-bottom: 30px;
            height: 50px;
            background: none;
            border: none;
            color: #202020;
            box-shadow: 0 0 0 0.05rem #7a3081d0;
        }

        .form-control:focus {
            background: none;
            color: #202020;
            border: 1px;
            box-shadow: 0 0 0 0.05rem rgb(240, 145, 43);
        }

        .form-control::placeholder {
            color: rgba(0, 0, 0, 0.568);
        }

        .btn-signin {
            background-color: #f0912b;
            color: #fff;
            height: 50px;
            width: 200px;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .btn-signin:hover {
            background-color: #b87023;
        }

        .btn-google {
            background-color: #4285F4;
            color: #fff;
            height: 50px;
            width: 200px;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .google-icon {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .google-button-text {
            vertical-align: middle;
        }

        @media (max-width: 400px) {
            img {
                width: 140px;
                height: 140px;
            }
        }
    </style>
</body>
</html>
