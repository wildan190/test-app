<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('reports.store') }}" method="POST" class="space-y-6 px-6 py-6">
                    @csrf

                    <div>
                        <label for="item_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Item Name</label>
                        <input type="text" id="item_name" name="item_name" required class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-300">
                    </div>

                    <div>
                        <label for="item_supplier" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Item Supplier</label>
                        <input type="text" id="item_supplier" name="item_supplier" required class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-300">
                    </div>

                    <div>
                        <label for="item_price" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Item Price</label>
                        <input type="text" id="item_price" name="item_price" required min="0" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-300" oninput="formatRupiah(this)">
                    </div>

                    <div>
                        <label for="item_qty" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Item Quantity</label>
                        <input type="number" id="item_qty" name="item_qty" required min="1" class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-gray-300">
                    </div>

                    <button type="submit" class="mt-6 w-full bg-indigo-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-500">Create Report</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function formatRupiah(input) {
            let value = input.value.replace(/[^0-9]/g, '');
            let formatted = value.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            input.value = 'Rp ' + formatted;
        }
    </script>
</x-app-layout>
