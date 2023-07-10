@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

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
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

        <title>Dashboard</title>
    </head>

    <body>
        <div id="app">

            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid jumbotron-isi1 ">
                <div class="container ">
                    <div class="container mt-5">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="card bg-transparent">
                                    <div class="card-header">{{ __('Dashboard') }}</div>

                                    <div class="card-body">
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>

                                        <h4 class="card-title">{{ __('You are logged in!') }}</h4>
                                        <p class="card-text">Welcome, {{ Auth::user()->name }}!</p>
                                        <p class="card-text">Selamat datang di Website Himpunan Mahasiswa Informatika
                                            bertujuan untuk menampung aspirasi Mahasiswa Informatika dan informasi seputar
                                            kegiatan - kegiatan yang akan dilaksanakan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- Akhir Jumbotron -->
        </div>
    </body>

    </html>
@endsection
