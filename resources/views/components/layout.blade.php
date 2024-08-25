<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-12">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 mb-12 border-b border-white/15">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}">
                </a>
            </div>
            <div class="space-x-4 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            <div class="flex gap-2">
                @guest
                    <a href="/login">Login</a>
                    <a href="/register">Register</a>
                @endguest
                @auth
                    <a href="/jobs/create">Post job</a>
                @endauth
            </div>
        </nav>

        <main class="max-w-[960px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
