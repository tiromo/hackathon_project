<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-800 leading-tight">
           タスクの追加
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto px-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
            
            <form method="post" action="{{route('post.store')}}">
                @csrf

                <div class="w-full flex flex-col">
                    <label for="title" class="font-semibold mt-4">件名</label>
                    <input type="text" name="title" class="w-full py-2 px-3 border border-gray-300 rounded-md" id="title">
                </div>

                <div class="w-full flex flex-col">
                    <label for="body" class="font-semibold mt-4">本文</label>
                    <textarea name="body" class="w-full py-2 px-3 border border-gray-300 rounded-md" id="body" cols="30" rows="5" ></textarea>
                </div>

                <div class="w-full flex flex-col">
                    <label for="deadline" class="font-semibold mt-4">締切<a for="deadline" class="text-xs mt-4">（デフォルトは現在日時）</a></label>
                    <input type="datetime-local" name="deadline" id="deadline" class="w-full py-2 px-3 border border-gray-300 rounded-md" value="{{ old('deadline', now()->format('Y-m-d\TH:i')) }}">
                </div>

                <div class="my-4">
                    <x-primary-button type="submit">
                        追加する
                    </x-primary-button>
                </div>
            </form>
            @if(session('message'))
            <div class="mb-4">
                <div class="text-red-600 font-bold">
                    {{session('message')}}
                </div>
                <a href="{{ route('posts.index') }}" class="text-blue-800 underline">リストを確認する</a>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
