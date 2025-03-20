<div class="container w-full mx-auto bg-gray-200 mt-2 p-4">
    <h1 class="text-2xl underline font-orbitron">Posts</h1>
    @forelse ($posts as $post)
    <div class="card mt-2 border border-green-500 rounded-sm">
        <div class="card-header p-2">
            <a class="text-blue-600 text-xs font-bold" href="{{route('posts.show', $post)}}">
                <h3 class="text-xl">{{$post->title}}</h3></a>
        </div>


        </a>
        <div class="card-body p-2">
            <p>{{$post->content}}</p>
            <p><span class="font-bold text-xs">Author: {{$post->user->name}}</span></p>
            <p><span class="font-bold text-xs">Created at: {{$post->created_at}}</span></p>
        </div>

    </div>

    @empty
    <p>No posts yet</p>
    @endforelse
    <div>{{$posts->links()}}</div>
</div>
