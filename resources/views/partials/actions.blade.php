<p>Actions</p>

     @foreach (App\Models\Action::all()->take(3) as $action ) 

        <label>{{$action->randomiser()}}</label><br>

    @endforeach


