<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Recipe Roulette</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap">

    </head>

    <nav class="top-bar">
        Welcome
            @auth
                <a href="" class="p-3">{{ auth()->user()->name }}</a>
            @endauth
    </nav>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                <li>
                    <h2><a href="{{ route('home') }}" class="p-3">Home</a></h2>
                </li>
                <li>
                    <h2><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></h2>
                </li>
                <li>
                    <h2><a href="" class="p-3">Post</a></h2>
                </li>
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
        @yield('content')
    </body>
    <footer>
        © 2021 Soup Group
    </footer>
</html>
