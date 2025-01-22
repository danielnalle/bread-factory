<form wire:submit='loginUser'>
    @csrf
    @if (flash()->message && flash()->class !== 'success' && flash()->class !== 'error')
        <div
            class="flex gap-2.5 items-start border border-red-200 bg-red-50 p-3 mb-2 font-normal text-sm sm:text-base text-dark-primary">
            <svg class="w-4 sm:w-5 h-4 sm:h-5 shrink-0" viewBox="0 0 22 22" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.0833 13.75H11.9167V15.5833H10.0833V13.75ZM10.0833 6.41665H11.9167V11.9166H10.0833V6.41665ZM10.9908 1.83331C5.93084 1.83331 1.83334 5.93998 1.83334 11C1.83334 16.06 5.93084 20.1666 10.9908 20.1666C16.06 20.1666 20.1667 16.06 20.1667 11C20.1667 5.93998 16.06 1.83331 10.9908 1.83331ZM11 18.3333C6.94834 18.3333 3.66668 15.0516 3.66668 11C3.66668 6.94831 6.94834 3.66665 11 3.66665C15.0517 3.66665 18.3333 6.94831 18.3333 11C18.3333 15.0516 15.0517 18.3333 11 18.3333Z"
                    fill="#dc2626" />
            </svg>
            {{ flash()->message }}
        </div>
    @endif

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
    <div class="mb-5">
        <label for="email"
            class="block mb-2.5 text-sm sm:text-base font-normal text-dark-secondary dark:text-white">Email</label>
        <input type="email" id="email"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
            placeholder="Masukan email" name="email" wire:model='email' />
        @error('email')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5">
        <label for="password"
            class="block mb-2.5 text-sm sm:text-base font-normal text-dark-secondary dark:text-white">Password</label>
        <input type="password" id="password"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
            placeholder="Masukan password" name="password" wire:model='password' autocomplete="off" />
        @error('password')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5 w-full flex justify-between">
        <div class="flex gap-2 items-center">
            <input
                class="rounded-sm cursor-pointer border-gray-300 focus:ring-0 checked:bg-primary focus:ring-transparent hover:scale-105 focus:outline-none"
                id="checkbox" name="remember" type="checkbox" wire:model='remember'>
            <label for="remember" class="text-sm sm:text-base font-normal text-dark-secondary">Remember me</label>
        </div>
        <a href="{{ route('password.request') }}"
            class="text-primary hover:underline font-normal text-sm sm:text-base">Lupa Kata Sandi?</a>
    </div>
    <button type="submit"
        class="text-white bg-primary w-full hover:bg-primary-hover font-normal rounded-lg text-sm sm:text-base py-3 justify-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover tracking-widest">
        SIGN IN
    </button>
    <p class="text-center my-2">Atau</p>
    <a href="{{ route('login.google') }}"
        class="text-dark-primary border bg-white w-full hover:bg-gray-100 font-normal rounded-lg text-sm sm:text-base py-3 justify-center inline-flex items-center">
        <svg width="20" class="me-2" viewBox="0 0 90 92" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M89.2935 47.2632C89.2935 44.1669 89.0402 41.082 88.5106 38.0291H45.6434V55.5161H70.1928C69.178 61.1578 65.9023 66.1488 61.1167 69.3115V80.6721H75.7728C84.3529 72.7825 89.2935 61.0914 89.2935 47.2632Z"
                fill="#4285F4" />
            <path
                d="M45.6437 91.6469C57.9078 91.6469 68.2414 87.625 75.7731 80.6831L61.117 69.3225C57.0364 72.0884 51.7868 73.664 45.6437 73.664C33.7887 73.664 23.7305 65.676 20.1245 54.9212H5.03806V66.6229C12.7575 81.9726 28.462 91.6469 45.6437 91.6469Z"
                fill="#34A853" />
            <path
                d="M20.1356 54.9209C18.228 49.2906 18.228 43.175 20.1356 37.534V25.843H5.03842C-1.41369 38.6793 -1.41369 53.797 5.03842 66.634L20.1356 54.9209Z"
                fill="#FBBC04" />
            <path
                d="M45.6437 18.8025C52.1287 18.7033 58.3816 21.1388 63.0795 25.6124L76.06 12.654C67.8331 4.94142 56.9372 0.699022 45.6437 0.820342C28.462 0.820342 12.7469 10.5054 5.03806 25.8436L20.1352 37.5453C23.7305 26.7798 33.7887 18.8025 45.6437 18.8025Z"
                fill="#EA4335" />
        </svg>

        Masuk dengan Google
    </a>

    {{-- Login Customer --}}
    <div class="font-normal text-sm sm:text-base text-dark-secondary text-center mt-6">
        <span>Belum punya akun?</span><a href="{{ route('register') }}" class="text-primary hover:underline ml-1">Buat
            akun</a>
    </div>



</form>
