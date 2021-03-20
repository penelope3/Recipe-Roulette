{{-- For showing a list of Recipes --}}
@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">
            <p>Recipe List Page: Stuff soon</p>
            <br>
            <div class="listItems">
                <div class="column">
                    <a href="{{ route('recipe') }}">
                        <label for="food1">food1</label>
                        <img src="{{ asset('images/food1.jpg') }}" id="food1">
                    </a>
                    <a href="{{ route('recipe') }}">
                        <label for="food2">food2</label>
                        <img src="{{ asset('images/food2.jpg') }}" id="food2">
                    </a>
                </div>
                <div class="column">
                    <a href="{{ route('recipe') }}">
                        <label for="food3">food3</label>
                        <img src="{{ asset('images/food3.jpg') }}" id="food3">
                    </a>
                    <a href="{{ route('recipe') }}">
                        <label for="food4">food4</label>
                        <img src="{{ asset('images/food4.png') }}" id="food4">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
