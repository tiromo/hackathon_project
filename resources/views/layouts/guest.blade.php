<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'aAh') }}</title>

        <!-- Fonts -->
        <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" class="rounded-full object-cover bg-white">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-800 antialiased">
        <div class="flex flex-col min-h-screen bg-gray-100 mx-auto">
            <div class="sticky top-0">
                @include('layouts.header-guest')

                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endisset
            </div>

            <!-- Page Content -->
            <main class="flex-grow bg-[url('images/back.jpg')] bg-center bg-cover bg-fixed bg-no-repeat">
                <div class="py-12">
                    <div class="w-full sm:max-w-3xl mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </main>
            <div class="sticky bottom-0">
                @include('layouts.footer')
            </div>
        </div>
    </body>
</html>
