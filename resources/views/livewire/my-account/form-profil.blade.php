<form wire:submit='update'>
    <input type="hidden" wire:model='user_id'>
    <div class="mb-5">
        <label for="name"
            class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Nama</label>
        <input type="text" id="name"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
            wire:model="name" />
        @error('name')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5">
        <label for="email"
            class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Email</label>
        <input type="email" id="email"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
            placeholder="Masukan email" wire:model='email' />
        @error('email')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5">
        <label for="nohp" class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">No
            Handphone</label>
        <input type="text" id="nohp"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
            placeholder="Masukan email" wire:model='phone' />
        @error('phone')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex justify-end">
        <button type="submit"
            class="text-white text-sm sm:text-base bg-primary hover:bg-primary-hover rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
            Simpan
        </button>
    </div>
</form>
