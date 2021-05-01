{{-- For showing a single Recipe --}}
@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">
            <span class="right-adjust">
                <a href="{{ route('recipe') }}" type="button" class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 border-b-4 border-green-800 hover:border-green-500 rounded" id="random-btn"> Generate a New Recipe</a>
            </span>

            {{--Get a random Recipe and Show it--}}
            @php
                use App\Models\Recipe;

                // Function to search for keywords in recipe
                function keywordExists($recipe){
                    $user = Auth::user();
                    if(isset($user["dietary_restrictions"])){
                        $keywords = $user["dietary_restrictions"];
                        foreach($keywords as $keyword){
                            //Plural error check (not great, so excluding)
                            //if( (mb_strtoupper(substr($keyword, -1)) == 'S') && (strlen($keyword) > 1) ){
                            //    $keyword = substr($keyword, 0, -1);
                            //}
                            foreach($recipe->instructions as $instruction){
                                $temp = strpos( mb_strtoupper($instruction),  mb_strtoupper($keyword));
                                if($temp || $temp === 0){
                                    return true;
                                }
                            }
                            foreach($recipe->ingredients as $ingredient){
                                $temp = strpos( mb_strtoupper($ingredient),  mb_strtoupper($keyword));
                                if($temp || $temp === 0){
                                    return true;
                                }
                            }
                        }
                    }
                    return false;
                }

                //Get all recipes and store in varaiable

                $recipe = NULL;
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

                //if($recipe){
                //    $image = $recipe->image;
                //}
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
                    <span class="recipe-title"><b>{{ $recipe->title }}</b></span>
                </br>
                    {{--<!--
                    <img src="storage/images/aM5JdapIBwqGvV7HlHVXmGY577Utrrg73dO4As3y.png"></img>
                    -->--}}
                </p>

            </div>
            <div>
                <b><p>Ingredients</p></b>
                @foreach ($recipe->ingredients as $ingredient)
                    <div class="chip">
                        <input type="submit" class="chip bg-green-600 text-white" name="ingredientChip" value="{{ $ingredient }}"></input>
                    </div>
                @endforeach
            </div>
            <br>
            <div>
                <b><p>Instructions</p></b>
                @foreach ($recipe->instructions as $instruction)
                    <div class="inChip">
                        <input type="submit" class="inChip bg-green-600 text-white" name="instructionChip" value="{{ $instruction }}"></input>
                    </div>
                </br>
                @endforeach
            </div>
            @endif


        </div>
    </div>
@endsection
