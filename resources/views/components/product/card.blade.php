@props(['product'])

<div class="border border-gray-400 rounded-lg p-4 bg-gradient-to-b from-gray-700 to-gray-900 text-white shadow-lg hover:scale-105 transition-transform">

    <h2 class="text-xl font-semibold text-center">{{ $product->name }}</h2>
    <p class="text-sm text-gray-300 mt-2">{{ $product->description }}</p>
    <div class="mt-4">
        <p class="text-lg font-medium">Price: £{{ number_format($product->price, 2) }}</p>
        <p class="text-sm {{ $product->available ? 'text-green-400' : 'text-red-500' }}">
            {{ $product->available ? 'Available' : 'Out of Stock' }}
        </p>
        <p class="text-sm text-gray-400">Category: {{ $product->category }}</p>
    </div>
</div>
