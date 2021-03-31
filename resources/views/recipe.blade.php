{{-- For showing a single Recipe --}}
@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">
            <span>Recipe Page: Stuff soon
            </span>
        </br>
            <label for="food1">mock recipe</label>
            <img src="{{ asset('images/recipe.png') }}" id="mock_recipe">
        </div>
    </div>
@endsection
