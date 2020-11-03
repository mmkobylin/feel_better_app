@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")
        <form class="form-control" method="POST" action="customised-heavylifter">
            <fieldset>
                <label class="container">
                <?php echo $_GET["action1"]; ?>
                    <input type="checkbox" name="action1" value="1"
                >
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

    @endsection

