@extends('app')

@section('content')
    <div class="float-container">
        <div class="main">
            {{-- Button for Random Recipe Generation (lead to /recipe) --}}
            <a href="{{ route('recipe') }}" type="button" class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 border-b-4 border-green-800 hover:border-green-500 rounded" id="random-btn"> Generate Recipe</a>
        </br>
        </br>

            <p>Welcome to Recipe Roulette! Our site features the button above, which will retrieve a random recipe for you to try. Register with us in order to access our full site, including access to post recipes for others to enjoy!</p>

        </div>
    </div>

@endsection
