{{-- For Posting a New Recipe --}}
@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">
            <h2><b>Post a New Recipe</b></h2>
            <br>
            <div class="input">
                <form>
                    <label for="Title">Title</label>
                    <input type="text" id="Title" maxlength="30">
                    <br><br>
                    <label for="Ingredients">Ingredients</label>
                    <input type="text" id="Ingredients" maxlength="30">
                    <br>
                    <div class="chips" id ="ingredientChips">
                      <div class="chip">
                          Ingredient 1<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                      </div>
                    </div>
                    <br>
                    <label for="Instructions">Instructions</label>
                    <input type="text" id="Instructions" maxlength="150">
                    <br>
                    <div class="chips" id ="instructionChips">
                      <div class="chip">
                          Instruction 1<span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
                      </div>
                    </div>
                    <br>
                    <label for="Image">Image</label>
                    <input type="file" id="ImageSubmit" accept="image/*">
                    <br>
                    <input type="submit" value="Submit" class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 border-b-4 border-green-800 hover:border-green-500 rounded"/>
                </form>
            </div>
        </div>
    </div>
@endsection
