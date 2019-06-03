<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Find.Mi</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
    <body class="body">

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right    btn-group">
                    @auth
                        <a type="button" class="btn btn-primary" href="{{ url('/home') }}">Home</a>
                    @else
                        <a type="button" class="btn btn-success" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a type="button" class="btn btn-primary" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="container">
                <div class="content">
                    <div class="title m-b-md row justify-content-center align-items-center">
                        <img src="/images/Find.MI.png" alt="Logo de Find.MI">
                    </div>
                    <!-- Barra de búsqueda   -->
                    <div class="row justify-content-center align-items-center ">
                        <div class="col-md-6" >
                        @include('partials.search')
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    <div class="align-items-end flex-center">
                        @include('partials.footer')
                    </div>

    </body>
    
</html>
