@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")

        @foreach (App\Models\Action::all() AS $action)
        <h4>{{ $action->action}}</h5>
        @endforeach

        @include("partials/title")
        @include("partials/images")
        @include("partials/intro")
    @endsection
