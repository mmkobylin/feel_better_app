<h2>Check on yourself!</h2>

{{-- hide if it form is not posted --}}
<aside <?php if (isset($_POST["formSubmit"]) === false ){ ?> hidden <?php } ?>>
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
        } elseif ( $total > 0 && $total < 2 ) {
            echo "Well done, every little step counts!";
        } elseif ($total >= 2 && $total < 4 ) {
            echo "That's an excellent progress. Keep going!";
        } elseif ($total > 4 ) {
            echo "Amazing job! Look at you go!";
        }
    @endphp
</aside>

<section class="form-control" <?php if (isset($_POST["formSubmit"]) !== false ){ ?> hidden <?php } ?>>
 
    {{-- creating the form --}}
    <form  method="POST" action="results">
    {{-- I am using fieldset for group of related elements in the form  --}}
            
            
            @foreach (App\Models\Heavylifter::all()->take(1) as $idea ) 
            
                <h3>Did you...<h3>
                    <div class="column">
                    {{-- Cross-Site Request Forgery Token --}}
                    @csrf
                        <label class="container">
                            <sup>{{$idea->pluck('idea1')->last()}}</sup>
                            <input type="checkbox" name="action1" value="1"/>
                            <span class="checkmark"
                            <?php if ($idea->pluck('idea1')->last() === NULL ){ ?> hidden <?php } ?>></span></span></span>
                        </label>

                        <br>

                        <label class="container">   
                            <sup>{{$idea->pluck('idea2')->last()}}</sup>
                            <input type="checkbox" name="action2" value="1"/>
                            <span class="checkmark"
                            <?php if ($idea->pluck('idea2')->last() === NULL ){ ?> hidden <?php } ?>></span></span></span>
                        </label>

                        <br>
                        
                        <label class="container">    
                            <sup>{{$idea->pluck('idea3')->last()}}</sup>
                            <input type="checkbox" name="action3" value="1"/>
                            <span class="checkmark"
                            <?php if ($idea->pluck('idea3')->last() === NULL ){ ?> hidden <?php } ?>></span></span></span>
                            
                        </label>

                    </div>

                    <div class="column">
                        
                        <label class="container">  
                            <sup>{{$idea->pluck('idea4')->last()}}</sup>
                            <input type="checkbox" name="action4" value="1"/>
                            <span class="checkmark"
                            <?php if ($idea->pluck('idea4')->last() === NULL ){ ?> hidden <?php } ?></span>
                        </label>

                        <br>
                        
                        <label class="container">
                            <sup>{{$idea->pluck('idea5')->last()}}</sup>                    
                            <input type="checkbox" name="action5" value="1"/>
                            <span class="checkmark" 
                            <?php if ($idea->pluck('idea5')->last() === NULL ){ ?> hidden <?php } ?>></span></span>
                        </label>

                        <br>
                        
                        <label class="container">
                            <sup>{{$idea->pluck('idea6')->last()}}</sup>
                            <input type="checkbox" name="action6" value="1"/>
                            <span class="checkmark"
                            <?php if ($idea->pluck('idea6')->last() === NULL ){ ?> hidden <?php } ?>></span>
                        </label>

                    </div>
        
                    <button type="submit" name="formSubmit" value="Submit">Submit!</button>
                </fieldset>
            </form>
            
        @endforeach
        
    </section>
        
       