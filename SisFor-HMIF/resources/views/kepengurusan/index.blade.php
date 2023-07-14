@extends('layouts.app')

@section('content')
    <!doctype html>
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
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">


        <title>Kata Pengantar | Universitas SANATA DHARMA</title>
    </head>

    <body id="kel12">

        <section class="org-structure container" id="org-structure">
            <div class="font-weight-bold">
                <h2>
                    <span class="br">{{ $posts->first()->judul }}</span>
                </h2>
            </div>
            <div class="org-structure-item">
                <div class="title">Pengurus Inti</div>
                <div class="org-structure-wrapper">
                    @forelse ($posts as $post)
                        @if ($post->divisi == 'Pengurus Inti')
                            <div class="structure-card">
                                <img src="{{ asset('storage/kepengurusan/' . $post->image) }}" alt="">
                                <h3>{{ $post->nama }}</h3>
                                <p>{{ $post->jabatan }}</p>
                            </div>
                        @endif
                    @empty
                        <p>Tidak ada pengurus inti.</p>
                    @endforelse
                </div>
            </div>
            <div class="org-structure-item">
                <div class="title">Kepala Departement</div>
                <div class="org-structure-wrapper">
                    @forelse ($posts as $post)
                        @if ($post->divisi == 'Kepala Departement')
                            <div class="structure-card">
                                <img src="{{ asset('storage/kepengurusan/' . $post->image) }}" alt="">
                                <h3>{{ $post->nama }}</h3>
                                <p>{{ $post->jabatan }}</p>
                            </div>
                        @endif
                    @empty
                        <p>Tidak ada kepala departemen.</p>
                    @endforelse
                </div>
            </div>
            <div class="org-structure-item">
                <div class="title">Divisi</div>
                <div class="org-structure-wrapper">
                    @php
                        $counter = 0;
                    @endphp

                    @forelse ($divisions as $division)
                        @if ($counter < 5)
                            <div class="structure-card structure-card-division">
                                <img src="{{ asset('storage/divisi/' . $division->image) }}" alt="">
                                <h3>{{ $division->nama }}</h3>
                            </div>
                            @php
                                $counter++;
                            @endphp
                        @else
                            @break
                        @endif
                    @empty
                        <p>Tidak ada divisi.</p>
                    @endforelse
                    <!-- Lanjutkan dengan kode lain yang diinginkan -->
                </div>
            </div>



        </section>
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
        <script>
            var contents = document.getElementsByClassName("all");
            var buttons = document.getElementsByClassName("show-more");

            for (var i = 0; i < contents.length; i++) {
                // "let" creates locally scoped variables for use in the function.
                let content = contents[i];
                let button = buttons[i];
                button.onclick = function() {
                    if (content.className == "open") {
                        //shrink the box
                        content.className = "all";
                        button.innerHTML = "Show More";
                    } else {
                        //expand the box
                        content.className = "open";
                        button.innerHTML = "Show Less";
                    }
                };
            }
        </script>
    </body>

    </html>
@endsection
