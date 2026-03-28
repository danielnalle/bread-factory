<form wire:submit='sendMessage'>
    <div class="flex gap-5 lg:gap-2 mb-5 flex-col lg:flex-row">
        <div>
            <input type="text" id="namaDepan" name="namaDepan"
                class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
                placeholder="Nama Depan" wire:model='namaDepan' />
            @error('namaDepan')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <input type="text" id="namaBelakang" name="namaBelakang"
                class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
                placeholder="Nama Belakang" wire:model='namaBelakang' />
            @error('namaBelakang')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-5">
        <input type="email" id="email" name="email"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
            placeholder="Email" wire:model='email' />
        @error('email')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5">
        <input type="text" id="nohp" name="nohp"
            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-tertiary dark:placeholder-gray-400 dark:text-white  dark:focus:ring-primary dark:focus:border-primary"
            placeholder="Nomor Telepon" wire:model='nohp' />
        @error('nohp')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-5">
        <textarea name="desc"
            class="border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary
        focus:border-primary block w-full px-3 py-2.5  placeholder-dark-tertiary placeholder:text-sm placeholder:sm:text-base
        dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
            id="desc" rows="6" maxlength="600" placeholder="Pesan" wire:model='pesan'></textarea>
        @error('pesan')
            <span class="text-red-600 text-sm">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit"
        class="text-white mx-auto sm:mx-0 text-base bg-primary hover:bg-primary-hover rounded-lg px-5 py-2.5 text-center inline-flex items-center justify-center dark:bg-primary dark:hover:bg-primary-hover w-full">
        Kirim
    </button>
</form>
