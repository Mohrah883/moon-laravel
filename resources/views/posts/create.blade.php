<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Create New Post
        </h2>
    </x-slot>

    <div class="py-4 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 shadow-sm sm:rounded-lg">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf

                <div class="mb-4">
                    <label class="block font-bold mb-1" for="title">Title</label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="w-full border-gray-300 rounded-md shadow-sm">
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="block font-bold mb-1" for="body">Body</label>
                    <textarea id="body" name="body" rows="5"
                        class="w-full border-gray-300 rounded-md shadow-sm">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Publish</button>
            </form>
        </div>
    </div>
</x-app-layout>
