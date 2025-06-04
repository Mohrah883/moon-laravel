<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6 px-6">
        <h3 class="text-lg font-bold mb-4">All Posts</h3>

        @foreach ($posts as $post)
            <div class="mb-4 border p-4 rounded shadow">
                <h4 class="font-semibold text-xl">{{ $post->title }}</h4>
                <p class="text-gray-600">{{ $post->body }}</p>
                <small>By {{ $post->user->name }}</small>
            </div>
        @endforeach
    </div>
</x-app-layout>
