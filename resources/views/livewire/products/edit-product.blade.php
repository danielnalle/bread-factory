<form class="max-w-full mx-auto" wire:submit="update">
    <div class="md:grid md:grid-cols-3 gap-5 mb-5">
        <div class="flex flex-col gap-5 col-span-2">
            <div class="bg-white p-5 rounded-lg shadow-sm">
                <div class="mb-5">
                    <label for="name"
                        class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Nama<span
                            class="text-red-600">*</span></label>
                    <input type="text" id="name"
                        class="border border-gray-300 text-dark-primary
                        text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3
                        placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary
                        dark:focus:border-primary"
                        placeholder="Masukan nama produk" wire:model="name" />
                    @error('name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="desc"
                        class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Deskripsi<span
                            class="text-red-600">*</span></label>
                    <textarea name="desc"
                        class="border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary
                        focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                        id="desc" rows="6" maxlength="600" placeholder="Masukan deskripsi produk" wire:model='description'></textarea>
                    @error('description')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="bg-white p-5 rounded-lg shadow-sm mb-5 md:mb-0">
                <label for="image"
                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Gambar<span
                        class="text-red-600">*</span></label>

                <div x-data="fileUpload" x-on:drop="dropHandler($event)" x-on:dragover="dragOverHandler($event)"
                    x-on:dragleave="dragLeaveHandler($event)"
                    class="border-2 border-dashed text-sm border-gray-300 rounded-lg h-auto relative w-full">

                    <input type="file" id="image" wire:model="image" class="w-full p-8 cursor-pointer" />
                    <div wire:loading wire:target="image" class="w-full text-center pb-8">Uploading...</div>
                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" class="p-5 w-3/4 mx-auto">
                    @elseif($prevImage)
                        <img src="{{ Storage::url($prevImage) }}" class="p-5 w-3/4 mx-auto">
                    @endif
                </div>
                @error('image')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div>
            <div class="bg-white p-5 rounded-lg shadow-sm">
                <div class="mb-5">
                    <label for="kuantitas"
                        class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Kuantitas<span
                            class="text-red-600">*</span></label>
                    <input type="number" id="kuantitas"
                        class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                        placeholder="Masukan kuantitas produk" wire:model='quantity' />
                    @error('quantity')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="harga"
                        class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Harga<span
                            class="text-red-600">*</span></label>
                    <input type="number" id="harga"
                        class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                        placeholder="Masukan harga produk" wire:model='price' />
                    @error('price')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="minorder"
                        class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Minimal
                        Pesanan<span class="text-red-600">*</span></label>
                    <input type="number" id="minorder"
                        class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                        placeholder="Masukan minimal pesanan" wire:model='min_order' />
                    @error('min_order')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="kategori"
                        class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Kategori<span
                            class="text-red-600">*</span></label>
                    <select id="kategori" wire:model='category'
                        class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary">
                        <option value="">-- Pilih kategori --</option>
                        @foreach ($categories as $category)
                            <option value={{ $category->id }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <button type="submit"
        class="text-white bg-primary hover:bg-primary-hover font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
        Simpan
    </button>
    <a href="{{ route('products') }}"
        class="text-dark-primary bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Batal</a>
</form>
