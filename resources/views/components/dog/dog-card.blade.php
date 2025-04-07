<li>
    <div class="dog-card">
        <img src="{{ $dog->image }}" alt="{{ $dog->name }}" class="w-32 h-32 rounded-3xl mb-4" />
        <h2 class="text-lg font-bold">{{ $dog->name }}</h2>
        <p>{{ $dog->age }}</p>
        <p>{{ $dog->breed }}</p>
        <p class="text-sm italic">{{ $dog->description }}</p>
        <button class="mt-2 bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded">
            Adopt {{ $dog->name }}
        </button>
    </div>
</li>
