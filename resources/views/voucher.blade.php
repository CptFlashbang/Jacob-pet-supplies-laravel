<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Your Discount Voucher
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded shadow text-center">
                <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">10% Off In-Store!</h3>
                <p class="text-gray-700 dark:text-gray-300 mb-6">
                    Show this voucher at checkout to receive 10% off your next purchase at Jacob’s Pet Supplies.
                </p>
                <button onclick="window.print()" class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded shadow">
                    Print Voucher
                </button>
            </div>
        </div>
    </div>
</x-app-layout>
