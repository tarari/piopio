<x-app-layout>

        <h1 class="text-2xl font-bold">Posts</h1>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead>
                    <th>Title</th>
                    <th class="col-span-2">Actions</th>
                </thead>
            @forelse ($posts as $post)
                <tr class="border px-4 py-2">
                    <td>{{$post->title}}</td>
                    <td>
                        <button class="bg-blue-500 text-white px-2 py-1 text-xs rounded-sm">Edit</button>
                    </td>
                    <td>
                        <button>Delete</button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No posts yet</td>
                </tr>
            @endforelse
        </div>
       
    </div>

</x-app-layout>
