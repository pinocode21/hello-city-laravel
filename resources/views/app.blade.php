<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        

        <title>@yield('title', config('app.name'))</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main role="main" class="flex flex-col justify-center items-center">
            @yield('content')
        </main>

        <!--{{config('database.connections.sqlite.driver')}}-->

        <footer>
            <p class="text-gray-400">
                &copy; Copyright {{date('Y')}}
                @if (! Route::is('about'))
                    &middot; <a href="{{route('about')}}" class="text-indigo-500
                    hover:text-indigo-700 underline">About Us</a>
                @endif
            </p>
        </footer>
    </body>
</html>
