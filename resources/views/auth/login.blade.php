<x-authentication-layout>
    <div
        class="px-7 py-8 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full max-w-md">
        <form action="{{ route('login.getUsers') }}" method="POST">
            @csrf
            <div class="mb-6">
                <h1 class="text-center tracking-wider text-3xl text-primary font-main dark:text-gray-100 font-extrabold">
                    Login
                </h1>
            </div>
            <div class="mb-4">
                <h3 class="text-xl text-dark-primary dark:text-gray-100 font-semibold">
                    Welcome Back To Bakeru👋🏻</h3>
                <p class="text-base text-dark-secondary dark:text-gray-100 font-normal">Silakan masuk ke akun
                    Anda</p>
                {{--
                    Login Customer 
                    Silakan masuk ke akun Anda dan mulai memesan  --}}
            </div>
            @if (session('failed'))
                <div id="flash" class="p-4 text-center bg-red-50 text-red-500 font-bold">
                    {{ session('failed') }}
                </div>
            @endif
            <div class="mb-5">
                <label for="email"
                    class="block mb-2.5 text-base font-normal text-dark-secondary dark:text-white">Email</label>
                <input type="email" id="email"
                    class=" border border-gray-300 text-dark-primary text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
                    placeholder="Masukan email" name="email" required />
            </div>
            <div class="mb-5">
                <label for="password"
                    class="block mb-2.5 text-base font-normal text-dark-secondary dark:text-white">Password</label>
                <input type="password" id="password"
                    class=" border border-gray-300 text-dark-primary text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
                    placeholder="Masukan password" name="password" required />
            </div>
            <div class="mb-5 w-full flex justify-end">
                <a href="" class="text-primary hover:underline font-normal text-base">Lupa Kata Sandi?</a>
            </div>
            <button type="submit"
                class="text-white bg-primary w-full hover:bg-primary-hover font-normal rounded-lg text-base py-3 justify-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover tracking-widest">
                SIGN IN
            </button>
            {{--
                Login Customer
                <div class="font-normal text-base text-center">
                <span>Belum punya akun?</span><a href="{{ route('register') }}" class="text-primary hover:underline ml-1">Buat akun</a>
            </div>
                Tambahkan mb-6 di button SIGN IN
            --}}

        </form>

    </div>

</x-authentication-layout>
