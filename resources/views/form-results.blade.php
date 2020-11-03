@extends("app")

    @section("title"){{
        "Feel Better"
    }}@endsection

    @section("content")
        <form>
            {{-- taking first value from uniqueCollection--}}
            <label class="container"><?php echo $_GET["action1"]; ?>
                <input type="checkbox" name="action1" value="1">
                <span class="checkmark"></span>
            </label>

            <label class="container"><?php echo $_GET["action2"]; ?>
                <input type="checkbox" name="action1" value="1">
                <span class="checkmark"></span>
            </label>

            <label class="container"><?php echo $_GET["action3"]; ?>
                <input type="checkbox" name="action1" value="1">
                <span class="checkmark"></span>
            </label>

            <label class="container"><?php echo $_GET["action4"]; ?>
                <input type="checkbox" name="action1" value="1">
                <span class="checkmark"></span>
            </label>

            <label class="container"><?php echo $_GET["action5"]; ?>
                <input type="checkbox" name="action1" value="1">
                <span class="checkmark"></span>
            </label>

            <label class="container"><?php echo $_GET["action6"]; ?>
                <input type="checkbox" name="action1" value="1">
                <span class="checkmark"></span>
            </label>

        </form> 
    @endsection

