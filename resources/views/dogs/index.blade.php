@extends('layouts.app')

@section('content')
    <div class="adoption-page">
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-center">Adopt a Friend for Life</h1>
            <p class="text-center text-gray-700">
                Support Sherlock Rescue and give a loving home to a dog in need.
            </p>
        </header>

        <div class="flex justify-center items-center">
            <ul class="grid content-center justify-center grid-cols-2 gap-4 md:grid-cols-5">
                @foreach ($dogs as $dog)
                    <x-dog-card :dog="$dog" />
                @endforeach
            </ul>
        </div>

        <section class="mt-8 text-center">
            <a href="{{ route('dogs.index') }}">
                <button class="bg-green-500 text-raisin-black-500 py-2 px-4 rounded hover:bg-green-600">
                    View All Dogs Available for Adoption
                </button>
            </a>
        </section>

        <section class="mt-12 text-center">
            <h2 class="text-2xl font-bold">Support Sherlock Rescue</h2>
            <p class="text-gray-700 mt-4">
                Can’t adopt right now? Support Sherlock Rescue by donating or shopping at Jacob Pet Supplies, where a
                percentage of certain sales goes directly to the rescue center.
            </p>
        </section>

        <footer class="mt-12 text-center">
            <p class="text-gray-700">
                For inquiries about adoption, please contact Sherlock Rescue at
                <a href="mailto:info@sherlockrescue.com" class="text-blue-500">info@sherlockrescue.com</a>
                or call
                <a href="tel:+123456789" class="text-blue-500">+123456789</a>
            </p>
        </footer>
    </div>
@endsection
