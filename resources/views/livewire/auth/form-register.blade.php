<form wire:submit='registerUser'>
    <div class="mb-5">
        <label for="username"
            class="block mb-2.5 text-sm sm:text-base font-normal text-dark-secondary dark:text-white">Nama
            Pengguna</label>
        <input type="text" id="username"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
            placeholder="Masukan nama pengguna" wire:model="username" />
        @error('username')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5">
        <label for="email"
            class="block mb-2.5 text-sm sm:text-base font-normal text-dark-secondary dark:text-white">Email</label>
        <input type="email" id="email"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
            placeholder="Masukan email" wire:model="email" />
        @error('email')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5">
        <label for="password"
            class="block mb-2.5 text-sm sm:text-base font-normal text-dark-secondary dark:text-white">Password</label>
        <input type="password" id="password"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
            placeholder="Masukan password" wire:model="password" autocomplete="off" />
        @error('password')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit"
        class="text-white bg-primary w-full hover:bg-primary-hover font-normal rounded-lg text-sm sm:text-base py-3 justify-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover tracking-widest mb-6">
        SIGN UP
    </button>

    <div class="font-normal text-sm sm:text-base text-center">
        <span>Sudah punya akun?</span><a href="{{ route('login') }}" class="text-primary hover:underline ml-1">Log
            in</a>
    </div>


</form>
