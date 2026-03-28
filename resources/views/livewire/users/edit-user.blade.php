<form class="max-w-full mx-auto" wire:submit="update">
    <div class="md:grid md:grid-cols-2 gap-5">
        <div>
            <div class="mb-5">
                <label for="name" class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Nama<span
                        class="text-red-600">*</span></label>
                <input type="text" id="name"
                    class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                    placeholder="Masukan nama" required wire:model.live="name" />
                @error('name')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div>
            <div class="mb-5">
                <label for="email"
                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Email<span
                        class="text-red-600">*</span></label>
                <input type="email" id="email"
                    class="border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                    placeholder="Masukan email" required wire:model.live="email" />
                @error('email')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="md:grid md:grid-cols-2 gap-5">
        <div>
            <div class="mb-5">
                <label for="jabatan"
                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Jabatan<span
                        class="text-red-600">*</span></label>
                <select id="jabatan" required wire:model.live="role"
                    class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary">
                    <option value="">-- Pilih jabatan --</option>
                    <option value="admin">Admin</option>
                    <option value="pegawai">Pegawai</option>
                </select>
                @error('role')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <button type="submit"
        class="text-white bg-primary hover:bg-primary-hover font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
        Simpan
    </button>
    <a href="{{ route('users') }}"
        class="text-dark-primary bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
        Batal
    </a>
</form>
