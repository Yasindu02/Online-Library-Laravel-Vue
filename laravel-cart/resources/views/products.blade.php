<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Book List') }}
    </h2>

    <div class="flex items-center justify-end mt-4">
  <!-- Search by title -->
  <input type="text" placeholder="Search by title" class="w-full rounded-md shadow-sm mr-4" id="titleInput">
  <button type="button" class="px-4 py-2 text-sm font-semibold text-white bg-blue-800 rounded mr-4" onclick="searchByTitle()">Search</button>

  <!-- Search by genre -->
  <input type="text" placeholder="Search by genre" class="w-full rounded-md shadow-sm mr-4" id="genreInput">
  <button type="button" class="px-4 py-2 text-sm font-semibold text-white bg-blue-800 rounded" onclick="searchByGenre()">Search</button>
</div>



  </x-slot>

  <div class="container px-20 py-0 mx-auto">
    <div class="grid grid-cols-1 gap-10 mt-9 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
      @foreach ($products as $product)
        <div class="product-card" data-product-id="{{ $product->id }}">
          <h1 class="flex justify-center font-bold text-blue-800 uppercase">{{ $product->name }}</h1>
          <img src="{{ url($product->image) }}" alt="" class="w-full max-h-65">
          <div class="flex items-end justify-end w-full bg-cover">
          </div>
          <div class="px-5 py-3">
            <h3 class="text-gray-700 mb-2">{{ $product->description }}</h3> 
            <span class="mt-3 text-black-500">Genre - {{ $product->genre }}</span>
            <br>
            <span class="mt-2 text-black-700">Price - ${{ $product->price }}</span>
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" value="{{ $product->id }}" name="id">
              <input type="hidden" value="{{ $product->name }}" name="name">
              <input type="hidden" value="{{ $product->description }}" name="description">
              <input type="hidden" value="{{ $product->price }}" name="price">
              <input type="hidden" value="{{ $product->image }}" name="image">
              <input type="hidden" value="1" name="quantity">
              <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
            </form>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</x-app-layout>
