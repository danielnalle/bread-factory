<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="sm:flex sm:justify-between sm:items-center mb-6">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-dark-primary dark:text-gray-100 font-bold">Pesanan</h1>
            </div>
            <div class="mb-4 sm:mb-0">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-dark-primary hover:text-primary-hover dark:text-gray-400 dark:hover:text-white">
                                Transaksi
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="ms-1 text-sm font-medium text-dark-secondary md:ms-2 dark:text-gray-400">Pesanan</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>


        {{-- Informasi --}}
        <div
            class="px-5 py-2.5 bg-white dark:bg-gray-900 antialiased relative overflow-x-auto shadow-sm sm:rounded-lg mb-8">
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3 xl:grid-cols-6">
                <div class="px-0 md:px-5 py-3 md:py-4 border-r border-gray-200">
                    <p class="font-medium text-sm text-dark-secondary">
                        Total Pesanan
                    </p>
                    <h3 class="font-bold text-dark-primary text-xl">
                        6
                    </h3>
                </div>
                <div class="px-0 md:px-5 py-3 md:py-4 md:border-r md:border-gray-200">
                    <p class="font-medium text-sm text-dark-secondary">
                        Pesanan Baru
                    </p>
                    <h3 class="font-bold text-dark-primary text-xl">
                        2
                    </h3>
                </div>
                <div
                    class="px-0 md:px-5 py-3 md:py-4 border-r border-gray-200 md:border-none xl:border-r xl:border-r xl:border-solid xl:border-gray-200">
                    <p class="font-medium text-sm text-dark-secondary">
                        Pesanan Diproses
                    </p>
                    <h3 class="font-bold text-dark-primary text-xl">
                        1
                    </h3>
                </div>
                <div class="px-0 md:px-5 py-3 md:py-4 md:border-r md:border-gray-200">
                    <p class="font-medium text-sm text-dark-secondary">
                        Dalam Pengiriman
                    </p>
                    <h3 class="font-bold text-dark-primary text-xl">
                        1
                    </h3>
                </div>
                <div class="px-0 md:px-5 py-3 md:py-4 border-r border-gray-200">
                    <p class="font-medium text-sm text-dark-secondary">
                        Sampai di Tujuan
                    </p>
                    <h3 class="font-bold text-dark-primary text-xl">
                        1
                    </h3>
                </div>
                <div class="px-0 md:px-5 py-3 md:py-4">
                    <p class="font-medium text-sm text-dark-secondary">
                        Pesanan Berhasil
                    </p>
                    <h3 class="font-bold text-dark-primary text-xl">
                        1
                    </h3>
                </div>
            </div>
        </div>

        {{-- Filter --}}
        <div class="overflow-x-auto">
            <div class="flex space-x-5 text-sm font-medium border-b mb-5">
                <button class="relative py-2 text-primary  hover:text-primary group">
                    Semua
                    <span
                        class="absolute left-0 bottom-0 h-0.5 w-full rounded-full bg-primary scale-x-100 transition-transform origin-left"></span>
                </button>
                <button class="relative py-2 text-dark-tertiary hover:text-primary group">
                    Baru
                    <span
                        class="absolute left-0 bottom-0 h-0.5 w-full rounded-full  bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </button>
                <button class="relative py-2 text-dark-tertiary hover:text-primary group">
                    Diproses
                    <span
                        class="absolute left-0 bottom-0 h-0.5 w-full rounded-full bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </button>
                <button class="relative py-2 text-dark-tertiary hover:text-primary group">
                    Pengiriman
                    <span
                        class="absolute left-0 bottom-0 h-0.5 w-full rounded-full bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </button>
                <button class="relative py-2 text-dark-tertiary hover:text-primary group">
                    Sampai
                    <span
                        class="absolute left-0 bottom-0 h-0.5 w-full rounded-full bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </button>
                <button class="relative py-2 text-dark-tertiary hover:text-primary group">
                    Selesai
                    <span
                        class="absolute left-0 bottom-0 h-0.5 w-full rounded-full bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </button>
                <button class="relative py-2 text-dark-tertiary hover:text-primary group">
                    Ditolak
                    <span
                        class="absolute left-0 bottom-0 h-0.5 w-full rounded-full bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                </button>
            </div>
        </div>


        <!-- Table -->

        <div class="p-5 bg-white dark:bg-gray-900 antialiased relative overflow-x-auto shadow-sm sm:rounded-lg">
            <div class="mb-4 bg-white dark:bg-gray-900 sm:flex sm:justify-between sm:items-center">
                <div class="mb-4 sm:mb-0">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div
                            class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-dark-secondary dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block pt-2 ps-10 text-sm text-dark-primary border border-gray-300 rounded-lg w-full sm:w-96 bg-gray-50 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 placeholder-dark-secondary dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                            placeholder="Cari pesanan...">
                    </div>
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-dark-secondary dark:text-gray-400 mb-4">
                <thead
                    class="text-xs text-dark-primary font-semibold uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Pelanggan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status Transaksi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Metode Transaksi
                        </th>
                        <th scope="col" class="px-16 whitespace-nowrap xl:whitespace-normal xl:px-6 py-3">
                            Status Pesanan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="w-4 p-4 text-center">
                            1
                        </td>
                        <th scope="row"
                            class="px-6 py-4 font-semibold text-dark-primary whitespace-nowrap dark:text-white">
                            Monkey D Luffy
                        </th>
                        <td class="px-6 py-4">
                            Unpaid
                        </td>
                        <td class="px-6 py-4">
                            COD
                        </td>
                        <td class="px-6 py-4">
                            <select id="status"
                                class=" border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary">
                                <option>-- Pilih status --</option>
                                <option selected value="baru">Baru</option>
                                <option value="diproses">Sedang Diproses</option>
                                <option value="pengiriman">Dalam Pengiriman</option>
                                <option value="sampai">Sampai di Tujuan</option>
                                <option value="selesai">Selesai</option>
                                <option value="ditolak">Ditolak</option>
                            </select>
                        </td>
                        <td class="px-6 py-4">
                            30 Nov 2024
                        </td>
                        <td class="flex items-center px-6 py-4">
                            <a href="{{ route('orders.detail') }}"
                                class="font-medium bg-primary hover:bg-primary-hover p-2 rounded-md hover:underline"><svg
                                    width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.99966 7.23096C8.00216 7.23096 7.19141 8.04246 7.19141 9.03996C7.19141 10.0367 8.00216 10.8475 8.99966 10.8475C9.99716 10.8475 10.8087 10.0367 10.8087 9.03996C10.8087 8.04246 9.99716 7.23096 8.99966 7.23096M8.99966 11.9725C7.38191 11.9725 6.06641 10.657 6.06641 9.03996C6.06641 7.42221 7.38191 6.10596 8.99966 6.10596C10.6174 6.10596 11.9337 7.42221 11.9337 9.03996C11.9337 10.657 10.6174 11.9725 8.99966 11.9725"
                                        fill="white" />
                                    <mask id="mask0_249_7933" style="mask-type:luminance" maskUnits="userSpaceOnUse"
                                        x="1" y="3" width="16" height="13">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.5 3H16.4999V15.0787H1.5V3Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_249_7933)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.67731 9.03907C4.07231 12.1208 6.42206 13.9531 8.99981 13.9538C11.5776 13.9531 13.9273 12.1208 15.3223 9.03907C13.9273 5.95807 11.5776 4.12582 8.99981 4.12507C6.42281 4.12582 4.07231 5.95807 2.67731 9.03907V9.03907ZM9.00131 15.0788H8.99831H8.99756C5.89556 15.0766 3.11006 12.9023 1.54556 9.26107C1.48481 9.11932 1.48481 8.95882 1.54556 8.81707C3.11006 5.17657 5.89631 3.00232 8.99756 3.00007C8.99906 2.99932 8.99906 2.99932 8.99981 3.00007C9.00131 2.99932 9.00131 2.99932 9.00206 3.00007C12.1041 3.00232 14.8896 5.17657 16.4541 8.81707C16.5156 8.95882 16.5156 9.11932 16.4541 9.26107C14.8903 12.9023 12.1041 15.0766 9.00206 15.0788H9.00131Z"
                                            fill="white" />
                                    </g>
                                </svg>

                            </a>
                            <a href="#"
                                class="font-medium bg-red-600 hover:bg-red-700 p-2 rounded-md hover:underline ms-3"><svg
                                    width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.8626 20.2804C10.5076 20.2804 9.18656 20.2654 7.87957 20.2384C6.20756 20.2054 5.05057 19.1214 4.86156 17.4094C4.54656 14.5694 4.00756 7.87542 4.00256 7.80842C3.96856 7.39542 4.27657 7.03342 4.68957 7.00042C5.09657 6.98942 5.46457 7.27542 5.49757 7.68742C5.50257 7.75542 6.04057 14.4264 6.35257 17.2444C6.45957 18.2174 6.98456 18.7194 7.91056 18.7384C10.4106 18.7914 12.9616 18.7944 15.7116 18.7444C16.6956 18.7254 17.2276 18.2334 17.3376 17.2374C17.6476 14.4434 18.1876 7.75542 18.1936 7.68742C18.2266 7.27542 18.5916 6.98742 19.0006 7.00042C19.4136 7.03442 19.7216 7.39542 19.6886 7.80842C19.6826 7.87642 19.1406 14.5874 18.8286 17.4024C18.6346 19.1494 17.4806 20.2124 15.7386 20.2444C14.4056 20.2674 13.1196 20.2804 11.8626 20.2804Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.708 6.98926H3.75C3.336 6.98926 3 6.65326 3 6.23926C3 5.82526 3.336 5.48926 3.75 5.48926H20.708C21.122 5.48926 21.458 5.82526 21.458 6.23926C21.458 6.65326 21.122 6.98926 20.708 6.98926Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.4405 6.98924C16.3025 6.98924 15.3145 6.17824 15.0905 5.06224L14.8475 3.84624C14.7965 3.66124 14.5855 3.50024 14.3455 3.50024H10.1125C9.87246 3.50024 9.66146 3.66124 9.60046 3.89224L9.36746 5.06224C9.14446 6.17824 8.15546 6.98924 7.01746 6.98924C6.60346 6.98924 6.26746 6.65324 6.26746 6.23924C6.26746 5.82524 6.60346 5.48924 7.01746 5.48924C7.44346 5.48924 7.81346 5.18524 7.89746 4.76724L8.14046 3.55124C8.38746 2.61924 9.19446 2.00024 10.1125 2.00024H14.3455C15.2635 2.00024 16.0705 2.61924 16.3075 3.50624L16.5615 4.76724C16.6445 5.18524 17.0145 5.48924 17.4405 5.48924C17.8545 5.48924 18.1905 5.82524 18.1905 6.23924C18.1905 6.65324 17.8545 6.98924 17.4405 6.98924Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex sm:flex-row flex-col items-center justify-between">
                <!-- Help text -->
                <span class="text-sm text-dark-secondary dark:text-gray-400">
                    Showing <span class="font-semibold text-dark-primary dark:text-white">1</span> to <span
                        class="font-semibold text-dark-primary dark:text-white">10</span> of <span
                        class="font-semibold text-dark-primary dark:text-white">100</span> Entries
                </span>
                <!-- Buttons -->
                <div class="inline-flex mt-2 sm:mt-0">
                    <button
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-dark-primary rounded-s hover:bg-gray-800 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        Prev
                    </button>
                    <button
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-dark-primary border-0 border-s border-gray-700 rounded-e hover:bg-gray-800 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
