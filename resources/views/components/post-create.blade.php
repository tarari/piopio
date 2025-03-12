
 <div class="container mx-auto w -full">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
            </div>
            <div>
                <x-input-label for="content" :value="__('Content')" />
                <textarea id="content" class="block mt-1 w-full h-48" name="content" required></textarea>
            </div>
            <div>
                <x-button class="mt-5">
                    {{ __('Create') }}
                </x-button>
            </div>

        </form>
</div>

