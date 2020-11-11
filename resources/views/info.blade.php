@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")
        
        @include("partials/title")

        @include("partials/images")
        @include("partials/info")
        @include("partials/links")

    @endsection
