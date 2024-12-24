<form class="max-w-full mx-auto" wire:submit='update'>
    <div class="md:grid md:grid-cols-2">
        <div class="flex flex-col gap-5">
            <div>
                <label for="name" class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Nama<span
                        class="text-red-600">*</span></label>
                <input type="text" id="name"
                    class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                    placeholder="Masukan nama kategori" wire:model='name' />
                @error('name')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="active" class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Is
                    Active<span class="text-red-600">*</span></label>

                <label class="inline-flex items-center cursor-pointer mb-5">
                    <input type="checkbox" name="active" id="active"
                        @if ($isActive) checked @endif wire:model='isActive' class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-gray-200  rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-primary">
                    </div>
                </label>
                @error('isActive')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>

    <button type="submit"
        class="text-white bg-primary hover:bg-primary-hover font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
        Tambah
    </button>
    <a href="{{ route('categories') }}"
        class="text-dark-primary bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Batal</a>
</form>
