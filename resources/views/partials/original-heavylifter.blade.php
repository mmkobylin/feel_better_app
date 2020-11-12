<section class="form">
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

            <button class="button2" id="subtitle1" style="display: block" 
            type="submit" name="formSubmit" value="Submit">Submit!</button>
        </fieldset>
    </form>

    <?php
        //collecting all the points
        $total = (
            +(isset($_POST["action1"]) ? ($_POST["action1"]): 0) + 
            +(isset($_POST["action2"]) ? ($_POST["action2"]): 0) +
            +(isset($_POST["action3"]) ? ($_POST["action3"]): 0) +
            +(isset($_POST["action4"]) ? ($_POST["action4"]): 0) +
            +(isset($_POST["action5"]) ? ($_POST["action5"]): 0) +
            +(isset($_POST["action6"]) ? ($_POST["action6"]): 0)
        );         
    ?>
    {{-- hide if it form is not posted --}}
    <div <?php if (isset($_POST["formSubmit"]) === false ){ ?> hidden <?php } ?>>
    {{-- Here go the results --}}
        <?php
            echo "The total amount of points for the day is... " . $total . "!"; 
            {{-- isset($_POST["formSubmit"]) ? print ($_POST["action1"]) + ($_POST["action2"]) + ($_POST["action3"]) + ($_POST["action4"]) + ($_POST["action5"]) + ($_POST["action6"])) : NULL;  --}}
            
            ?> <br> <?php
            //-- comment showing with results --}}
            if ($total === 0) {
                echo "It's ok! Bet today was tough! Tomorrow is another day. In a meantime, be nice to yourself.";
            } elseif ( $total > 0 && $total < 2 ) {
                echo "Well done, every little step counts!";
            } elseif ($total >= 2 && $total < 4 ) {
                echo "That's an excellent progress. Keep going!";
            } elseif ($total > 4 ) {
                echo "Amazing job! Look at you go!";
            }
        ?> 
    </div>
</section>
<section>
    <h3 id="subtitle2"> 
        <span id=span3 style="display: block">Tell me more! </span>
        <span id=span4 style="display: none">This is how is works! </span>
    </h3>
    <div id="paragraph2" style="display: none"> 
        <p> Maybe you just just got most of your ducks in order. Maybe it is the other way around, you used to and now they seem to be having a rave. Maybe you just need something to keep you in the routine. <br>
            This is what I created a heavylifter for.
            I created a list of checking boxes, that you might tick, and get the score you had after each day. 
            It is ok if some of them don't apply. This is your journey.</p>
            <h4> Not for you? </h4>
            <p> But what if you are thinking... nah, this sounds good, but I know I feel good only when I sleep 4 hours and do all the food prep in the world! This does not seem to match my needs at all! <br>
            Well worry not, with thought of you and adventures spirits, I had created a questionare:
            <br><a class="nav link" href="/form">Pick your own adventure?!</a>
            <br>Please use it and have fun, who am I to tell you how to live your life?
        </p>
    </div>
</section>