<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Feel Better</title>

        {{-- styles --}}
        
        <link href="{{ asset('/sass/app.css') }}" rel="stylesheet">
        {{-- <link rel="stylesheet" href="{{ asset('sass/app.scss') }}" /> --}}

        {{-- js link --}}

        <script defer type="text/javascript" src="{{ url('js/jquery.js') }}"></script>        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Comfortaa:wght@500&family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rokkitt&family=Salsa&display=swap" rel="stylesheet">       

    </head>

    <style>
    * {
        line-height:2rem;
    }

    a {
        text-decoration: none;
    }

    li {
        color: var(--background-primary);
        font-size:2rem;
        padding:0.6rem;
        padding-top:1.4rem;
        line-height: 0.5rem;
    }

    li:active, li:hover {
        color: var(--background-primary);
        font-weight: bolder;
    }

    li.a:active, li.a:hover {
        color: var(--background-primary);
        text-decoration:none;
    }

    #nav {
        text-align: justify;
        padding:0;
        max-height: 7rem;
    }
    #nav:after {
        content: '';
        display: inline-block;
        width: 100%;

    }
    #nav li {
        display: inline-block;
        color: var(--font-primary);
    }
    p {
        font-size: 1rem;
        line-height: 3;
    }

    #span1:active, 
#span:hover, #span2:active, 
#span:hover, #span3:active, 
#span:hover, #span4:active, 
#span:hover {
    color: var(--font-color-secondary);
    text-decoration: underline;
}

    svg {
        fill: var(--background-primary);
        height: 2rem;
        width: 2rem;
    }

    span {
        display:none;
    }

    ul li{
        display: inline;
        vertical-align: middle;
    }
    * {
    margin: 0;
    }

header {
display: grid;
grid-template-columns: 1fr;
grid-template-rows: 1fr;
background: var(--font-color-primary);


}

.header-fill {
display:none;
}

.column3 {
grid-column: 1/2;
grid-row: 1/2;
text-align: center;

}

.column4 {
grid-column: 2/3;
text-align: center;
grid-row: 1/2;
}

figure {
background: var(--font-color-primary);
height:20rem;
margin-bottom:3rem;
}

.images {
height:15rem;
width:24rem;
}

body {
display:grid;
grid-template-columns: 1fr;

}


@media only screen and (min-width: 800px) {
    .fig1 {
    width:40%;
    }

    .move {
    position: absolute;
    bottom: 1px;
    left: 0;

    }

    .header-fill {
    background: var(--font-color-primary);
    height:20rem;
    }
}



@media only screen and (min-width: 500px) {


   span {
    display:inline-block;
    }

    li {
        color: var(--background-primary);
        padding:2rem;
        font-size:2rem;
        line-height: 2rem;
    }
    };

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