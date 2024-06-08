<x-layout>
      <!-- nafbar -->
  <x-navbar></x-navbar>
  
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-3">
        @foreach(\App\Models\Product::all() as $product)
            <x-card :product="$product" />
        @endforeach
    </div>
</x-layout>
