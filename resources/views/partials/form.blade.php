<section class="form">
    <form method="POST" action="results">
        {{ csrf_field() }}

        <h2>Here is a form for your ideas! </h2>

        {{-- using fieldset for group of related elements in the form  --}}

        <fieldset class="form-control">
            <div class="column">

                <label> Action 1: </label>
                <input type="text" name="idea1"><br>
                <label> Action 2: </label>
                <input type="text" name="idea2"><br>
                <label> Action 3: </label>
                <input type="text" name="idea3"><br>
            </div>
            
            <div class="column">

                <label> Action 4: </label>
                <input type="text" name="idea4"><br>
                <label> Action 5: </label>
                <input type="text" name="idea5"><br>
                <label> Action 6: </label>
                <input type="text" name="idea6"><br>
            </div>
            
            <button class="button2" type="submit">Submit</button>
        </fieldset>
    </form> 
</section>