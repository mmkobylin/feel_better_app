@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")
        <p>      
                Welcome <br>

                {{-- @foreach (App\Models\Heavylifter::all()->take(1) as $ideas )  --}}

                    <h1>Hello World</h1>
                    
                    {{-- <label class="container">{{$ideas->index()}} --}}

                @endforeach

        </p>


    @endsection

