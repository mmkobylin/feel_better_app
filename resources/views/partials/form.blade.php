<section>
    <h3 id="subtitle2"> 
        <span id=span3 style="display: block">Tell me more! </span>
        <span id=span4 style="display: none">This is how is works! </span>
    </h3>
    <div id="paragraph2" style="display: none"> 
        <p> Maybe you just just got most of your ducks in order. Maybe it is the other way around, you used to and now they seem to be having a rave. Maybe you just need something to keep you in the routine. <br>
            This is what I created a <a class="nav" href="/heavylifter">HEAVYLIFTER</a> for.
            This is 'pick your own adventure' project. Just write your suggestions for things that will make you feel better, and submit it when you ready'

            Then checking boxes will appear. Tick the ones that got done and get the score you after each day. 
        </p>
        <h4 id="subtitle1"> Not for you? </h4>
        <p>But what if you have no idea what will make you better? For these tried-and-true methods head
            <br><a class="nav" href="/heavylifter">HERE</a>, where I put few ideas supported by research. 
        </p>
    </div>
</section>

<section>
    {{-- creating the form --}}
    <form class="form-control" method="GET" action="heavy-custom">  
        {{-- using fieldset for group of related elements in the form  --}}
        <fieldset class="card-body">
        {{-- Cross-Site Request Forgery Token --}}
            @csrf
            <section>
            {{-- this is  where we collect the Action's names--}}
                <div class="input-field">
                    <label>Action 1:</label><br>
                    {{-- this is where I declare name and type and make sure name length is sensible --}}
                    <input type="text" name="action1" maxlength="40" required>
                </div>
                
                <div class="input-field">
                    <label>Action 2:</label><br>
                    <input type="text" name="action2" maxlength="40" required>
                </div>

                <div class="input-field">
                    <label>Action 3:</label><br>
                    <input type="text" name="action3" maxlength="40" required>
                </div>
                
                <div class="input-field">
                    <label>Action 4:</label><br>
                    <input type="text" name="action4" maxlength="40" required>
                </div>

                <div class="input-field">
                    <label>Action 5:</label><br>
                    <input type="text" name="action5" maxlength="40" required>
                </div>

                <div class="input-field">
                    <label>Action 6:</label><br>
                    <input type="text" name="action6" maxlength="40" required>
                </div>

            </section>   
            {{-- pressing this button collects the data --}}
            <button class="button" type="submit">Ready?</button>
        </fieldset>
    </form>