<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome to Birth Registration Portal') }}
        </h2>
    </x-slot>

    <div class="bg-gray-100 dark:bg-gray-900 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Section: Welcome Text -->
                <div class="flex flex-col justify-center">
                    <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-100">
                        Register Births Quickly and Securely
                    </h1>
                    <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">
                        Our platform makes birth registration simple, fast, and secure. Join us in making governance easy and accessible for everyone.
                    </p>
                    <div class="mt-6">
                        <a href="{{ route('birth_registration.create') }}" class="inline-block px-6 py-3 bg-indigo-600 text-white text-lg font-medium rounded-md hover:bg-indigo-700 transition">
                            {{ __('Register Now') }}
                        </a>
                    </div>
             </div>
          </div>
      </div>
  </div>
</x-app-layout>
