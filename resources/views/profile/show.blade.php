<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-4 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 shadow-sm sm:rounded-lg">
            <p class="text-gray-600 text-sm mb-2">
                By {{ $post->user->name }} – {{ $post->created_at->diffForHumans() }}
            </p>

            <p class="mb-4">{{ $post->body }}</p>

            <a href="{{ route('posts.index') }}" class="text-blue-500">← Back to posts</a>
        </div>
    </div>
</x-app-layout>
