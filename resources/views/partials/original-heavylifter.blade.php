<section>
    <h3 id="subtitle2"> 
        <span id=span3 style="display: block">Tell me more! </span>
        <span id=span4 style="display: none">This is how is works! </span>
    </h3>
    <div id="paragraph2" style="display: none"> 
        <p> Maybe you just just got most of your ducks in order. Maybe it is the other way around, you used to and now they seem to be having a rave. Maybe you just need something to keep you in the routine. <br>
            This is what I created a <a class="navbar-brand" href="/heavylifter">HEAVYLIFTER</a> for. <br><br>
            I created a list of checking boxes, that you might tick, and get the score you had after each day. 
            It is ok if some of them don't apply. This is your journey.</p>
            <h4 id="subtitle1"> Not for you? </h4>
            <p id=span2 style="display: none">
            But what if you are thinking... nah, this sounds good, but I know I feel good only when I sleep 4 hours and do all the food prep in the world! This does not seem to match my needs at all! <br>
            Well worry not, with thought of you and adventures spirits, I had created a questionare:
            <br><a class="nav-home" id="hideaway" href="/heavy-custom">Pick your own adventure?!</a>
            <br>Please use it and have fun, who am I to tell you how to live your life?
        </p>
    </div>
</section>

<section>
    {{-- creating the form --}}
    <form class="form-control" method="POST" action="heavylifter">
    
        <h4>Did you...<h4>
         <label class="container">done some self care?
            <input type="checkbox" name="self-love" value="1"/>
            <span class="checkmark"></span>
        </label>

        <label class="container">help others?
            <input type="checkbox" name="help" value="1"/>
            <span class="checkmark"></span>
        </label> 
       
        <label class="container">eaten healthier?
            <input type="checkbox" name="food" value="1"/>
            <span class="checkmark"></span>
        </label>

        <label class="container">gave yourself fair chance to have decent sleep?
            <input type="checkbox" name="sleep" value="1"/>
            <span class="checkmark"></span>
        </label>
        <label class="container">stayed sober?
            <input type="checkbox" name="sober" value="1"/>
            <span class="checkmark"></span>
        </label>
        <label class="container">exercised?
            <input type="checkbox" name="exercise" value="1"/>
            <span class="checkmark"></span>
        </label>
        {{-- here goes the form --}}
        <button class="button" id="span1" style="display: block" 
            type="submit" name="formSubmit" value="Submit">Submit!</button>
    </form>
    <p id='paragraph1' style="display: none">
    {{-- Here go the results --}}
    if statement
    </p>
</section>

