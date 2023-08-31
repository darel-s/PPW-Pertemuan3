<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Darriel Markerizal</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        
    </head>
    <body>
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="text-white text-xl font-semibold">Darriel Markerizal</div>
            <ul class="flex space-x-6 text-white">
                <li><a href="/" class="hover:text-gray-300">Home</a></li>
                <li><a href="/about" class="hover:text-gray-300">About</a></li>
                <li><a href="/blog" class="hover:text-gray-300">Blog</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    </body>
</html>
