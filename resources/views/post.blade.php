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



<!--
@section('content')
    <div class="float-container">
        <div class="main">
            <h2><b>Post a New Recipe</b></h2>
            {{-- This form will take in a recipe information from a user --}}
            <form action="{{ route('post') }}" method="post" class="m-2">
                @csrf

                {{-- Title Input --}}
                @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <label for="title" class="sr-only">Title</label>
                <input type="text" name="title" id="title" placeholder="title" class="bg-gray-100 border-2 p-4 rounded-lg @error('name') border-red-500 @enderror">

                {{-- Ingredient Input --}}
                <form action="{{ route('postIngredient') }}" method="post" class="m-2 chip">
                    @csrf
                    @error('ingredientMeasure')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    @error('ingredient')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="chip">
                        <label for="ingredientMeasure" class="sr-only">Ingredient Measurement</label>
                        <input type="text" name="ingredientMeasure" id="ingredientMeasure" placeholder="tsp" class="bg-gray-100 border-2 p-4 rounded-lg @error('name') border-red-500 @enderror">
                    </div>
                    <div class="chip">
                        <label for="ingredient" class="sr-only">Ingredient</label>
                        <input type="text" name="ingredient" id="ingredient" placeholder="ingredient" class="bg-gray-100 border-2 p-4 rounded-lg @error('name') border-red-500 @enderror">
                    </div>
                </form>
                <div class="chips" id="ingredientChips">
                    <p>Your ingredients: Click one to delete it</p>
                    @if(isset(auth()->user()->recipe) && !empty(auth()->user()->recipe))
                        @foreach (auth()->user()->recipe as $ingredient)
                            <form action="{{ route('postIngredientChips') }}" method="post" class="m-2 chip">
                                @csrf
                                <div class="chip">
                                    <input type="submit" class="chip" name="accountChip" value="{{ $restriction }}"></input>
                                </div>
                            </form>
                        @endforeach
                    @else
                    @endif
                </div>

                {{-- Instructions Input --}}
                <form action="{{ route('postIngredient') }}" method="post" class="m-2 chip">
                    @csrf
                    @error('instruction')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    <div class="chip">
                        <label for="instruction" class="sr-only">Instruction</label>
                        <input type="text" name="instruction" id="instruction" placeholder="instruction" class="bg-gray-100 border-2 p-4 rounded-lg @error('name') border-red-500 @enderror">
                    </div>
                </form>
                <div class="chips" id="ingredientChips">
                    <p>Your ingredients: Click one to delete it</p>
                    @if(isset(auth()->user()->recipe) && !empty(auth()->user()->recipe))
                        @foreach (auth()->user()->recipe as $ingredient)
                            <form action="{{ route('postIngredientChips') }}" method="post" class="m-2 chip">
                                @csrf
                                <div class="chip">
                                    <input type="submit" class="chip" name="accountChip" value="{{ $restriction }}"></input>
                                </div>
                            </form>
                        @endforeach
                    @else
                    @endif
                </div>

                {{-- Image upload --}}
                <div>
                @error('Image')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <label for="Image">Image</label>
                <input type="file" id="ImageSubmit" accept="image/*">
                </div>

                <input type="submit" class="addRestriction chip" value="Post Recipe"></input>
            </form>


        </div>
    </div>
@endsection
-->
