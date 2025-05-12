<x-guest-layout>
    <div class="adoption-page">
        <header class="mb-6">
            <h1 class="text-3xl font-bold text-center text-gray-900 dark:text-gray-100">Adopt a Friend for Life</h1>
            <p class="text-center text-gray-700 dark:text-gray-300">
                Support Sherlock Rescue and give a loving home to a dog in need.
            </p>
        </header>

        <x-dog.dog-list :dogs="$dogs" />

        <section class="mt-8 text-center">
            <button class="bg-green-500 hover:bg-green-600 text-raisin-black-500 dark:text-white py-2 px-4 rounded">
                View All Dogs Available for Adoption
            </button>
        </section>

        <section class="mt-12 text-center">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100">Support Sherlock Rescue</h2>
            <p class="text-gray-700 dark:text-gray-300 mt-4">
                Can’t adopt right now? Support Sherlock Rescue by donating or shopping at Jacob Pet Supplies,
                where a percentage of certain sales goes directly to the rescue center.
            </p>
        </section>

        <footer class="mt-12 text-center">
            <p class="text-gray-700 dark:text-gray-300">
                For inquiries about adoption, please contact Sherlock Rescue at
                <a href="mailto:info@sherlockrescue.com" class="text-blue-500 dark:text-blue-400">info@sherlockrescue.com</a>
                or call
                <a href="tel:+123456789" class="text-blue-500 dark:text-blue-400">+123456789</a>
            </p>
        </footer>
    </div>
</x-guest-layout>
