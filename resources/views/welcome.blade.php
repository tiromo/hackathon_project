<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            トップページ
        </h2>
    </x-slot>

    <main class="w-full sm:max-w-4xl mx-auto px-6 py-4 bg-red-100 shadow-md overflow-hidden sm:rounded-lg">
        <div class="flex justify-center my-auto mx-auto max-w-max">
            <div class="text-center space-y-6">
                <h1 class="text-4xl font-bold mb-6">always Aim higher</h1>
                <intro>少しでもより良い生活の実現のため、あなたの仕事や家事の管理を手助けします。</intro>
            </div>
        </div>
        <div class="flex justify-center items-center mt-6 my-auto mx-auto max-w-max">
            <img src="{{ asset('images/logo.png') }}" alt="ロゴ" class="w-1/3 mx-2 rounded-full object-cover"/>
            <div class="flex flex-col space-y-4 mx-2">
                <intro class="bg-orange-200 w-full">　always Aim higher(aAh)はあなたのタスクの管理を手助けするToDoListです。日々のタスクを効率的に完了していくことで、より充実した毎日を送りましょう。</intro>
                <div class="flex justify-center space-x-2">
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-blue-500 text-white text-center rounded-lg text-lg">タスク管理を始める</a>
                    <a href="{{ route('login') }}" class="px-6 py-3 bg-green-500 text-white text-center rounded-lg text-lg">ログイン</a>
                </div>
            </div>
        </div>
    </main>
    <main class="w-full sm:max-w-4xl mx-auto mt-6 px-6 py-4 bg-red-100 shadow-md overflow-hidden sm:rounded-lg">
        <div class="flex justify-center items-center my-auto mx-auto max-w-max">
            <img src="{{ asset('images/mypage.png') }}" alt="ロゴ" class="w-1/3 mx-2 object-cover"/>
            <div class="flex flex-col w-2/3 space-y-4 mx-2">
                <h1 class="text-2xl font-bold text-center">ToDoList</h1>
                <intro class="bg-orange-200">
                    <p>　aAhでは、あなたのタスクを、内容を含めて管理します。</p><p>タスク内容を忘れても確認が可能です。</p>
                    <p>　また、タスクの締切日時を追加した上で、マイリストの並び替え機能を利用することで、締切が直近のタスクを確認できます。優先して処理すべきタスクの管理にご活用ください。</p>
                </intro>
                <div class="flex justify-center space-x-2">
                    <a href="{{ route('register') }}" class="px-6 py-3 bg-blue-500 text-white text-center rounded-lg text-lg">タスク管理を始める</a>
                    <a href="{{ route('login') }}" class="px-6 py-3 bg-green-500 text-white text-center rounded-lg text-lg">ログイン</a>
                </div>
            </div>
        </div>
    </main>

</x-guest-layout>