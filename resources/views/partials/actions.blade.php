<p>Actions</p>

     @foreach (App\Models\Action::all()->take(1) as $action ) 

        <label class="container">{{$action->index()}}</label>

    @endforeach


