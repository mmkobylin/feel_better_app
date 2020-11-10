<h1>Results</h1>
<?php error_reporting (E_ALL ^ E_NOTICE);

    //declare an empty array for variables
    $allActions = [];

     //declare variables that I POST from POST method
    $action1=$_POST['idea1'];
    $action2=$_POST['idea2'];
    $action3=$_POST['idea3'];
    $action4=$_POST['idea4']; 
    $action5=$_POST['idea5'];
    $action6=$_POST['idea6'];

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
    {{-- POST avalible thought here, and connects right to final screen --}}
    <form class="form-control" method="POST" action="results"
        <?php if (empty($allActions) === true){ ?> hidden <?php } ?>>
        <h2>Let's see how well you've done!</h2>
        {{ csrf_field() }}
        <fieldset>
            <?php 
                foreach ($allActions as $value) { ?> 
                <label class="container"> 
                
                <input type="checkbox" name="answer" value="1">
                    <span class="checkmark"></span>
                    <?php echo "$value <br>"; ?> 
                </label>
            <?php } ?>
            
            <button type="submit">Submit</button>
        </fieldset>
    </form>
</section>

    <?php
        //collecting all the points
        $total = (
            +(isset($_POST["answer"]) ? ($_POST["answer"]): 0) + 
            +(isset($_POST["answer"]) ? ($_POST["answer"]): 0) +
            +(isset($_POST["answer"]) ? ($_POST["answer"]): 0) +
            +(isset($_POST["answer"]) ? ($_POST["answer"]): 0) +
            +(isset($_POST["answer"]) ? ($_POST["answer"]): 0) +
            +(isset($_POST["answer"]) ? ($_POST["answer"]): 0)
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
            if ($total = 0 ){
                echo "It's ok! Bet today was tough! Tomorrow is another day. In a meantime, be nice to yourself.";
            }
            elseif ($total > 0 && $total < 2 ) {
                echo "Well done, every little step counts!";
            } elseif ($total >= 2 && $total < 4 ) {
                echo "That's an excellent progress. Keep going!";
            } elseif ($total > 4 ) {
                echo "Amazing job! Look at you go!";
            }
        ?> 
    </section>
