<x-app-layout>
    <div class="container m-2 flex">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title" required>
            <textarea name="content" placeholder="Content" required>
            </textarea>
            <button type="submit">Publish</button>
        </form>
    </div>
</x-app-layout>