@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")

        {{-- @include("partials/title") --}}
        @include("partials/form")
        @include("partials/results")
        {{-- @include("partials/links") --}}

    @endsection
