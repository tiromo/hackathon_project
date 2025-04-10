<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::user()->name }}さんのToDoList
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="p-6 bg-white shadow-md rounded-md border border-gray-300 max-w-7xl mx-auto">
            <h2 class="text-xl font-bold text-gray-700 mb-4">リスト</h2>
            <ul class="space-y-2 bg-gray-100 shadow-md rounded-md border-8 border-gray-800 rounded-md">
                <li class="p-3">アイテム 1</li>
                <li class="p-3">アイテム 2</li>
                <li class="p-3">アイテム 3</li>
            </ul>
        </div>
    </div>
</x-app-layout>
