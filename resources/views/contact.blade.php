<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Contact Us
        </h2>
    </x-slot>

    <div class="py-4 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded shadow-sm">
            <form method="POST" action="{{ route('contact.send') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block font-bold mb-1">Name</label>
                    <input name="name" id="name" class="w-full border rounded" value="{{ old('name') }}">
                </div>

                <div class="mb-4">
                    <label for="email" class="block font-bold mb-1">Email</label>
                    <input name="email" id="email" type="email" class="w-full border rounded" value="{{ old('email') }}">
                </div>

                <div class="mb-4">
                    <label for="message" class="block font-bold mb-1">Message</label>
                    <textarea name="message" id="message" rows="4" class="w-full border rounded">{{ old('message') }}</textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Send</button>
            </form>
        </div>
    </div>
</x-app-layout>
