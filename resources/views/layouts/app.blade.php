<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <nav class="h-40 bg-sky-200/50 text-4xl mb-40">
        <div class="container flex gap-4 items-center justify-start h-full">
            <a href="{{ route('home') }}" class="flex">
                <span class="self-center font-semibold whitespace-nowrap">Home</span>
            </a>
            <a href="{{ route('details.create') }}" class="flex">
                <span class="self-center font-semibold whitespace-nowrap">Create CV</span>
            </a>
        </div>

    </nav>
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
