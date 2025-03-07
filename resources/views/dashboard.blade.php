<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div> --}}
            {{-- Banner --}}
            <div class="mt-6">
                <img src="{{ asset('images/head.jpg') }}" alt="Banner" class="w-full h-64 object-cover rounded-lg">
            </div>

            {{-- Buku --}}
            <div class="mt-8">
                {{-- Novel Section --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    {{-- @foreach($books as $book)
                    <div class="bg-white p-4 shadow rounded-lg">
                        <img src="{{ asset('images/books/'.$book->cover) }}" alt="Buku"
                            class="w-full h-40 object-cover rounded">
                        <h3 class="text-lg font-semibold mt-2">{{ $book->title }}</h3>
                        <p class="text-gray-500">{{ $book->author }}</p>
                        <a href="{{ route('book.detail', $book->id) }}"
                            class="block mt-2 bg-blue-500 text-white text-center py-2 rounded">
                            Detail
                        </a>
                    </div>
                    @endforeach --}}
                </div>
            </div>

            {{-- Tombol Lainnya --}}
            <div class="text-center mt-6">
                {{-- <a href="{{ route('books.all') }}" class="px-4 py-2 bg-gray-700 text-white rounded">
                    Lainnya...
                </a> --}}
            </div>
        </div>
</x-app-layout>