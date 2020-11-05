@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")

        {{-- @foreach (App\Models\Action::all() AS $action)
        {{-- <h4>{{ $action->action}} </h4> --}}
        {{-- <h5>{{$action->index()[0]}}</h5> --}}
          {{-- @endforeach --}}

        @include("partials/title")
        @include("partials/images")
        @include("partials/intro") --}}
    @endsection
