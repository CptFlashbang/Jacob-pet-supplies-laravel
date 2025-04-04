@extends('layouts.app')

@section('content')
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold">All Products by Category</h1>
    </div>

    @foreach ($products as $category => $items)
        <h2 class="text-2xl font-semibold mb-4 mt-10">{{ $category }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($items as $product)
                <div class="p-4 border rounded shadow bg-white @if($product->isDiscounted()) bg-yellow-100 @endif">
                    <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <p class="font-semibold mt-2">£{{ number_format($product->price, 2) }}</p>

                    @if ($product->isDiscounted())
                        <p class="text-red-600 font-bold mt-2">Discounted!</p>
                    @endif
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
