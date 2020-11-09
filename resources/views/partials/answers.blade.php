<section>
    {{-- GET avalible thought here, and connects right to final screen --}}
    <form class="form-control" method="get" action="results">
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
            
            <input type="submit">
        </fieldset>
    </form>

    <?php
        //collecting all the points
        $total = (
            +(isset($_GET["answer"]) ? ($_GET["answer"]): 0) + 
            +(isset($_GET["answer"]) ? ($_GET["answer"]): 0) +
            +(isset($_GET["answer"]) ? ($_GET["answer"]): 0) +
            +(isset($_GET["answer"]) ? ($_GET["answer"]): 0) +
            +(isset($_GET["answer"]) ? ($_GET["answer"]): 0) +
            +(isset($_GET["answer"]) ? ($_GET["answer"]): 0)
        );         
    ?>
    {{-- hide if it form is not GETed --}}
    <section id="span2" <?php if (isset($_GET["formSubmit"]) === false ){ ?> hidden <?php } ?>>
    {{-- Here go the results --}}
        <?php
            echo "The total amount of points for the day is... " . $total ?? '' . "!"; 
            {{-- isset($_GET["formSubmit"]) ? print ($_GET["action"]) + ($_GET["action"]) + ($_GET["action"]) + ($_GET["action"]) + ($_GET["action"]) + ($_GET["action"])) : NULL;  --}}
            
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
    {{-- if no action submitted - shows encouraging message --}}
    <aside>
        @php 
            if (isset($_GET['formSubmit']) && $total === 0)  {
                echo "It's ok! Bet today was tough! Tomorrow is another day. In a meantime, be nice to yourself.";
            }
        @endphp
    </aside>

</form>