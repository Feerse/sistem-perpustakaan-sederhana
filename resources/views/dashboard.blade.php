<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pb-12">
        {{-- Banner --}}
        <div class="relative">
            <img src="{{ asset('storage/banner.jpg') }}" alt="Banner" class="w-full h-96 brightness-50 object-cover">
            <div class="absolute inset-0 flex items-center justify-center text-gray-100 text-center">
                <div>
                    <h1 class="text-5xl font-bold">Pustakaku</h1>
                    <p class="text-lg md:text-xl mb-8">Platform penyedia buku digital terlengkap</p>
                    <a href="{{ route('books.index') }}"
                        class="bg-gray-100 text-gray-900 p-3 rounded-md hover:bg-gray-300 duration-300">Explore</a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Buku --}}
            <div class="mt-16">
                <h2 class="mb-5 text-2xl font-bold">Books</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach($books as $book)
                    <div class="bg-white p-4 shadow rounded-lg">
                        <img src="{{ asset('storage/'.$book->cover) }}" alt="Cover Buku"
                            class="w-full h-40 object-contain rounded">
                        <h3 class="text-lg font-semibold mt-2">{{ $book->title }}</h3>
                        <p class="text-gray-500">{{ $book->author }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="w-full text-center mt-14 mb-4 animate-bounce">
                <a href="{{ route('books.index') }}">Lainnya &rarr;</a>
            </div>
        </div>
    </div>
</x-app-layout>