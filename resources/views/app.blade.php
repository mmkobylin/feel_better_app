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
    
    *, *::before, *::after {
        fill: var(--background-primary);
    }

    section {
        background: var(--background-primary);
    }

    h1 {
        background-color: var(--background-primary);
    }

    header {
        background: var(--font-color-secondary);
        padding: 2rem;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    footer {
        background: var(--font-color-secondary);
        padding: 2rem;
    }

    .navbar-home {
        color: var(--background-primary);
        font-family: var(--font-primary);
        font-size: 1.5rem;
    };

.navbar-home:active, .navbar-home:hover {
    display: inline; 
    list-style:none;
    text-align: center;
};

@media only screen and (min-width: 500px) {
    .navbar-home {
        font-size: 2.5rem;
        letter-spacing: 0.3rem;
    };
};
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