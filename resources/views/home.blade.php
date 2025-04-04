@extends('layouts.app')

@section('content')
    <div class="text-center p-6 bg-green-100 rounded-xl shadow-md">
        <h1 class="text-3xl font-bold mb-2">Welcome to Jacob Pet Supplies</h1>
        <p class="text-lg text-gray-700">{{ $seasonalMessage }}</p>
    </div>

    <div class="mt-10">
        <h2 class="text-2xl font-semibold text-center mb-6">Featured Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($randomProducts as $product)
                <div class="bg-white border p-4 rounded shadow text-center">
                    <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                    <p class="text-gray-600">{{ $product->description }}</p>
                    <p class="font-semibold mt-2">£{{ number_format($product->price, 2) }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
