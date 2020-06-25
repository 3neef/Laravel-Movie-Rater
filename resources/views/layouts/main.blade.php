<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Movies</title>

    <link rel="stylesheet" href="/css/app.css">
    <livewire:styles>
</head>
<body class="font-sans bg-teal-900 text-white">
    <nav class="border-b border-teal-800">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                <a href="{{route('movies.index')}}">
                        <img src="/img/bb.png" alt="Logo" class="rounded-full w-32 viewBox="0 0 96 24">
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{route('movies.index')}}" class="hover:text-teal-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-teal-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-teal-300">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col md:flex-row items-center">
               <livewire:search-dropdown>
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/img/miz.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>


    @yield('content')
    <livewire:scripts>
</body>
</html>