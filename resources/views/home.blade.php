@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    <header>
            @include("partials/header")

    </header>
    @section("content")
        @include("partials/images")
        @include("partials/intro")
    @endsection
