@extends('layouts.flat')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br><br><br>
            <div class="card">
                <br>
                <center>
                    <img src="{{ asset('images/logo.svg') }}" width="277" height="150" class="d-inline-block align-top" alt="">
                </center>
                {{-- <div class="card-header"></div> --}}

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

{{--                         <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-1 ml-1">
                            <div class="col-md-12" style="text-align: center;">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar de Sesión
                                </button>
                                @if (Route::has('register'))
                                    <a class="btn btn-outline-dark" href="{{ route('register') }}">Registrar</a>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <div class="col-md-12" style="text-align: center;">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Olvidó su Contraseña
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="card-footer"><center>2019 © Integrity Web Services, C.A Rif J-41260910-6</center></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
