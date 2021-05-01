@extends ('app')

@section('content')
    <div class="float-container">
        <div class="main">
            <span>Register your Recipe Roulette Account here!</span>
            {{-- This form will take in Name, Email, and Password to register a user --}}
            <form action="{{ route('register') }}" method="post" class="m-2">
                @csrf

                <div class="mb-4">
                    Username: </br>
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" class="bg-gray-100 border-2 p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">
                </div>

                @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-4">
                    Email:</br>
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email address" class="bg-gray-100 border-2 p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">
                </div>

                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-4">
                    Password: </br>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password" class="bg-gray-100 border-2 p-4 rounded-lg @error('password') border-red-500 @enderror" value="">
                </div>

                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-4">
                    Confirm Password: </br>
                    <label for="password_confirmation" class="sr-only">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">
                </div>

                @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <div>
                    <button type="submit" class="bg-green-700 hover:bg-green-600 text-white font-bold py-2 px-4 border-b-4 border-green-800 hover:border-green-500 rounded">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
