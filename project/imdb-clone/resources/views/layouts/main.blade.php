<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IMDB CLONE</title>
    <link rel="stylesheet" href="/css/app.css">
</head>


<body class="font-sans text-white bg-gray-900">

    <!-- Start of navbar -->
    <nav class="border-b border-gray-900 bg-gray-800">
        <section class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">

            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a class="logo" href="{{route('movies.index')}}">IMDB</a>
                </li>

                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('menuMovies.showMenu')}}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('watchlist.create')}}" class="hover:text-gray-300">Watchlists</a>
                </li>

            </ul>


            <ul class="flex flex-col md:flex-row mt-3 md:mt-0 items-center">
                <div class="relative mt-3 mr-4 md:mt-0 hover:text-gray-300">
                    <a class="hover:text-orange-500" href="{{ route('auth.login')}}">Login</a>
                </div>
                <div class="relative mt-3 md:mt-0 hover:text-gray-300">
                    <a class="hover:text-orange-500" href="{{ route('auth.register')}}">Register</a>
                </div>
            </ul>
        </section>
    </nav>
    @yield('content')

    <footer class="text-center bg-gray-900 text-white">
        <div class="mb-0 text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Copyright

        </div>
    </footer>




</body>

</html>
