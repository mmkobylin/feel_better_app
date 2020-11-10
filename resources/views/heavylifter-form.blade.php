@import("app")

    @section("title"){{
        "Feel Better"
    }}@endsection
    
    {{-- this is where the form lives --}}
    @section("content")
        
        @include("partials/title")

        @include("partials/form")
    @endsection
