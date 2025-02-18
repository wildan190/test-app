<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <div class="bg-gray-100 dark:bg-gray-900 p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __('Roles Management') }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Manage user roles and permissions.') }}</p>
                        <a href="{{ route('roles.index') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">{{ __('Manage Roles') }}</a>
                    </div>

                    <div class="bg-gray-100 dark:bg-gray-900 p-6 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">{{ __('Permissions Management') }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Manage user permissions.') }}</p>
                        <a href="{{ route('permissions.index') }}" class="mt-4 inline-block px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">{{ __('Manage Permissions') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
