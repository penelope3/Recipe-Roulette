{{-- This file contains the html that is on every page --}}
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Recipe Roulette</title>
        <script src="{{ asset('js/functionality.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap">

    </head>
    <div id='nav'>
        <img src="{{ asset('images/logo.png') }}" id="logo" />

    <nav class="top-bar p-6 flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                Welcome
            @auth
                <a href="" class="p-3">{{ auth()->user()->name }}</a>
            @endauth
            </li>
        </ul>
        {{-- commenting out the Search bar for now
        <ul class="flex items-center">
            <div class="pt-2 relative mx-auto text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                  type="search" name="search" placeholder="Search">
                <a href="{{ route('recipes') }}" type="button" class="absolute right-0 top-0 mt-5 mr-4">
                  <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                      d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                  </svg>
                </a>
            </div>
        </ul>
        --}}
    </nav>
    <body class="bg-gray-200">
        <nav class="p-6 flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <h2><a href="{{ route('home') }}" class="p-3">Home</a></h2>
                </li>
                @auth
                    <li>
                        <h2><a href="{{ route('post') }}" class="p-3">Post</a></h2>
                    </li>
                    {{--<!--  COLLECTIONS NOT YET IMPLEMENTED
                    <li>
                        <h2><a href="{{ route('collections') }}" class="p-3">Collections</a></h2>
                    </li>-->--}}
                    <li>
                        <h2><a href="{{ route('account') }}" class="p-3">Restrictions</a></h2>
                    </li>
                @endauth
            </ul>

            <ul class="flex items-center">
                @auth
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @endauth

                @guest
                <li>
                    <h2><a href="{{ route('register') }}" class="p-3">Register</a></h2>
                </li>
                <li>
                    <h2><a href="{{ route('login') }}" class="p-3">Login</a></h2>
                </li>
                @endguest
            </ul>
        </nav>
        </div>
        @yield('content')
    </body>
    <footer>
        © 2021 Soup Group
    </footer>
</html>
