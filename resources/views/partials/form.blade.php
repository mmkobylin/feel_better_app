<section>
    <form class="form-control" method="POST" action="results">
        {{ csrf_field() }}

        <h2>Here is a form for your ideas! </h2>

        {{-- using fieldset for group of related elements in the form  --}}

        <fieldset>

            <label> Action 1: </label> <br>
            <input type="text" name="idea1"><br>
            <label> Action 2: </label> <br>
            <input type="text" name="idea2"><br>
            <label> Action 3: </label> <br>
            <input type="text" name="idea3"><br>
            <label> Action 4: </label> <br>
            <input type="text" name="idea4"><br>
            <label> Action 5: </label> <br>
            <input type="text" name="idea5"><br>
            <label> Action 6: </label> <br>
            <input type="text" name="idea6"><br>

            <button type="submit">Submit</button>
        </fieldset>
    </form> 
<section>