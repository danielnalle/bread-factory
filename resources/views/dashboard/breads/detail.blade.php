<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="sm:flex sm:justify-between sm:items-center mb-6">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Detail Roti</h1>
            </div>
            <div class="mb-4 sm:mb-0">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-dark-primary hover:text-primary-hover dark:text-gray-400 dark:hover:text-white">
                                Katalog
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('breads') }}"
                                    class="inline-flex ms-1 md:ms-2 items-center text-sm font-medium text-dark-primary hover:text-primary-hover dark:text-gray-400 dark:hover:text-white">
                                    Roti
                                </a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="ms-1 text-sm font-medium text-dark-secondary md:ms-2 dark:text-gray-400">Detail</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>



        <!-- Cards -->

        <form class="max-w-full mx-auto">
            <div class="md:grid md:grid-cols-3 gap-5 mb-5">
                <div class="flex flex-col gap-5 col-span-2">
                    <div class="bg-white p-5 rounded-lg shadow-sm">
                        <div class="mb-5">
                            <label for="name"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Nama<span
                                    class="text-red-600">*</span></label>
                            <input type="text" id="name" disabled
                                class="border border-gray-300 bg-gray-100 text-dark-primary
                                text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3
                                placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600
                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary
                                dark:focus:border-primary"
                                placeholder="Masukan nama roti" value="{{ $bread->name }}" />
                        </div>
                        <div>
                            <label for="desc"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Deskripsi<span
                                    class="text-red-600">*</span></label>
                            <textarea name="desc" disabled
                                class="border border-gray-300 bg-gray-100 text-dark-primary text-sm rounded-lg focus:ring-primary
                                focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600
                                dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                id="desc" rows="6" maxlength="600" placeholder="Masukan deskripsi roti">{{ $bread->description }}</textarea>
                        </div>
                    </div>
                    <div class="bg-white p-5 rounded-lg shadow-sm mb-5 md:mb-0">
                        <label for="image"
                            class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Gambar<span
                                class="text-red-600">*</span></label>

                        <div x-data="fileUpload" x-on:drop="dropHandler($event)"
                            x-on:dragover="dragOverHandler($event)" x-on:dragleave="dragLeaveHandler($event)"
                            class="border-2 border-dashed text-sm border-gray-300 bg-gray-100 rounded-lg h-auto relative w-full">

                            <input type="file" id="image" disabled class="w-full p-8 cursor-pointer" />
                            <div wire:loading wire:target="image" class="w-full text-center pb-8">Uploading...</div>
                            <img src="{{ Storage::url($bread->image) }}" class="p-5 w-3/4 mx-auto">
                        </div>
                    </div>
                </div>

                <div>
                    <div class="bg-white p-5 rounded-lg shadow-sm">
                        <div class="mb-5">
                            <label for="kuantitas"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Kuantitas<span
                                    class="text-red-600">*</span></label>
                            <input type="number" id="kuantitas" disabled
                                class=" border border-gray-300 bg-gray-100 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                placeholder="Masukan kuantitas roti" value="{{ $bread->quantity }}" />
                        </div>
                        <div class="mb-5">
                            <label for="harga"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Harga<span
                                    class="text-red-600">*</span></label>
                            <input type="number" id="harga" disabled
                                class=" border border-gray-300 bg-gray-100 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                placeholder="Masukan harga roti" value="{{ $bread->quantity }}" />
                        </div>
                        <div class="mb-5">
                            <label for="minorder"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Minimal
                                Pesanan<span class="text-red-600">*</span></label>
                            <input type="number" id="minorder" disabled
                                class=" border border-gray-300 bg-gray-100 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                placeholder="Masukan minimal pesanan" value="{{ $bread->min_order }}" />
                        </div>
                        <div class="mb-5">
                            <label for="unit"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Satuan<span
                                    class="text-red-600">*</span></label>
                            <input type="text" id="unit" disabled
                                class=" border border-gray-300 bg-gray-100 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                placeholder="Masukan minimal pesanan" value="{{ $bread->unit }}" />
                        </div>
                        <div>
                            <label for="kategori"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Kategori<span
                                    class="text-red-600">*</span></label>
                            <select id="kategori" wire:model='bread_type' disabled
                                class=" border border-gray-300 bg-gray-100 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary">
                                <option value="{{ $bread->bread_type->name }}">{{ $bread->bread_type->name }}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('breads') }}"
                class="text-white bg-primary hover:bg-primary-hover font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                Kembali
            </a>
        </form>
    </div>
</x-app-layout>
