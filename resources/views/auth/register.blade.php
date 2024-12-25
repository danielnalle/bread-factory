<x-authentication-layout>
    <div
        class="px-7 py-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full max-w-md">

        <div class="mb-6">
            <h1 class="text-center tracking-wider text-3xl text-primary font-main dark:text-gray-100 font-extrabold">
                Register
            </h1>
        </div>
        <div class="mb-4">
            <h3 class="text-xl text-dark-primary dark:text-gray-100 font-semibold">
                Welcome To Bakeru👋🏻</h3>
            <p class="text-base text-dark-secondary dark:text-gray-100 font-normal">Daftar
                untuk
                membuat akun Anda</p>
        </div>
        @livewire('auth.form-register')

    </div>

</x-authentication-layout>
