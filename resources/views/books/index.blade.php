<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Books') }}
    </h2>
  </x-slot>

  <div class="pb-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      {{-- Buku --}}
      <div class="mt-8">
        {{-- Novel Section --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          @foreach($books as $book)
          <div class="bg-white p-4 shadow rounded-lg">
            <img src="{{ asset('storage/'.$book->cover) }}" alt="Cover Buku" class="w-full h-40 object-contain rounded">
            <h3 class="text-lg font-semibold mt-2">{{ $book->title }}</h3>
            <p class="text-gray-500">{{ $book->author }}</p>
          </div>
          @endforeach
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