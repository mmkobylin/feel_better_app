@extends("app")

        <link type="text/css" href="{{ url('sass/app.scss') }}" />


    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")

        @include("partials/title")

        @include("partials/actions")

    @endsection
