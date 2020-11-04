@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")
        <p>      
                Welcome <br>

                @foreach (App\Models\Heavylifter::all()->take(1) as $ideas ) 

                    <label class="container">{{$ideas->index()}}

                @endforeach

        </p>


    @endsection

