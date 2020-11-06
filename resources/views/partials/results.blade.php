<h1>Results</h1>
<?php error_reporting (E_ALL ^ E_NOTICE);

    //declare an empty array for variables
    $allActions = [];

     //declare variables that I get from GET method
    $action1=$_GET['idea1'];
    $action2=$_GET['idea2'];
    $action3=$_GET['idea3'];
    $action4=$_GET['idea4']; 
    $action5=$_GET['idea5'];
    $action6=$_GET['idea6'];

    //this is where I collect the variables
    
    if (empty($action1) !== true ) {
        collect(array_push($allActions, $action1));
    } 
    
    if (empty($action2) !== true ) {
        collect(array_push($allActions, $action2));
    } 
    
    if (empty($action3) !== true ) {
        collect(array_push($allActions, $action3));
    } 
    
    if (empty($action4) !== true ) {
        collect(array_push($allActions, $action4));
    } 
    
    if (empty($action5) !== true ) {
        collect(array_push($allActions, $action5));
    } 
    
    if (empty($action6) !== true ) {
        collect(array_push($allActions, $action6));
    } 

    //the values are def. pushed into the array
?>

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
            <br><a class="nav" href="/heavylifter">HERE</a>, where I put a few ideas supported by research. 
        </p>
    </div>
</section>

<section>
    {{-- creating the form --}}

    <form class="form-control" method="POST" action="form"
    {{-- display if the list is empty. --}}

    <?php if (empty($allActions) !== true){ ?> hidden <?php } ?>>
        {{ csrf_field() }}

        <h2>Here is a form for your ideas! </h2>

        {{-- using fieldset for group of related elements in the form  --}}

        <fieldset>

            <label> Action 1: </label> <br>
            <input type="text" name="idea1"><br>
            <label> Action 2: </label> <br>
            <input type="text" name="idea2"><br>
            <label> Action 3: </label> <br>
            <input type="text" name="idea3"><br>
            <label> Action 4: </label> <br>
            <input type="text" name="idea4"><br>
            <label> Action 5: </label> <br>
            <input type="text" name="idea5"><br>
            <label> Action 6: </label> <br>
            <input type="text" name="idea6"><br>

            <button type="submit">Submit</button>
        </fieldset>
    </form> 

    <form class="form-control" method="POST" action=""
        <?php if (empty($allActions) === true){ ?> hidden <?php } ?>>
        <h2>Let's see how well you've done!</h2>
        {{ csrf_field() }}
        <fieldset>
            <?php 
                foreach ($allActions as $value) { ?> 
                <label class="container"> 
                
                <input type="checkbox" name="action" value="1">
                    <span class="checkmark"></span>
                    <?php echo "$value <br>"; ?> 
                </label>
            <?php } ?>
            
            <input type="submit">
        </fieldset>
    </form>

    <?php
        //collecting all the points
        $total = (
            +(isset($_POST["action"]) ? ($_POST["action"]): 0) + 
            +(isset($_POST["action"]) ? ($_POST["action"]): 0) +
            +(isset($_POST["action"]) ? ($_POST["action"]): 0) +
            +(isset($_POST["action"]) ? ($_POST["action"]): 0) +
            +(isset($_POST["action"]) ? ($_POST["action"]): 0) +
            +(isset($_POST["action"]) ? ($_POST["action"]): 0)
        );         
    ?>
    {{-- hide if it form is not posted --}}
    <section id="span2" <?php if (isset($_POST["formSubmit"]) === false ){ ?> hidden <?php } ?>>
    {{-- Here go the results --}}
        <?php
            echo "The total amount of points for the day is... " . $total ?? '' . "!"; 
            {{-- isset($_POST["formSubmit"]) ? print ($_POST["action"]) + ($_POST["action"]) + ($_POST["action"]) + ($_POST["action"]) + ($_POST["action"]) + ($_POST["action"])) : NULL;  --}}
            
            ?> <br> <?php
            //-- comment showing with results --}}
            if($total > 0 && $total < 2 ) {
                echo "Well done, every little step counts!";
            } elseif ($total >= 2 && $total < 4 ) {
                echo "That's an excellent progress. Keep going!";
            } elseif ($total > 4 ) {
                echo "Amazing job! Look at you go!";
            }
        ?> 
    </section>
    {{-- if no action submitted - shows encouraging message --}}
    <aside>
        @php 
            if (isset($_POST['formSubmit']) && $total === 0)  {
                echo "It's ok! Bet today was tough! Tomorrow is another day. In a meantime, be nice to yourself.";
            }
        @endphp
    </aside>

</form>
</section>
