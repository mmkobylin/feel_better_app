<h1>Results</h1>

<?php

    $total = (
        +(isset($_POST["self-love"]) ? ($_POST["self-love"]): 0) + 
        +(isset($_POST["help"]) ? ($_POST["help"]): 0) +
        +(isset($_POST["food"]) ? ($_POST["food"]): 0) +
        +(isset($_POST["exercise"]) ? ($_POST["exercise"]): 0) +
        +(isset($_POST["sleep"]) ? ($_POST["sober"]): 0) +
        +(isset($_POST["sleep"]) ? ($_POST["sleep"]): 0)
    );
    echo "The total amount of points for the day is... " . $total . "!"; 
    {{-- isset($_POST["formSubmit"]) ? print ($_POST["self-love"]) + ($_POST["help"]) + ($_POST["food"]) + ($_POST["exercise"]) + ($_POST["sober"]) + ($_POST["sleep"])) : NULL;  --}}
    ?> <br> <?php 
    if($total === 0 ) {
        echo "It's ok! Bet today was tough! Tomorrow is another day. In a meantime, be nice to yourself.";
    } elseif ($total <= 2 ) {
        echo "That's a good progress. Keep going!";
    } else {
        echo "Amazing job! Look at you go!";
    }
?> 