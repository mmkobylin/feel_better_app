<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Feel Better</title>

        {{-- styles --}}
        
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        {{-- <link rel="stylesheet" href="{{ asset('sass/app.scss') }}" /> --}}

        {{-- js link --}}

        <script defer type="text/javascript" src="{{ url('js/jquery.js') }}"></script>        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Comfortaa:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rokkitt&family=Salsa&display=swap" rel="stylesheet">       

    </head>

    {{-- sass is struggling, till then i will write it here and later move it to sass --}}
    <style>


        div#total: {
            font-weight:bold;
            line-height: 1.5;
            padding: 1.5rem;
        }

        div#total:active, div#total:hover {
            color: var(--font-color-primary);
            text-decoration: none;            
        }


    </style>
    <body>
        
        <header>
            @include("partials/header")
        </header>
            
        <main class="content">
        {{-- this is where I let the other parts in --}}
            @yield("content")
        </main>

          <footer>
            @include("partials/home-nav")
        </footer>

    </body>