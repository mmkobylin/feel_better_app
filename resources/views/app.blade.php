<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Feel Better</title>

        {{-- styles --}}
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}" />
        {{-- js link --}}
        <script defer type="text/javascript" src="{{ url('js/jquery.js') }}"></script>        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Comfortaa:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rokkitt&family=Salsa&display=swap" rel="stylesheet">       
      

    </head>

    <body>
        <header>
            {{-- this is where the header goes --}}
            @include("partials/header")
        </header>
        
        <main class="content">
        {{-- this is where I let the other parts in --}}
            @yield("content")
        </main>

        <footer>
            {{-- this is where the header would go --}}
            {{-- @include("partials/footer") --}}
        </footer>

    </body>