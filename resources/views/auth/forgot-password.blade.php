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
            Lupa Password?
        </h1>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="email"
                    class="block mb-2.5 text-sm sm:text-base font-normal text-dark-secondary dark:text-white">Email</label>
                <input type="email" id="email"
                    class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
                    placeholder="Masukan email" name="email" />
            </div>
            <button type="submit"
                class="text-white bg-primary w-full hover:bg-primary-hover font-normal rounded-lg text-sm sm:text-base py-3 justify-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover">
                Kirim Reset Link
            </button>
        </form>

    </div>

</x-authentication-layout>
