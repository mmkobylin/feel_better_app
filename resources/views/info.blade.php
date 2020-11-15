@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")
        
        @include("partials/info")
        @include("partials/links")

        @include("partials/title")
        @include("partials/images")
    @endsection
