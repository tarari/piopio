<x-app-layout>
    @auth
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Piopio') }}
        </h2>
    </x-slot>
    @endauth
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   @forelse ($posts as $post)
                   <div class="card mt-2 border border-green-300 rounded-sm">
                       <div class="card-header">
                        <a class="text-blue-400 text-xs font-bold" href="{{route('posts.show', $post)}}">
                            <h3 class="text-xl">{{$post->title}}</h3>
                        </a>
                        </div>

                       <div class="card-body">
                           <p>{{$post->content}}</p>
                           <p><span class="font-bold text-xs">Author: {{$post->user->name}}</span></p>
                           <p><span class="font-bold text-xs">Created at: {{$post->created_at->diffForHumans()}}</span></p>
                       </div>

                   </div>

                   @empty
                   <p>No posts yet</p>
                   @endforelse

                   <div class="mt-2 text-sm text-blue-400">{{$posts->links()}}</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
