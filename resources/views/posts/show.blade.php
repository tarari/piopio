<x-app-layout>
   <x-post-show :post="$post"/>
   <div class="mt-2 px-4 py-2 flex flex-col" x-data="{ open2: false }" >
       <a class="text-xs font-mono" x-on:click="open2 = !open2">Comments</a>
       <div x-show="open2">
           @forelse ($post->comments as $comment)
           <div class="flex flex-col">
               <p class="text-xs font-mono">{{$comment->content}}<span class="font-bold text-xs">Author: {{$comment->user->name}}</span></p>
           </div>
           @empty
              <p>No comments yet</p>
           @endforelse
       </div>
</x-app-layout>
