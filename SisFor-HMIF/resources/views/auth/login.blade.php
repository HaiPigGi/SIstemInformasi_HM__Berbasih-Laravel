@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <section class="vh-100">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6 text-black">
                                <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="name" class="form-label">{{ __('Username (Your Name)') }}</label>
                                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus
                                                style="background-color: #F3F3F3; border: none;">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">{{ __('Password (Min. 8 Characters)') }}</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" style="background-color: #F3F3F3; border: none;">

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

                                        <div class="mb-0">
                                            <button type="submit" class="btn btn-primary"
                                                style="background-color: #709085; border-color: #709085;">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="col-sm-6 px-0 d-none d-sm-block">
                                <img src="{{ asset('img/hai.jpg') }}"
                                    alt="Login image" class="w-100 vh-100"
                                    style="object-fit: cover; object-position: left;">
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <style>
        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
        }

        @media (min-width: 1025px) {
            .h-custom-2 {
                height: 100%;
            }
        }
    </style>
@endsection

