<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="sm:flex sm:justify-between sm:items-center mb-6">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Tambah Pengguna</h1>
            </div>
            <div class="mb-4 sm:mb-0">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-dark-primary hover:text-primary-hover dark:text-gray-400 dark:hover:text-white">
                                Pengguna
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('users') }}"
                                    class="inline-flex ms-1 md:ms-2 items-center text-sm font-medium text-dark-primary hover:text-primary-hover dark:text-gray-400 dark:hover:text-white">
                                    Manajemen Tim
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
                                    class="ms-1 text-sm font-medium text-dark-secondary md:ms-2 dark:text-gray-400">Tambah</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>



        <!-- Cards -->

        <div class="antialiased relative">
            <form class="max-w-full mx-auto">
                <div class="md:grid md:grid-cols-2 gap-5">
                    <div>
                        <div class="mb-5">
                            <label for="name"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Nama<span
                                    class="text-red-600">*</span></label>
                            <input type="text" id="name"
                                class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                placeholder="Masukan nama" required />
                        </div>
                    </div>
                    <div>
                        <div class="mb-5">
                            <label for="email"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Email<span
                                    class="text-red-600">*</span></label>
                            <input type="email" id="email"
                                class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                placeholder="Masukan email" required />
                        </div>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 gap-5">
                    <div>
                        <div class="mb-5">
                            <label for="password"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Password<span
                                    class="text-red-600">*</span></label>
                            <input type="password" id="password"
                                class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-secondary dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                placeholder="Masukan password" required />
                        </div>
                    </div>
                    <div>
                        <div class="mb-5">
                            <label for="nohp"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">No
                                Handphone<span class="text-red-600">*</span></label>
                            <input type="text" id="nohp"
                                class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 dark:bg-gray-700 dark:border-gray-600 placeholder-dark-secondary dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                placeholder="Masukan no handphone" required />
                        </div>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 gap-5">
                    <div>
                        <div class="mb-5">
                            <label for="jabatan"
                                class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Jabatan<span
                                    class="text-red-600">*</span></label>
                            <select id="jabatan"
                                class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary">
                                <option selected>-- Pilih jabatan --</option>
                                <option value="admin">Admin</option>
                                <option value="pegawai">Pegawai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="text-white bg-primary hover:bg-primary-hover font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                    Tambah
                </button>
                <a href="{{ route('users') }}"
                    class="text-dark-primary bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Batal</a>
            </form>

        </div>

    </div>
</x-app-layout>
