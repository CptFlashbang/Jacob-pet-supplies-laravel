<li>
    {{-- <div class="dog-card">
        <img src="{{ $dog->img_url }}" alt="{{ $dog->name }}" class="w-32 h-32 rounded-3xl mb-4" />
        <h2 class="text-lg font-bold">{{ $dog->name }}</h2>
        <p>{{ $dog->age }}</p>
        <p>{{ $dog->breed }}</p>
        <p class="text-sm italic">{{ $dog->description }}</p>
        <button class="mt-2 bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded">
            Adopt {{ $dog->name }}
        </button>
    </div> --}}

    <div class="bg-white dark:bg-gray-800 shadow rounded overflow-hidden">
        <img src="{{ $dog->img_url }}" alt="{{ $dog->name }}" class="w-full h-48 object-cover">
        <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">{{ $dog->name }}</h3>
            <p class="text-gray-700 dark:text-gray-300">{{ $dog->breed }}</p>
            <button
            class="mt-4 bg-blue-500 hover:bg-blue-600 dark:bg-blue-600 dark:hover:bg-blue-700
                   text-white font-medium py-1.5 px-4 rounded transition">
            Adopt {{ $dog->name }}
            </button>
        </div>
    </div>

</li>
