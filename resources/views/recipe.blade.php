{{-- For showing a single Recipe --}}
@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">
            <!--
            <span>Recipe Page: Stuff soon
            </span>
        </br>
            <label for="food1">mock recipe</label>
            <img src="{{ asset('images/recipe.PNG') }}" id="mock_recipe">
            -->


            <?php //$recipe = Recipe::where(['title' => 'a'])->get(); ?>
            @php
                use App\Models\Recipe;
                $recipe = Recipe::all()->random();
                $image = base64_decode($recipe->image);
                $image2 = $recipe->image;
            @endphp

            <div>
                <p>Like//Save</p>
            </div>
            <br>
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
                        <input type="submit" class="Chip" name="accountChip" value="{{ $ingredient }}"></input>
                    </div>
                @endforeach
            </div>
            <div>
                <p>Instructions</p>
                @foreach ($recipe->instructions as $instruction)
                    <div class="chip">
                        <input type="submit" class="inChip" name="accountChip" value="{{ $instruction }}"></input>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
@endsection
