{{-- For showing a single Recipe --}}
@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">

            {{--Get a random Recipe and Show it--}}
            @php
                use App\Models\Recipe;

                // Function to search for keywords in recipe
                function keywordExists($recipe){
                    $user = Auth::user();
                    $keywords = $user["dietary_restrictions"];
                    foreach($keywords as $keyword){
                        foreach($recipe->instructions as $instruction){
                            if(strpos( mb_strtoupper($instruction),  mb_strtoupper($keyword))){
                                return true;
                            }
                            foreach($recipe->ingredients as $ingredient){
                                if(strpos( mb_strtoupper($ingredient),  mb_strtoupper($keyword))){
                                    return true;
                                }
                            }
                        }
                    }
                    return false;
                }

                //Get all recipes and store in varaiable
                $allRecipes = Recipe::all();
                while(!empty($allRecipes[0])){
                    // Get recipe and check that it doesn't have any restrictons
                    $recipe = $allRecipes->random();
                    if(!keywordExists($recipe)){
                        break;
                    }

                    // If recipe contradicts restrictions
                    // Delete from list and set recipe to null
                    // Start loop over, or exit if no more recipes
                    $index = 0;
                    foreach($allRecipes as $oneRecipe){
                        if($recipe->_id == $oneRecipe->_id){
                            unset($allRecipes[$index]);
                            break;
                        }
                        $index += 1;
                    }
                    $recipe = NULL;
                }

                if($recipe){
                    $image = base64_decode($recipe->image);
                    $image2 = $recipe->image;
                    dd($image2);
                }
            @endphp

            {{--<!--  CODE FOR LIKES AND COLLECTIONS NOT YET IMPLEMENTED
            <div>
                <input type="submit" class="inChip" name="likeChip" value="Like: &#9829;"></input>
                <input type="submit" class="inChip" name="saveChip" value="Save: &#43;"></input>
            </div>
            <br>
            -->--}}

            @if(is_null($recipe))
            <div>
                <p>
                    <b>No Recipes found, please change your Dietary Preferences found in your Account</b>
                </p>

            </div>

            @else
            <div>
                <p>
                    <b>{{ $recipe->title }}</b>
                    <img src={{$image2}}></img>
                </p>

            </div>
            <div>
                <p>Ingredients</p>
                @foreach ($recipe->ingredients as $ingredient)
                    <div class="chip">
                        <input type="submit" class="Chip" name="ingredientChip" value="{{ $ingredient }}"></input>
                    </div>
                @endforeach
            </div>
            <div>
                <p>Instructions</p>
                @foreach ($recipe->instructions as $instruction)
                    <div class="chip">
                        <input type="submit" class="inChip" name="instructionChip" value="{{ $instruction }}"></input>
                    </div>
                @endforeach
            </div>
            @endif


        </div>
    </div>
@endsection
