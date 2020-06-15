<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | Integrity Web Services</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png', Request::secure()) }}">

    <!-- Fonts -->
    <!--<link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css', Request::secure()) }}">
    {{-- Hoja de estilo para los mensajes de la aplicación (requerida) --}}
    <link rel="stylesheet" href="{{ asset('vendor/jquery.gritter/css/jquery.gritter.css', Request::secure()) }}">

    <style type="text/css">
        body {
          background: #007bff;
          background: linear-gradient(to right, #ffffff, #33AEFF);
        }
        #sticky-footer {
          flex-shrink: none;
          background: #263238;
          color: white;
        }
        #sticky-footer2 {
          flex-shrink: none;
          background: #1e282d;
        }
        #navbar2{
          background: #263238;
        }
        #footer-bar{
          background: linear-gradient(to right, #ffffff, #33AEFF);
        }
        .buton-icons { 
        display: inline-block;border-radius: 100px;box-shadow: 10px 10px 5px #888;background: rgb(9, 110, 171);font-size: 20px; height: 140px;   
             width: 140px; margin-left: 0.3em; margin-top: 0.3em;
        }
        .edit-icons { 
        display: inline-block;border-radius: 100px;box-shadow: 5px 5px 5px #888;padding: 0.5em 0.6em; font-size: 20px; height: 48px;   
             width: 48px; margin-left: 0.3em; margin-top: 0.3em;
        }
        .print-icons { 
        display: inline-block;border-radius: 100px;box-shadow: 3px 3px 5px #888;background: rgb(9, 110, 171);font-size: 48px; height: 100px;   
             width: 100px; color:white
        }
        td{
            text-align: center;
        }
        th{
            text-align: center;
        }
    </style>

    {{-- Sección para estilos extras dispuestos por las plantillas según requerimientos particulares --}}
    @yield('extra-css')
</head>
<body>
    @auth
        {{-- Ventana modal para mostrar mensaje de espera mientras cargan los datos --}}
        @include('layouts.loading-message')
    @endauth
    <div id="app">
        {{-- navar 1 --}}
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="footer-bar">
            <div class="container">
                <img src="{{ asset('images/logo.svg') }}" width="164" height="90" class="d-inline-block align-top" alt="">

               {{--  <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a> --}}
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        {{-- fin navar 1 --}}
        {{-- navar 2 --}}
        <!-- navbar -->
        <div class="container-fluid" id="navbar2">
          <nav class="navbar navbar-expand-lg navbar-dark  container">
{{--               <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo2.svg') }}" width="90" height="49" class="d-inline-block align-top" alt="">
                Integrity Web Services
              </a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
     {{-- 
            <div class="dropdown">
              <a class="btn btn-secondary" href="#">Inicio</a>
              <a class="btn btn-secondary" href="#">Consultas</a>
              <a class="btn btn-secondary" href="/cotizasalud">Cotizaciones</a>
              <a class="btn btn-secondary" href="#">Emisión</a>
              <a class="btn btn-secondary" href="#">Documentos Digitales</a>
              <a class="btn btn-secondary" href="#">Financiamiento</a>
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Planes
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="/plan_salud">Salud</a>
                <a class="dropdown-item" href="#">Funerario</a>
                <a class="dropdown-item" href="#">Atomovil</a>
              </div>
            </div>
--}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
              <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Consultas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/cotizasalud">Cotizaciones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Emisión</a>
                </li> 
                <li class="nav-item">
                  <a class="nav-link" href="#">Documentos Digitales</a>
                </li> 
                <li class="dropdown">
                  <a href="#" class="nav-link" data-toggle="dropdown">Planes</a>
                  <ul class="dropdown-menu">
                      <a class="dropdown-item" href="/plan_salud">Salud & Funerario</a>
                      <a class="dropdown-item" href="#">Atomovil</a>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Financiamiento</a>
                </li> 
              </ul>
            </div>
          </nav>
        </div>
        <!-- fin navbar -->
        {{-- navar 2 --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    {{-- footer --}}
    @extends('layouts.footer')
    {{-- end footer --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js', Request::secure()) }}" id="appjs" data-domain="{{ config('app.url') }}"></script>
    <!-- Componentes compartidos de la aplicación -->
    <script src="{{ asset('js/shared-components.js', Request::secure()) }}"></script>
    {{-- Plugin Gritter --}}
    <script src="{{ asset('vendor/jquery.gritter/js/jquery.gritter.min.js', Request::secure()) }}" defer></script>

    {{-- Mensaje de espera al cargar procesos del sistema --}}
    @include('layouts.messages')

    <script>
      $(document).ready(function() {
          /** oculta el mensaje de carga al renderizar por completo el DOM de la página */
          $('.preloader').fadeOut(1000);
      });
    </script>


    {{-- Sección para scripts extras dispuestos por las plantillas según requerimientos particulares --}}
    @yield('extra-js')

    {{-- Sección que permite renderizar los componentes de VueJS --}}
    <script>
      /** @type {object} Constante que crea el elemento Vue */
      var app = new Vue({
          el: '#app',
      });
    </script>
</body>
</html>
