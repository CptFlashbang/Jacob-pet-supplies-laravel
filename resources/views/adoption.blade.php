@extends('layouts.app')

@section('content')
<div class="adoption-page max-w-7xl mx-auto px-4 py-8">
    {{-- Header --}}
    <header class="mb-6 text-center">
        <h1 class="text-3xl font-bold">Adopt a Friend for Life</h1>
        <p class="text-gray-700">
            Support Sherlock Rescue and give a loving home to a dog in need.
        </p>
    </header>

    {{-- Dog Listing --}}
    <div class="flex justify-center items-center">
        <ul class="grid content-center justify-center grid-cols-2 gap-4 md:grid-cols-5">
            @foreach ($dogs as $dog)
                <li class="border rounded p-4 bg-white shadow text-center">
                    <h3 class="font-semibold text-lg mb-1">{{ $dog->name }}</h3>
                    <img src="{{ asset('storage/' . $dog->image_path) }}" alt="{{ $dog->name }}" class="w-full h-40 object-cover rounded mb-2">
                    <p class="text-sm text-gray-600">{{ $dog->description }}</p>
                </li>
            @endforeach
        </ul>
    </div>

    {{-- View All Button --}}
    <section class="mt-8 text-center">
        <a href="{{ route('dogs.index') }}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-600">
            View All Dogs Available for Adoption
        </a>
    </section>

    {{-- Support Section --}}
    <section class="mt-12 text-center">
        <h2 class="text-2xl font-bold">Support Sherlock Rescue</h2>
        <p class="text-gray-700 mt-4">
            Can’t adopt right now? Support Sherlock Rescue by donating or
            shopping at Jacob Pet Supplies, where a percentage of certain sales
            goes directly to the rescue center.
        </p>
    </section>

    {{-- Footer --}}
    <footer class="mt-12 text-center text-sm text-gray-700">
        For inquiries about adoption, please contact Sherlock Rescue at
        <a href="mailto:info@sherlockrescue.com" class="text-blue-500">info@sherlockrescue.com</a>
        or call
        <a href="tel:+123456789" class="text-blue-500">+123456789</a>
    </footer>
</div>
@endsection
