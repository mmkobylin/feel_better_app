<main>
    <h4 id="subtitle2"> 
        <span id=span3 style="display: block">Show suggestions! </span>
        <span id=span4 style="display: none">Hide them! </span>
    </h4>

    <section id="paragraph2" style="display: none">
        <form class="form-control2" method="POST" action="lightbringer"> 
            <h4 class="subtitle5">Try some of these... </h4>       
            {{-- Cross-Site Request Forgery Token --}}
            @csrf

                {{-- accessing Actions --}}
                @foreach (App\Models\Action::randomiser() AS $action)
                    <label class="container"><sup>{{ $action->action }}</sup>
                        <input type="checkbox" name="action[]" value="{{ $action->point }}">
                        <span class="checkmark"></span>
                    </label>
                @endforeach
                    
                {{-- <button type="submit">Submit</button> --}}
                <button class="button-light" style="display: block" 
                type="submit" name="formSubmit" value="Submit">Submit!</button>
                
                <br>
        </form> 
        
        <h4 class="subtitle5">Wanna try something different? Just submit form, and click on 'Show suggestions!' again!</h4>

    </section>

    {{-- $total counts the points --}}

    <aside <?php if (isset($_POST["formSubmit"]) === false ){ ?> hidden <?php } ?>>

        <div id="span2 total">  
            
            @php
                
                //-- $total counts the points --}}

                $total = isset($_POST["action"][0]) + isset($_POST["action"][1]) + isset($_POST["action"][2]);

                echo "The total amount of points for the day is... " . $total . "!"; 

                echo "<br>";

                //-- different message displaying depending on the total amount --}}

                if ($total === 0) {
                    echo "It's ok! Bet today was tough! Tomorrow is another day. In a meantime, be nice to yourself.";
                } elseif ($total === 1 ) {
                    echo "Well done, every little step counts!";
                } elseif ($total === 2) {
                    echo "That's an excellent progress. Keep going!";
                } elseif ($total > 2 ) {
                    echo "Amazing job! Look at you go!";
                }
            @endphp
        </div>
    </aside>   

    <section>
        <h4 id="subtitle1"> 
            <span id=span1 style="display: block">Tell me more! </span>
            <span id=span2 style="display: none">Got it, thanks! </span>
        </h4>
        <p id='paragraph1' style="display: none">
        Let's say you have been in a dark place. Might have been for a week, a month, or you've just lost track of how long it's been.
        'You've eaten nothing but takeaway/junk food, or done the opposite and barely eaten at all. You don't remember when you washed your hair. The house is a mess. You're really lacking energy.... but then the reality had come knocking on the door. <br>
        First of all, I feel you. This is what the <a class="link" href="/lightbringer">LIGHTBRINGER</a> is designed for! I wanted to create an app where by simple and cheap or free steps you are able to feel just a little bit better. Maybe not every day, but often enough.
        </p>
    </section>

</main>
