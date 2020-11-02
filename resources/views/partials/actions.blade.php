<section>
    <h3 id="subtitle1"> 
        <span id=span1 style="display: block">Tell me more! </span>
        <span id=span2 style="display: none">Got it, thanks! </span>
    </h3>
    <p id='paragraph1' style="display: none">
    Let's say you have been in a dark place. Might be for a week. Might be for a month, or you really don't know for how long.
    But it has been attrocious. You have eaten all takeaway. Or opposite, nearly nothing at all. You don't remember when you washed your hair. The house is a mess. You still are not exactly energetic, but the reality had come knocking on the door. <br>
    First of all, I feel you. This is what the <a class="navbar" href="/lightbringer">LIGHTBRINGER</a>. is design for! I wanted to create an app where by simple and cheap or free steps you are able to feel just a little bit better. Maybe not every day, but often enough.</p>
    </p>
    <p>If you click 'Show suggestions' it will show couple feel-good ideas. When you are done, just tick the boxes and submit the form!</p>
</section>

<h3 id="subtitle2"> 
    <span id=span3 style="display: block">Show me suggestions! </span>
    <span id=span4 style="display: none">Try some of these!</span>
</h3>

<section id style="display: none">
    @foreach (App\Models\Action::all()->take(3) as $action ) 

        <label>{{$action->randomiser()}}</label><br>

    @endforeach

    <p>Don't like the ideas? Just refresh the page and try again!</p>

</section>

