<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">
                        Welcome, {{ Auth::user()->name }}! 
                        You are successfully logged in.
                    </h2>
                    <p class="text-gray-600 mt-1">
                        Logged in as: <span class="font-medium text-indigo-600">{{ Auth::user()->email }}</span>
                    </p>
                    <div class="mt-4 p-4 bg-green-50 border border-green-200 rounded-lg">
                        <p class="text-green-700 font-medium">✅ Authentication System Active</p>
                        <p class="text-green-600 text-sm mt-1">Your session is protected by Laravel's authentication middleware.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
