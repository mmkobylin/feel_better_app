<h3 class="subtitle6" id="subtitle2" > 
    <span id=span3 style="display: block">Show suggestions! </span>
    <span id=span4 style="display: none">Hide them!</span>
</h3>


<section class="form" class="form" id="paragraph2" style="display: none">
    <form class="form-control" method="POST" action="lightbringer"> 
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
            <button class="button" id="subtitle1" style="display: block" 
            type="submit" name="formSubmit" value="Submit">Submit!</button>
            
        </fieldset>
        <br><br>

        <h4 class="subtitle5">Wanna try something different? Just submit form, and click on 'Show suggestions!' again!</h4>

    </form> 
</section>

{{-- $total counts the points --}}

<section <?php if (isset($_POST["formSubmit"]) === false ){ ?> hidden <?php } ?>>
    {{-- total displays --}}
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
</section>   

<section>
    <h3 id="subtitle1"> 
        <span id=span1 style="display: block">How it works</span>
        <span id=span2 style="display: none">Got it, thanks! </span>
    </h3>
    <p id='paragraph1'>
        Let's say you have been in a dark place. Might have been for a week, a month, or you've just lost track of how long it's been.
        'You've eaten nothing but takeaway/junk food, or done the opposite and barely eaten at all. You don't remember when you washed your hair. The house is a mess. You're really lacking energy.... but then the reality had come knocking on the door. <br>
        First of all, I feel you. This is what the LIGHTBRINGER is designed for! I wanted to create an app where by simple and cheap or free steps you are able to feel just a little bit better. Maybe not every day, but often enough.</p>    <p>If you click 'Show suggestions' it will show couple feel-good ideas. When you are done, just tick the boxes and submit the form!</p>
</section>