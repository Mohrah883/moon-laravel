<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-bold mb-4">All Posts</h3>

                @if($posts->count())
                    @foreach ($posts as $post)
                        <div class="mb-4 border-b pb-3">
                            <h4 class="text-xl font-semibold">{{ $post->title }}</h4>
                            <p class="text-gray-700">{{ $post->body }}</p>
                            <small class="text-gray-500">By {{ $post->user->name }}</small>
                        </div>
                    @endforeach
                @else
                    <p>No posts found.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
