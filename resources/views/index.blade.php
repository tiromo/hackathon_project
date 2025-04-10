<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ Auth::user()->name }}さんのToDoList
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="sm:max-w-3xl mx-auto px-6 py-6 bg-white rounded-2xl border">
            <div class="flex items-center justify-between">
            <a class="flex text-3xl mx-5">ToDoList</a>
            <form method="GET" action="{{ route('posts.index') }}" class="flex space-x-4 items-center mx-5">
                {{-- ソート対象 --}}
                <div>
                    <label for="sort" class="mr-2 font-semibold">ソート項目:</label>
                    <select name="sort" id="sort" class="border border-gray-300 rounded-md pr-8 py-1">
                        <option value="created_at" {{ request('sort') === 'created_at' ? 'selected' : '' }}>作成日</option>
                        <option value="deadline" {{ request('sort') === 'deadline' ? 'selected' : '' }}>締切</option>
                    </select>
                </div>

                {{-- 昇順・降順 --}}
                <div>
                    <label for="direction" class="mr-2 font-semibold">順番:</label>
                    <select name="direction" id="direction" class="border border-gray-300 rounded-md pr-8 py-1">
                        <option value="asc" {{ request('direction') === 'asc' ? 'selected' : '' }}>昇順 ↑</option>
                        <option value="desc" {{ request('direction') === 'desc' ? 'selected' : '' }}>降順 ↓</option>
                    </select>
                </div>

                {{-- ボタン --}}
                <x-primary-button type="submit" class="bg-blue-500 text-white px-2 py-1 rounded-md">
                    並び替え
                </x-primary-button>
            </form>
            </div>
            <div class="sm:max-w-2xl mx-auto">
                @foreach($posts as $post)


                <div class="mt-4 py-2 px-8 bg-white w-full rounded-2xl border border-gray-800">
                    <div class="flex justify-between">
                        <h1 class="p-2 text-2xl font-semibold">
                            {{$post->title}}
                        </h1>
                        <div class="p-2 flex items-center space-x-2">
                            <a href="{{route('post.edit',$post)}}">
                            <x-primary-button class="px-4 text-lg border border-gray-800">
                                編集
                            </x-primary-button>
                            </a>
                            <form method="post" action="{{route('post.destroy',$post)}}">
                                @csrf
                                @method('delete')
                                <x-primary-button type="submit" class="px-4 text-lg border border-gray-800">
                                    削除
                                </x-primary-button>
                            </form>
                        </div>
                    </div>   
                    <hr class="w-full border-gray-400"> </hr>
                    <p class="mt-4 p-4 font-semibold">
                        {{$post->body}}
                    </p>

                    @if($post->deadline)
                    <p class="px-4 pt-2 text-red-600 font-semibold text-sm">
                        締切： {{ \Carbon\Carbon::parse($post->deadline)->format('Y年m月d日 H:i') }}
                    </p>
                    @endif

                    <div class="p-4 text-sm font-semibold">
                    <p>
                        作成： {{$post->created_at}}/{{$post->user->name ?? '匿名'}} 
                    </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>