<form wire:submit='loginUser'>
    @csrf
    @if (flash()->message)
        <div
            class="flex gap-2.5 items-start border border-red-200 bg-red-50 p-3 mb-2 font-normal text-sm sm:text-base text-dark-primary">
            <svg class="w-4 sm:w-5 h-4 sm:h-5" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.0833 13.75H11.9167V15.5833H10.0833V13.75ZM10.0833 6.41665H11.9167V11.9166H10.0833V6.41665ZM10.9908 1.83331C5.93084 1.83331 1.83334 5.93998 1.83334 11C1.83334 16.06 5.93084 20.1666 10.9908 20.1666C16.06 20.1666 20.1667 16.06 20.1667 11C20.1667 5.93998 16.06 1.83331 10.9908 1.83331ZM11 18.3333C6.94834 18.3333 3.66668 15.0516 3.66668 11C3.66668 6.94831 6.94834 3.66665 11 3.66665C15.0517 3.66665 18.3333 6.94831 18.3333 11C18.3333 15.0516 15.0517 18.3333 11 18.3333Z"
                    fill="#dc2626" />
            </svg>

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
                class="rounded-sm border-gray-300 focus:ring-0 checked:bg-primary focus:ring-transparent hover:scale-105 focus:outline-none"
                id="checkbox" name="remember" type="checkbox" wire:model='remember'>
            <label for="remember" class="text-sm sm:text-base font-normal text-dark-secondary">Remember me</label>
        </div>
        <a href="" class="text-primary hover:underline font-normal text-sm sm:text-base">Lupa Kata Sandi?</a>
    </div>
    <button type="submit"
        class="text-white bg-primary w-full hover:bg-primary-hover font-normal rounded-lg text-sm sm:text-base py-3 justify-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover tracking-widest">
        SIGN IN
    </button>

    {{-- Login Customer --}}
    <div class="font-normal text-sm sm:text-base text-dark-secondary text-center mt-6">
        <span>Belum punya akun?</span><a href="{{ route('register') }}" class="text-primary hover:underline ml-1">Buat
            akun</a>
    </div>



</form>
