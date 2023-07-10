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
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="text-center mb-4">
                            <a href="{{ url('/') }}">
                                <img class="mb-4" src="{{ asset('img/hm/Logo HMIF.jpg') }}" alt="" width="200"
                                    height="200">
                            </a>
                            <p class="h7">Silahkan Melakukan Register</p>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="telepon" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="telepon" type="text" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" required autocomplete="telepon">

                                @error('telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-signin btn-lg mb-3">
                                    {{ __('Register') }}
                                </button>
                                <br>
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Back to Login') }}
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
            background-position:center center;
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
            background-color: #a84fb0;
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
