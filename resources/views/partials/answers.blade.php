<h1>We've got here</h2>
<section>
    {{-- creating the form --}}
    <form class="form-control" method="POST" action="results">
    
        <h3>Did you...<h3>

        {{-- I am using fieldset for group of related elements in the form  --}}
            <fieldset class="card-body" >
            
            @foreach (App\Models\Heavylifter::all()->take(1) as $idea1 ) 

            {{-- Cross-Site Request Forgery Token --}}
                @csrf
                    <label class="container">{{$idea1->pluck('idea1')->toArray()[0]}}
                        <input type="checkbox" name="action1" value="1"/>
                        <span class="checkmark"></span>
                    </label>


                    <button class="button" id="subtitle1" style="display: block" 
                    type="submit" name="formSubmit" value="Submit">Submit!</button>
                </fieldset>
            </form>
            
            @endforeach

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
            <section id="span2" <?php if (isset($_POST["formSubmit"]) === false ){ ?> hidden <?php } ?>>
            {{-- Here go the results --}}
                <?php
                    echo "The total amount of points for the day is... " . $total ?? '' . "!"; 
                    {{-- isset($_POST["formSubmit"]) ? print ($_POST["action1"]) + ($_POST["action2"]) + ($_POST["action3"]) + ($_POST["action4"]) + ($_POST["action5"]) + ($_POST["action6"])) : NULL;  --}}
                    
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
        </section>

