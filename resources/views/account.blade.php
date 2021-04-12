{{-- For Editing Dietary Preferences --}}
@extends ('app')


@section('content')
    <div class="float-container">
        <div class="main">
            <h2><b>Dietary Restrictions</b></h2>
            <span>Enter individual ingredients or allergies that you don't want in your recipes</span>
            {{-- This form will take in a single or multiple restrictions of a user --}}
            <form action="{{ route('account') }}" method="post" class="m-2">
                @csrf

                @error('restriction')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                Ingredient/Allergy: </br>
                <label for="restriction" class="sr-only">Name</label>
                <input type="text" name="restriction" id="restriction" placeholder="restriction" class="bg-gray-100 border-2 p-4 rounded-lg @error('name') border-red-500 @enderror">

                <input type="submit" class="addRestriction chip" value="Add Restriction"></input>
            </form>
            <div class="chips" id="restrictionChips">
                <p>Your restrictions: Click one to delete it</p>
                @if(isset(auth()->user()->dietary_restrictions) && !empty(auth()->user()->dietary_restrictions))
                    @foreach (auth()->user()->dietary_restrictions as $restriction)
                        <form action="{{ route('accountChips') }}" method="post" class="m-2 chip">
                            @csrf
                            <div class="chip">
                                <input type="submit" class="chip" name="accountChip" value="{{ $restriction }}"></input>
                            </div>
                        </form>
                    @endforeach
                @else
                @endif
            </div>
        </div>
    </div>
@endsection
