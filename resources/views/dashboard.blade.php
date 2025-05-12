<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Welcome, {{ Auth::user()->name }}!
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">
                    Thanks for subscribing!
                </h3>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    As a valued subscriber, you’re entitled to exclusive in-store discounts. Click below to print your voucher and bring it to Jacob’s Pet Supplies.
                </p>

                <a href="{{ route('voucher.print') }}"
                   class="inline-block px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-semibold rounded shadow">
                    Print Discount Voucher
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">Subscriber Benefits</h4>
                <ul class="list-disc list-inside text-gray-700 dark:text-gray-300">
                    <li>Exclusive monthly discounts</li>
                    <li>Early access to adoption events</li>
                    <li>Pet care tips from our experts</li>
                </ul>
            </div>

        </div>
    </div>
</x-app-layout>
