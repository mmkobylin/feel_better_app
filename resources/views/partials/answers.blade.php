<h1>Check on yourself!</h2>

    {{-- creating the form --}}
    <form class="form-control" method="POST" action="results">
    {{-- I am using fieldset for group of related elements in the form  --}}
            <fieldset class="card-body" >
            
            @foreach (App\Models\Heavylifter::all()->take(1) as $idea ) 
            
            <section <?php if ($idea->pluck('idea1')->last() === NULL ){ ?> hidden <?php } ?>>

                <h3>Did you...<h3>
                {{-- Cross-Site Request Forgery Token --}}
                    @csrf
                        <label class="container"
                        <?php if ($idea->pluck('idea1')->last() === NULL ){ ?> hidden <?php } ?>>
                        {{$idea->pluck('idea1')->last()}}
                        
                            <input type="checkbox" name="action1" value="1"/>
                            <span class="checkmark"></span>
                        </label>

                        <br><br>

                        <label class="container"
                        <?php if ($idea->pluck('idea2')->last() === NULL ){ ?> hidden <?php } ?>>   
                        {{$idea->pluck('idea2')->last()}}
                            <input type="checkbox" name="action2" value="1"/>
                            <span class="checkmark"></span>
                        </label>

                        <br><br>
                        
                        <label class="container"
                        <?php if ($idea->pluck('idea3')->last() === NULL ){ ?> hidden <?php } ?>>    
                        {{$idea->pluck('idea3')->last()}}
                            <input type="checkbox" name="action3" value="1"/>
                            <span class="checkmark"></span>
                            
                        </label>

                        <br><br>
                        
                        <label class="container"
                        <?php if ($idea->pluck('idea4')->last() === NULL ){ ?> hidden <?php } ?>>  
                        {{$idea->pluck('idea4')->last()}}
                            <input type="checkbox" name="action4" value="1"/>
                            <span class="checkmark"></span>
                        </label>

                        <br><br>
                        
                        <label class="container"
                        <?php if ($idea->pluck('idea5')->last() === NULL ){ ?> hidden <?php } ?>>
                        {{$idea->pluck('idea5')->last()}}                    
                            <input type="checkbox" name="action5" value="1"/>
                            <span class="checkmark"></span>
                        </label>

                        <br><br>
                        
                        <label class="container"
                        <?php if ($idea->pluck('idea6')->last() === NULL ){ ?> hidden <?php } ?>    
                        >{{$idea->pluck('idea6')->last()}}
                            <input type="checkbox" name="action6" value="1"/>
                            <span class="checkmark"></span>
                        </label>

                        <br><br>
        
                        <button class="button" id="subtitle1" style="display: block" 
                        type="submit" name="formSubmit" value="Submit">Submit!</button>
                    </fieldset>
                </form>
                
                @endforeach
            
            </section>
            

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
            <section <?php if (isset($_POST["formSubmit"]) === false ){ ?> hidden <?php } ?>>
            {{-- commenting results --}}
                <?php
                    echo "The total amount of points for the day is... " . $total . "!"; 
                    ?> <br> <?php 
                    if ($total === 0) {
                        echo "It's ok! Bet today was tough! Tomorrow is another day. In a meantime, be nice to yourself.";
                    } elseif ($total > 0 && $total < 2 ) {
                        echo "Well done, every little step counts!";
                    } elseif ($total >= 2 && $total < 4 ) {
                        echo "That's an excellent progress. Keep going!";
                    } elseif ($total > 4 ) {
                        echo "Amazing job! Look at you go!";
                    }
                    ?> <br>    
            </section>

