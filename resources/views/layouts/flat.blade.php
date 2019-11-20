<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | Integrity Web Services</title>
    <link rel="shortcut icon" href="{{ asset('images/favicon.png', Request::secure()) }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    </style>
</head>
<body>
    <div id="app">



        <main class="py-4">
            @yield('content')
        </main>
    </div>





</body>
</html>
