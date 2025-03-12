<div class="container w-full mx-auto bg-indigo-200 mt-2 p-4">
    <h1 class="text-2xl underline">Posts</h1>
    @foreach ($posts as $post)
    <div class="card mt-2">
        <div class="card-header">
            <h3 class="text-xl">{{$post->title}}</h3>
        </div>
        <a class="text-blue-600 text-sm" href="{{route('posts.show', $post)}}">Go..</a>
        <div class="card-body">
             <p>{{$post->content}}</p>
            <p><span class="font-bold text-xs">Author: {{$post->user->name}}</span></p>
            <p><span class="font-bold text-xs">Created at: {{$post->created_at}}</span></p>
        </div>

    </div>
    @endforeach

</div>
