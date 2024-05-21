<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body>

    <header
        class="flex gap-4 justify-between items-center centered-margin py-5 border mt-2 rounded-md px-2 bg-primary text-white">
        <div class="flex items-center">
            <svg class="w-10 h-10 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" />
            </svg>
            <h1 class="text-2xl font-bold">FIELDS</h1>
        </div>
        <nav>
            <ul class="list-none flex gap-2 items-center font-bold">
                <li>
                    <a href="{{ route('home') }}" class="bg-white text-primary p-2 rounded-md">
                        accueil
                    </a>
                </li>
                <li>
                    <a href="{{ route('create-terrain') }}" class=" text-white p-2 rounded-md">
                        ajouter un terrain
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="centered-margin">
        @yield('content')
    </main>

</body>

</html>
