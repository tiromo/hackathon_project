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
                @include('layouts.navigation')

                <!-- Page Heading -->
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            お問い合わせ
                        </h2>
                    </div>
                </header>
            </div>


            <main class="flex-grow bg-[url('images/back.jpg')] bg-center bg-cover bg-fixed bg-no-repeat">
                <div class="py-12">
                    <div class="w-full sm:max-w-3xl mx-auto mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                        <div class="space-y-6">
                            <div class="w-full text-center">
                            <h1 class="text-4xl font-bold mb-6">お問い合わせフォーム</h1>
                            <p>ご意見、不具合等ございましたら、</p>
                            <intro>下記のフォームに入力後に「送信する」をクリックしてください。</intro>
                            </div>

                            <form action="{{ route('contact.send') }}" method="POST">
                                @csrf

                                <div class="w-full flex flex-col">
                                    <textarea name="body" class="w-full py-2 px-3 border border-gray-300 rounded-md" id="body" cols="30" rows="5"></textarea>
                                </div>

                                <x-primary-button type="submit" class="mt-4">
                                    送信する
                                </x-primary-button>
                            </form>
                            @if (session('success'))
                            <div class="mb-4">
                                <div class="text-red-600 font-bold">
                                    {{session('message')}}
                                </div>
                                <a href="{{ route('toppage') }}" class="text-blue-800 underline">トップページへ</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </main>
            @include('layouts.footer')
        </div>
    </body>
</html>