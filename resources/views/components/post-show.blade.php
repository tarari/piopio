<div class="container w-full mx-auto bg-gray-100 mt-2 p-4">
    <div class="card mt-2">
        <div class="card-header border-green-500 rounded-sm">
            <h3 class="text-xl font-orbitron text-gray-600">{{$post->title}}</h3>
        </div>
        <div class="card-body">
            <p>{{$post->content}}</p>
            <p class="font-bold text-xs">Author: {{$post->user->name}}</p>
            <p class="font-bold text-xs">Created at: {{$post->created_at->diffForHumans()}}</p>
        </div>
        <div class="card-footer">
            @if($post->image)
            <img src="{{asset('storage/posts/' . $post->image)}}" alt="image" class="w-1/3">
            @endif
        </div>
    </div>
        <div x-data="{ open2: false }" >
            <a x-on:click="open2 = !open2">Comment</a>
            <form x-show="open2" class="flex flex-col w-1/3" action="{{route('comments.store', $post)}}" method="post">
                @csrf
                <textarea class="text-xs m-1 rounded-sm" name="content" id=""  rows="4"></textarea>
                <button  class="bg-blue-500 hover:bg-blue-700 text-white font-mono text-xs py-2 px-4 rounded" type="submit">Send</button>
            </form>
        </div>

</div>



