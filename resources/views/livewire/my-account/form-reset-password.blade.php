<form wire:submit='save'>
    <div class="mb-5">
        <label for="currPass"
            class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Password
            Saat Ini</label>
        <input type="password" id="currPass"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
            wire:model='currPass' />
        @error('currPass')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5">
        <label for="password"
            class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Password
            Baru</label>
        <input type="password" id="password"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
            wire:model='password' />
        @error('password')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5">
        <label for="password_confirmation"
            class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Konfirmasi
            Password</label>
        <input type="password" id="password_confirmation"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
            wire:model='password_confirmation' />
        @error('password_confirmation')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex justify-end">
        <button type="submit"
            class="text-white text-sm sm:text-base bg-primary hover:bg-primary-hover rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
            Ubah
        </button>
    </div>
</form>
