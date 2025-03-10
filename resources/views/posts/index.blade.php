<x-app-layout>
    <div class="container">
        @forelse ($posts as $post)
          <div>
            <h2><a href="{{route('posts.show',$post)}}">{{$post->title}}</a></h2>
            <div>
                <p>{{$post->content}}</p>
            </div>
          </div>  
        @empty
            <h2>No posts!!</h2>
        @endforelse 
            
    </div>

</x-app-layout>