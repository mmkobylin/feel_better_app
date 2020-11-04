@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")
          <form class="form-control" method="POST" action="customised-heavylifter"
        >
        {{ csrf_field() }}
        <fieldset>
            <label class="container">
            <?php echo $allActions ?? ''[0]; ?>
                <input type="checkbox" name="action1" value="1"
                <?php if ($allActions ?? ''[0] === NULL){ ?> hidden <?php } ?>>
                <span class="checkmark"></span>
            </label>
            <br>

            <label class="container">
            <?php echo $allActions ?? ''[1]; ?>
                <input type="checkbox" name="action2" value="1"
                <?php if ($allActions ?? ''[1] === NULL || empty($allActions ?? ''[1] === true)) { ?> hidden <?php } ?>>
                <span class="checkmark"></span>
            </label>
            <br>

            <label class="container">
            <?php echo $allActions ?? ''[2]; ?>
                <input type="checkbox" name="action3" value="1"
                <?php if ($allActions ?? ''[2] === NULL || empty($allActions ?? ''[2] === true)) { ?> hidden <?php } ?>>
                <span class="checkmark"></span>
            </label>
            <br>

            <label class="container">

                <?php echo $allActions ?? ''[3]; ?>
                <input type="checkbox" name="action4" value="1"
                <?php if ($allActions ?? ''[3] === NULL || empty($allActions ?? ''[3] === true)) { ?> hidden <?php } ?>>
                <span class="checkmark"></span>
            </label>
            <br>

            <label class="container">
                <?php echo $allActions ?? ''[4]; ?>
                <input type="checkbox" name="action5" value="1"
                <?php if ($allActions ?? ''[4] === NULL || empty($allActions ?? ''[4] === true)) { ?> hidden <?php } ?>>
                <span class="checkmark"></span>
            </label>
            <br>

            <label class="container">
                <?php echo $allActions ?? ''[5]; ?>
                <input type="checkbox" name="action6" value="1"
                <?php if ($allActions ?? ''[4] === NULL || empty($allActions ?? ''[5] === true)) { ?> hidden <?php } ?>>
                <span class="checkmark"></span>
            </label>
            <br>
            
            <input type="submit">

        </fieldset>
    </form>  
    <?php 
        collect(array_push($allActions ?? '', $action1, $action2, $action3, $action4, $action5, $action6));
    
        //the values are def. pushed into the array
        if (empty($allActions ?? ''[2] === true)) {
            echo 'three is empty';
        } else {
            echo $allActions ?? ''[2];
        }

        if (empty($allActions ?? ''[1] === true)) {
            echo 'two is empty';
        } else {
            echo $allActions ?? ''[1];
        }
    ?>
</section>

    @endsection

