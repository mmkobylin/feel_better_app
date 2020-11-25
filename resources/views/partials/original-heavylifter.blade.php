<h2>Check on yourself!</h2>

{{-- hide if it form is not posted --}}
<aside class="results" <?php if (isset($_POST["formSubmit"]) === false ){ ?> hidden <?php } ?>>
{{-- Here go the results --}}
    @php
        
        //collecting all the points
        $total = (
            +isset($_POST["action1"])+ 
            +isset($_POST["action2"])+
            +isset($_POST["action3"])+
            +isset($_POST["action4"])+
            +isset($_POST["action5"])+
            +isset($_POST["action6"])
        );       

        echo "The total amount of points for the day is... " . $total . "!"; 
        
        echo "<br>";

        //-- comment showing with results --}}
        if ($total === 0) {
            echo "It's ok! Bet today was tough! Tomorrow is another day. In a meantime, be nice to yourself.";
        } elseif ( $total > 0 && $total <= 2 ) {
            echo "Well done, every little step counts!";
        } elseif ($total > 2 && $total <= 4 ) {
            echo "That's an excellent progress. Keep going!";
        } elseif ($total > 4 ) {
            echo "Amazing job! Look at you go!";
        }
    @endphp
</aside>

<section class="form" class="results" <?php if (isset($_POST["formSubmit"]) !== false ){ ?> hidden <?php } ?>>
    {{-- creating the form --}}
    <form method="POST" action="heavylifter">
    
        <h3>Did you...<h3>

        {{-- I am using fieldset for group of related elements in the form  --}}
        <fieldset class="card-body">            
            {{-- Cross-Site Request Forgery Token --}}

             @csrf
            <div class='column'>
                <label class="container"><sup>done some self care?</sup>
                    <input type="checkbox" name="action1" value="1"/>
                    <span class="checkmark"></span>
                </label>

                <label class="container"><sup>helped others?</sup>
                    <input type="checkbox" name="action2" value="1"/>
                    <span class="checkmark"></span>
                </label> 
            
                <label class="container"><sup>eaten healthier?</sup>
                    <input type="checkbox" name="action3" value="1"/>
                    <span class="checkmark"></span>
                </label>
            </div>

            <div class='column'>

                <label class="container"><sup>had a decent sleep?</sup>
                    <input type="checkbox" name="action4" value="1"/>
                    <span class="checkmark"></span>
                </label>
                <label class="container"><sup>stayed sober?</sup>
                    <input type="checkbox" name="action5" value="1"/>
                    <span class="checkmark"></span>
                </label>
                <label class="container"><sup>exercised?</sup>
                    <input type="checkbox" name="action6" value="1"/>
                    <span class="checkmark"></span>
                </label>
            </div>
        
            <button type="submit" id="subtitle1" style="margin-right:25%" name="formSubmit" value="Submit">Submit!</button>
             </fieldset>
        </form>        
</section>

<section>
    <h4 id="subtitle2"> 
        <span id=span3 style="display: block">Tell me more! </span>
        <span id=span4 style="display: none">Got it, thanks! </span>
    </h4>

    <p id="paragraph2" style="display: none">
        Maybe you just just got most of your ducks in order. Maybe it is the other way around, you used to and now they seem to be having a rave. Maybe you just need something to keep you in the routine. <br>
        This is what I created a <a class="link" href="/heavylifter">HEAVYLIFTER</a> for. <br>
        I created a items to be checked off on a list every day, like part of a healthier daily routine.
        You get the score you had after each day. 
        It is ok if some of items don't apply. This is your journey. 
        If you prefer to <br><a class="nav-home link" href="/form">pick your own adventure</a><br>
        Just click on link and put some of your own ideas of things that will make you feel good!
    </p>
</section>