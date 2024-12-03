<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="sm:flex sm:justify-between sm:items-center mb-6">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Edit Produk</h1>
            </div>
            <div class="mb-4 sm:mb-0">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-dark-primary hover:text-primary-hover dark:text-gray-400 dark:hover:text-white">
                                Katalgo
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('products') }}"
                                    class="inline-flex ms-1 md:ms-2 items-center text-sm font-medium text-dark-primary hover:text-primary-hover dark:text-gray-400 dark:hover:text-white">
                                    Produk
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
                                    class="ms-1 text-sm font-medium text-dark-secondary md:ms-2 dark:text-gray-400">Edit</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>



        <!-- Cards -->

        <div class="antialiased relative">
            <form class="max-w-full mx-auto">
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
                                    placeholder="Masukan nama produk" value="White Bread" required />
                            </div>
                            <div>
                                <label for="desc"
                                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Deskripsi<span
                                        class="text-red-600">*</span></label>
                                <textarea name="desc"
                                    class="border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary
                                        focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600
                                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                    id="desc" rows="6" maxlength="600" placeholder="Masukan deskripsi produk" required>Nikmati kelezatan roti croissant kami yang renyah di luar dan lembut di dalam! Dibuat dengan mentega berkualitas tinggi dan bahan pilihan, croissant ini memiliki lapisan-lapisan yang sempurna dan aroma harum yang menggoda. Cocok untuk sarapan, teman minum kopi, atau camilan di waktu santai Anda.

Tersedia dalam berbagai varian rasa, mulai dari original, cokelat, hingga isian keju yang meleleh di mulut. Setiap gigitan memberikan perpaduan sempurna antara rasa gurih dan manis yang memanjakan lidah Anda.

Segera coba croissant kami dan rasakan sensasi roti premium yang istimewa!
                                </textarea>
                            </div>
                        </div>
                        <div class="bg-white p-5 rounded-lg shadow-sm mb-5 md:mb-0">
                            {{-- <div>
                                <label for="gambar"
                                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Gambar<span
                                        class="text-red-600">*</span></label>
                                <input type="file" id="gambar" name="gambar" accept="image/*" required>
                            </div> --}}
                            <label for="gambar"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Gambar<span
                                    class="text-red-600">*</span></label>
                            <div x-data="fileUpload" x-on:drop="dropHandler($event)"
                                x-on:dragover="dragOverHandler($event)" x-on:dragleave="dragLeaveHandler($event)"
                                class="border-2 border-dashed text-sm border-gray-300 rounded-lg p-8 w-full  text-center cursor-pointer">
                                <p class="text-dark-secondary">Drag & Drop your file or
                                    <span class="text-primary hover:underline cursor-pointer"
                                        @click="browseFile()">Browser</span>
                                </p>
                                <input id="gambar" name="gambar" type="file" id="fileInput" class="hidden"
                                    @change="handleFiles($event)">

                                <!-- Preview File Name -->
                                {{-- <template x-if="fileName">
                                    <p class="mt-4 text-sm text-gray-700">Selected File: <strong
                                            x-text="fileName"></strong></p>
                                </template> --}}
                                <!-- Preview Gambar -->

                                <div class="mt-4">
                                    <img src="{{ asset('images/produk.png') }}" alt="Uploaded Preview"
                                        class="w-full rounded-lg border">
                                </div>
                            </div>

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
                                    placeholder="Masukan kuantitas produk" value="5000" required />
                            </div>
                            <div class="mb-5">
                                <label for="harga"
                                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Harga<span
                                        class="text-red-600">*</span></label>
                                <input type="number" id="harga"
                                    class="border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                    placeholder="Masukan harga produk" value="5000" required />
                            </div>
                            <div class="mb-5">
                                <label for="minorder"
                                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Minimal
                                    Pesanan<span class="text-red-600">*</span></label>
                                <input type="number" id="minorder"
                                    class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                    placeholder="Masukan minimal pesanan" value="100" required />
                            </div>
                            <div>
                                <label for="kategori"
                                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Kategori<span
                                        class="text-red-600">*</span></label>
                                <select id="kategori"
                                    class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary">
                                    <option>-- Pilih kategori --</option>
                                    <option selected value="roti tawar">Roti Tawar</option>
                                    <option value="roti manis">Roti Manis</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="text-white bg-primary hover:bg-primary-hover font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                    Tambah
                </button>
                <a href="{{ route('products') }}"
                    class="text-dark-primary bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Batal</a>
            </form>

        </div>

    </div>
</x-app-layout>
