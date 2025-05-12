<x-guest-layout>
    <div class="max-w-screen-xl mx-auto px-4 py-6">
        <h1 class="text-3xl font-bold mb-6 text-gray-900 dark:text-gray-100">All Products</h1>

        {{-- Filter Dropdown --}}
        <div class="mb-6">
            <form method="GET" action="{{ route('products.index') }}" class="inline-block">
                <label for="filter" class="mr-2 font-medium text-gray-700 dark:text-gray-300">
                    Filter by Category:
                </label>
                <select
                    name="filter"
                    id="filter"
                    onchange="this.form.submit()"
                    class="border border-gray-300 dark:border-gray-600 rounded px-3 py-1
                           bg-white dark:bg-gray-800
                           text-black dark:text-white
                           focus:outline-none focus:ring focus:border-blue-300 dark:focus:border-blue-600">
                    <option value="" class="text-black dark:text-white bg-white dark:bg-gray-800">All</option>
                    @foreach($categories as $category)
                        <option
                            value="{{ $category }}"
                            {{ request('filter') === $category ? 'selected' : '' }}
                            class="text-black dark:text-white bg-white dark:bg-gray-800">
                            {{ $category }}
                        </option>
                    @endforeach
                </select>
            </form>
        </div>

        {{-- Product Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($products as $product)
                <x-product.card :product="$product" />
            @empty
                <p class="col-span-full text-gray-600 dark:text-gray-400">
                    No products available in this category.
                </p>
            @endforelse
        </div>
    </div>
</x-guest-layout>
