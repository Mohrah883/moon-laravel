<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            All Posts
        </h2>
    </x-slot>

    <div class="py-4 max-w-6xl mx-auto sm:px-6 lg:px-8">
        @if (session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ New Post</a>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            @foreach ($posts as $post)
                <div class="border-b mb-4 pb-2">
                    <h3 class="text-lg font-bold">{{ $post->title }}</h3>
                    <p class="text-gray-600 text-sm mb-2">By {{ $post->user->name }} – {{ $post->created_at->diffForHumans() }}</p>
                    <p class="mb-2">{{ \Illuminate\Support\Str::limit($post->body, 100) }}</p>

                    <a href="{{ route('posts.show', $post) }}" class="text-blue-500">View</a>
                    @if ($post->user_id === auth()->id())
                        | <a href="{{ route('posts.edit', $post) }}" class="text-yellow-500">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 ml-2">Delete</button>
                        </form>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
