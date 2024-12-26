<form wire:submit='resetPassword'>
    @csrf
    <input type="hidden" name="token" value="{{ $token }}" wire:model='token'>
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
            placeholder="Masukan password" name="password" wire:model='password' />
        @error('password')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5">
        <label for="password_confirmation"
            class="block mb-2.5 text-sm sm:text-base font-normal text-dark-secondary dark:text-white">Konfirmasi
            Password</label>
        <input type="password" id="password_confirmation"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
            placeholder="Masukan konfirmasi password" name="password_confirmation" wire:model='password_confirmation' />
        @error('password_confirmation')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit"
        class="text-white bg-primary w-full hover:bg-primary-hover font-normal rounded-lg text-sm sm:text-base py-3 justify-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover">
        Reset Password
    </button>
</form>
