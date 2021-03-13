@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">
            <span>Register your Recipe Roulette Account here!</span>

            <form action="{{ route('register') }}" method="post" class="m-2">
                @csrf

                <div class="mb-4">
                    First Name: </br>
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="First Name" class="bg-gray-100 border-2 p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">
                </div>

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-4">
                    Email:</br>
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email address" class="bg-gray-100 border-2 p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('email') }}">
                </div>

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-4">
                    Password: </br>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 p-4 rounded-lg @error('name') border-red-500 @enderror" value="">
                </div>

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-4">
                    Confirm Password: </br>
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 p-4 rounded-lg @error('name') border-red-500 @enderror" value="">
                </div>

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
