<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'aAh') }}</title>

        <!-- Fonts -->
         <!-- Default -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
        
        <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png" class="rounded-full object-cover bg-white">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans bg-gray-800 antialiased">
        <div class="flex flex-col min-h-screen bg-gray-100 mx-auto">
            <div class="sticky top-0">
                @include('layouts.navigation')

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
                {{ $slot }}
            </main>
            <div class="sticky bottom-0">
                @include('layouts.footer')
            </div>
        </div>
    </body>
</html>
