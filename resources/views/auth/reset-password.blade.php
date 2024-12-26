<x-authentication-layout>

    <div
        class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full max-w-md">
        @if (flash()->class == 'success')
            <div class="p-4 mb-4 text-sm text-green-600 w-full font-medium text-center rounded-lg bg-green-500 bg-opacity-20 dark:bg-gray-800 transform transition-all duration-300 ease-in-out opacity-0 scale-90"
                role="alert" id="alert">
                {{ flash()->message }}
            </div>
        @elseif(flash()->class == 'error')
            <div class="p-4 mb-4 text-sm text-red-600 w-full font-medium text-center rounded-lg bg-red-500 bg-opacity-20 dark:bg-gray-800 transform transition-all duration-300 ease-in-out opacity-0 scale-90"
                role="alert" id="alert">
                {{ flash()->message }}
            </div>
        @endif
        <h1 class="text-xl text-center text-dark-primary md:text-2xl font-medium mb-4">
            Reset Password
        </h1>
        @livewire('auth.form-reset-password', ['token' => $token])

    </div>

</x-authentication-layout>
