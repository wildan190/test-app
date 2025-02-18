<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('All Reports') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                
                @if (Auth::user()->hasRole('Admin'))
                    <div class="mt-6 mb-6">
                        <a href="{{ route('reports.create') }}" class="inline-block bg-indigo-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-500 ml-4 mr-4">
                            Create Report
                        </a>
                    </div>
                @endif

                <table class="min-w-full bg-white dark:bg-gray-800 shadow-md rounded-lg">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                                No.
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                                Item Name
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                                Item Supplier
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                                Item Price
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                                Item Quantity
                            </th>
                            <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 dark:text-gray-400">
                                Total Price
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reports as $report)
                            <tr class="border-b border-gray-200 dark:border-gray-700">
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $report->item_name }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $report->item_supplier }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">
                                    Rp {{ number_format($report->item_price, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">{{ $report->item_qty }}</td>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-100">
                                    Rp {{ number_format($report->item_total_price, 0, ',', '.') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
