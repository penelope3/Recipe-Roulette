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


            <div>
                <p>Like//Save</p>
            </div>
            <br>
            <div>
                <p><b>Title</b></p>
                <p>Image<p>
            </div>
            <div>
                <p>Ingredients</p>
            </div>
            <div>
                <p>Instructions</p>
            </div>



            <?php
                //$query = { state: 'OK' };
                //$n = db.Recipe.count(query);
                //$r = Math.floor(Math.random() * n);
                //$randomElement = db.Recipe.find(query).limit(1).skip(r)->_id;
            ?>
            <?php
                //$recipe = raw(function($collection){ return $collection->aggregate([ ['$sample' => ['size' => 5]] ]); })->where('Active','=',true);
            ?>





        </div>
    </div>
@endsection
