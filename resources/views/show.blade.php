<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            個別表示
        </h2>
    </x-slot>
    
    <div class="max-w-3xl mx-auto px-4 py-6">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
            <!-- Post Header Area -->
            <div class="flex justify-between items-start mb-4">
                <h1 class="text-xl font-bold text-gray-900 dark:text-gray-100">
                    {{$post->title}}
                </h1>
                <div class="flex space-x-2">
                    <a href="{{route('post.edit',$post)}}">
                        <x-primary-button class="text-sm">
                            編集
                        </x-primary-button>
                    </a>
                    <form method="post" action="{{route('post.destroy',$post)}}">
                        @csrf
                        @method('delete')
                        <x-primary-button class="bg-red-600 hover:bg-red-700 text-sm">
                            削除
                        </x-primary-button>
                    </form>
                </div>
            </div>
            
            <!-- Post Content Area -->
            <div class="space-y-4">
                <p class="text-gray-700 dark:text-gray-300 whitespace-pre-line">
                    {{$post->body}}
                </p>
                
              
                
                <div class="text-sm text-gray-500 dark:text-gray-400 text-right">
                    投稿日時: {{$post->created_at}}
                </div>
            </div>
            
          
                </div>
            </div>
        </div>
    </div>
 
</x-app-layout>