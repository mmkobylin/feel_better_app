<?php error_reporting (E_ALL ^ E_NOTICE);

    //declare an empty array for variables
    $allActions = [];

     //declare variables that I get from GET method
    $action1=$_GET['name1'];
    $action2=$_GET['name2'];
    $action3=$_GET['name3'];
    $action4=$_GET['name4']; 
    $action5=$_GET['name5'];
    $action6=$_GET['name6'];
    
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
            <br><a class="nav" href="/heavylifter">HERE</a>, where I put few ideas supported by research. 
        </p>
    </div>
</section>

<section>
    {{-- creating the form --}}
    <form action="heavy-custom" method="get">
        {{ csrf_field() }}

        {{-- using fieldset for group of related elements in the form  --}}
        <fieldset>

            <label> Action 1: <input type="text" name="action1"><br></label>
            <label> Action 2: <input type="text" name="action2"><br></label>
            <label> Action 3: <input type="text" name="action3"><br></label>
            <label> Action 4: <input type="text" name="action4"><br></label>
            <label> Action 5: <input type="text" name="action5"><br></label>
            <label> Action 6: <input type="text" name="action6"><br></label>

            <input type="submit">
        </fieldset>

    </form> 

    <form class="form-control" method="POST" action="customised-heavylifter">
        {{ csrf_field() }}
        <fieldset>
            <label class="container">
            <?php echo $_GET["action1"]; ?>
                <input type="checkbox" name="action1" value="1">
                <span class="checkmark"></span>
            </label>
            <br>

            <label class="container">
            <?php echo $_GET["action2"]; ?>
                <input type="checkbox" name="action2" value="1">
                <span class="checkmark"></span>
            </label>
            <br>

            <label class="container">
            <?php echo $_GET["action3"]; ?>
                <input type="checkbox" name="action3" value="1">
                <span class="checkmark"></span>
            </label>
            <br>
            <label class="container">
            <?php echo $_GET["action4"]; ?>
                <input type="checkbox" name="action4" value="1">
                <span class="checkmark"></span>
            </label>
            <br>
            <label class="container"><?php echo $_GET["action5"]; ?>
                <input type="checkbox" name="action5" value="1">
                <span class="checkmark"></span>
            </label>
            <br>
            <label class="container"><?php echo $_GET["action6"]; ?>
                <input type="checkbox" name="action6" value="1">
                <span class="checkmark"></span>
            </label>
            <br>
            
            <input type="submit">

        </fieldset>
    </form>  

</section>
