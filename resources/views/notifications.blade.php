<x-app-layout>
    <h1>Notifications</h1>
    @foreach(auth()->user()->notifications as $notification)
        <div>
            <p><strong>{{ $notification->data['user'] }}</strong> has published a new post:
               <a href="{{ url('/posts/' . $notification->data['post_id']) }}">
                   {{ $notification->data['title'] }}
               </a>
            </p>
            <small>{{ $notification->created_at->diffForHumans() }}</small>
        </div>
    @endforeach
</x-app-layout>
