<li class="dog-card bg-white shadow-md p-4 rounded">
    <img src="{{ asset('storage/dogs/' . $dog->image) }}" alt="{{ $dog->name }}" class="w-full h-48 object-cover rounded" />
    <h3 class="text-lg font-semibold mt-2">{{ $dog->name }}</h3>
    <p class="text-gray-600">{{ $dog->breed }}</p>
  </li>
