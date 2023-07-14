@extends('layouts.app')

@section('content')
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
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    </head>

    <body>
        <div id="app">
            <!-- Jumbotron -->
            <div class="jumbotron jumbotron-fluid jumbotron-isi1 ">
                <div class="container">
                    <div class="col-9">
                        <h1 id="selamatD">Selamat Datang</h1>
                        <p id="subtitle">di website <span>HMIF USD</span></p>
                        <p>Website Himpunan Mahasiswa Informatika bertujuan untuk menampung aspirasi Mahasiswa Informatika
                            dan informasi
                            seputar kegiatan - kegiatan yang akan dilaksanakan.</p>
                    </div>
                </div>
            </div>
            <!-- Akhir Jumbotron -->

            <!-- Submenu -->
            <nav class="navbar navbar-expand navbar-dark nav-bot justify-content-center nav-fill">
                <div class="navbar-nav nav-box">
                    <a class="nav-item nav-link active" href="https://mahasiswa.usd.ac.id/mahasiswa/">Mahasiswa</a>
                    <a class="nav-item nav-link" href="https://www.usd.ac.id/pencarian_dosen.php">Dosen</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lab</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Lab Komputer Dasar (LKD)</a>
                            <a class="dropdown-item" href="#">Lab Komputer Basis Data (LKBD)</a>
                            <a class="dropdown-item" href="#">Lab Komputer Jaringan (LKJ)</a>
                        </div>
                    </li>
                </div>
            </nav>
            <!-- Akhir Submenu -->

            <!-- Berita -->
            <div class="container berita">
                <div class="section-title">
                    <span class="h2">VISI & MISI</span>
                </div>


                <div class="container berita">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card hnews bg-dark text-white mb-4 shadow-sm">
                                <img class="card-img" src="img/brt/brt1.jpg" alt="Card image cap">
                                <div class="card-body card-img-overlay d-flex flex-column align-items-start">
                                    <h2 class="mb-0">
                                        <a class="text-white" href="isiberita.html">VISI</a>
                                    </h2>
                                    <div class="mb-1 text-white"></div>
                                    <p class="card-text mb-auto" style="font-size: 14pt"></p>
                                    <a href="isiberita.html" class="text-white">Continue reading</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card hnews bg-dark text-white mb-4 shadow-sm">
                                <img class="card-img" src="img/brt/brt1.jpg" alt="Card image cap">
                                <div class="card-body card-img-overlay d-flex flex-column align-items-start">
                                    <h2 class="mb-0">
                                        <a class="text-white" href="isiberita.html">MISI</a>
                                    </h2>
                                    <div class="mb-1 text-white"></div>
                                    <p class="card-text mb-auto" style="font-size: 14pt"></p>
                                    <a href="isiberita.html" class="text-white">Continue reading</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 shadow-sm">
                                <img class="card-img-left flex-auto d-none d-lg-block img-fluid" src="img/brt/sdr.jpg" alt="Card image cap">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h5 class="mb-0">
                                        <a class="text-dark" href="#"></a>
                                    </h5>
                                    <div class="mb-1 text-muted"></div>
                                    <p class="card-text mb-auto"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card flex-md-row mb-4 shadow-sm">
                                <img class="card-img-left flex-auto d-none d-lg-block img-fluid" src="img/brt/sdr.jpg" alt="Card image cap">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <h5 class="mb-0">
                                        <a class="text-dark" href="#"></a>
                                    </h5>
                                    <div class="mb-1 text-muted"></div>
                                    <p class="card-text mb-auto"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-2 justify-content-between">
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 shadow-sm">
                            <img class="card-img-left flex-auto d-none d-lg-block img-fluid" src="img/brt/sdr.jpg" alt="Card image cap">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h5 class="mb-0">
                                    <a class="text-dark" href="#"></a>
                                </h5>
                                <div class="mb-1 text-muted"></div>
                                <p class="card-text mb-auto"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 shadow-sm">
                            <img class="card-img-left flex-auto d-none d-lg-block img-fluid" src="img/brt/sdr.jpg" alt="Card image cap">
                            <div class="card-body d-flex flex-column align-items-start">
                                <h5 class="mb-0">
                                    <a class="text-dark" href="#"></a>
                                </h5>
                                <div class="mb-1 text-muted"></div>
                                <p class="card-text mb-auto"></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div style="text-align:center; margin-bottom: 20px;">
                <a class="btn tombol" style="border-radius:0;font-size: 20px;" href="arsipberita.html">Arsip Berita</a>
            </div>
        </div>
        <!-- Akhir Berita -->

        <!-- Agenda -->
        <div class="card-deck d-flex justify-content-center">
            @isset($posts)
                @foreach ($posts as $post)
                    <div class="card col-md-4 mb-4 shadow-sm" style="margin: 10px;">
                        <img class="card-img-top mx-auto d-block" src="{{ asset('storage/posts/' . $post->image) }}"
                            alt="Card image cap">
                        <div class="card-body text-center mt-3">
                            <h5 class="card-title"><a href="#" class="text-primary">{{ $post->title }}</a></h5>
                            <p class="card-text">
                                {{ Str::limit(strip_tags($post->content), 1000) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>


        <!-- Akhir Agenda -->



        <!-- Akhir Agenda -->
        <!-- Info -->
        <div class="info">
            <div class="container">
                <div id="info" class="row">
                    <div id="info-1" class="col-md-4">
                        <h1 style="color:#000000; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">3</h1>
                        <h3 style="font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">LAB</h3>
                    </div>
                    <div id="info-1" class="col-md-4">
                        <h1 style="color:#000000; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">-</h1>
                        <h3 style="font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Mahasiswa</h3>
                    </div>
                    <div id="info-1" class="col-md-4">
                        <h1 style="color:#000000; font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">-</h1>
                        <h3 style="font-weight: bold; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);">Dosen</h3>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <footer>
            <div class="footer-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <img class="footer-brand" src="img/hm/Logo HMIF remove remove.png"
                                alt="Universitas AMIKOM Yogyakarta">
                            <div class="alamat">
                                <h6>UNIVERSITAS SANATA DHARMA</h6>
                                <p>Jl. Paingan, Krodan, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa
                                    Yogyakarta 55281</p>
                                <p>(0274)883037</p>
                                <p>Fax: (0274) 884208 Kodepos: 55281</p>
                                <p>E-Mail: HMIF@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="judul-footer"></div>
                                    <h6 class="judul-menu">Links</h6>
                                    <div class="menu-footer">
                                        <ul class="menu">
                                            <li><a href="">University Link</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <div class="judul-footer"></div>
                                    <h6 class="judul-menu">Halaman Pendukung</h6>
                                    <div class="menu-footer">
                                        <ul class="menu">
                                            <li><a href="maps.html">Maps</a></li>
                                            <li><a href="">Mail</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="copyright">© HMIF USD</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Akhir Footer -->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
    </body>


    </html>
@endsection
