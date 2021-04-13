{{-- For Posting a New Recipe --}}
@extends ('app')


@section('content')
    <div class="float-container">
        <div class="main">
            <h2><b>Post a New Recipe</b></h2>
            {{-- This form will take in a recipe information from a user --}}
            <form enctype="multipart/form-data" action="{{ route('post') }}" method="post" class="m-2">
                @csrf

                {{-- Title Input --}}
                <div>
                    <p>Enter Recipe Title</p>
                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    <div>
                        <label for="title" class="sr-only">Title</label>
                        <input type="text" name="title" id="title" placeholder="title" class="bg-gray-100 border-2 p-4 rounded-lg @error('title') border-red-500 @enderror">
                    </div>
                </div>
                <br>

                {{-- Ingredient Input --}}
                <div>
                    <div>
                        <p>Enter Ingredients individually <br>
                        Please use formatting simmilar to:<br>
                        1 tsp -Sugar
                        </p>
                        @error('ingredient')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                        <div>
                            <label for="ingredient" class="sr-only">Ingredient</label>
                            <textarea name="ingredient" id="ingredient" placeholder="ingredient" class="bg-gray-100 border-2 p-4 rounded-lg @error('ingredient') border-red-500 @enderror"></textarea>
                        </div>
                    </div>

                    <div class="chips" id="ingredientChips">
                    </div>
                </div>
                <br>

                {{-- Instruction Input --}}
                <div>
                    <div>
                        <p>Enter Instructions individually</p>
                        @error('instruction')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                        <div>
                            <label for="instruction" class="sr-only">Instruction</label>
                            <textarea name="instruction" id="instruction" placeholder="Pour water into a bowl" class="bg-gray-100 border-2 p-4 rounded-lg @error('instruction') border-red-500 @enderror"></textarea>
                        </div>
                    </div>
                    <div class="chips" id="instructionChips">
                    </div>
                </div>


                {{-- Image Input --}}
                {{--<!--  IMAGE NOT CURRENTLY COMPLETE: SHOWS ON LOCAL BUT NOT HEROKUAPP
                <div>
                    <p>Enter Image for Recipe</p>
                    @error('Image')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    <label for="image">Image</label>
                    <input type="file" id="image" name="image" accept="image/*" class="@error('image') border-red-500 @enderror">
                </div>
                -->--}}
                <br>
                <input type="submit" class="addRestriction chip" value="Post Recipe"></input>
            </form>
        </div>
    </div>
@endsection
