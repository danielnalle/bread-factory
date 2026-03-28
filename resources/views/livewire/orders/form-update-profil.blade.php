<form class="space-y-4" wire:submit='updateProfil'>
    <div>
        <label for="nohp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
            Handphone</label>
        <input type="text" name="nohp"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
            placeholder="Masukan no handphone" wire:model='phone' />
        @error('phone')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div>
        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
            Lengkap</label>
        <textarea name="alamat"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
            placeholder="Masukan alamat lengkap" wire:model='address'></textarea>
        @error('address')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex justify-between gap-3">
        <a href="{{ route('carts') }}"
            class="w-full text-dark-primary border-2 bg-white hover:bg-gray-50 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Lain
            kali</a>
        <button type="submit"
            class="w-full text-white bg-primary hover:bg-primary-hover font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
    </div>
</form>
