<x-guest-layout>
    <section id="detail" class="px-5 md:px-24 xl:px-44 w-full pt-[96px] pb-10 bg-white">
        <div class="flex gap-2">
            <x-landing.my-account.sidebar />
            <div class="p-0 lg:pl-4 lg:py-4 w-full">
                <h1 class="text-2xl md:text-3xl text-dark-primary dark:text-gray-100 font-bold mb-5">Pesanan</h1>
                {{-- Filter --}}
                <div class="hidden md:block">
                    <div class="flex space-x-5 text-sm font-medium border-b mb-5">
                        <button class="relative py-2 text-primary  hover:text-primary group">
                            Semua
                            <span
                                class="absolute left-0 bottom-0 h-0.5 w-full rounded-full bg-primary scale-x-100 transition-transform origin-left"></span>
                        </button>
                        <button class="relative py-2 text-dark-tertiary hover:text-primary group">
                            Menunggu
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
                            Sampai & Pay
                            <span
                                class="absolute left-0 bottom-0 h-0.5 w-full rounded-full bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </button>
                        <button class="relative py-2 text-dark-tertiary hover:text-primary group">
                            Selesai
                            <span
                                class="absolute left-0 bottom-0 h-0.5 w-full rounded-full bg-primary scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                        </button>
                    </div>
                </div>


                <!-- Table -->
                <div class="bg-white dark:bg-gray-900 antialiased relative shadow-sm sm:rounded-lg">
                    <div class="mb-4 flex justify-between gap-5 items-center">
                        <div class="w-full">
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
                                    class="block pt-2 ps-10 text-sm text-dark-primary border border-gray-300 rounded-lg w-full xs:w-96 bg-gray-50 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 placeholder-dark-secondary dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                    placeholder="Cari pesanan...">
                            </div>
                        </div>
                        <button type="button"
                            class="flex text-sm md:hidden rounded-lg p-2 border hover:bg-gray-100 border-dark-tertiary"
                            id="filter-menu-button" aria-expanded="false" data-dropdown-toggle="filter-dropdown"
                            data-dropdown-placement="bottom-end">
                            <span class="sr-only">Open filter menu</span>
                            <svg class="fill-current text-dark-secondary" width="16" height="16"
                                viewBox="0 0 16 16">
                                <path
                                    d="M0 3a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H1a1 1 0 0 1-1-1ZM3 8a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H4a1 1 0 0 1-1-1ZM7 12a1 1 0 1 0 0 2h2a1 1 0 1 0 0-2H7Z" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden text-base w-36 list-none" id="filter-dropdown">
                            <div class="bg-white divide-y divide-gray-100 rounded-lg shadow-lg">
                                <ul class="py-2" aria-labelledby="filter-menu-button">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-1 text-sm font-medium text-primary hover:bg-gray-100">Semua</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-1 text-sm font-medium text-dark-primary hover:bg-gray-100">Menunggu</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-1 text-sm font-medium text-dark-primary hover:bg-gray-100">Diproses</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-1 text-sm font-medium text-dark-primary hover:bg-gray-100">Pengiriman</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-1 text-sm font-medium text-dark-primary hover:bg-gray-100">Sampai
                                            & Pay</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-1 text-sm font-medium text-dark-primary hover:bg-gray-100">Selesai</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- Mobile --}}
                    <div class="block md:hidden">
                        <div class="flex gap-5 border-b pt-3 pb-5 cursor-pointer" x-data="{ goToDetail: '{{ route('my-account.orders.detail') }}' }"
                            @click="window.location.href = goToDetail">
                            <div
                                class="text-sm sm:text-base inline-flex mt-[2px] justify-center w-12 text-dark-secondary">
                                1
                            </div>
                            <div class="flex flex-col justify-between w-full">
                                <h3 class="text-sm sm:text-base text-dark-primary">No Pesanan:
                                    <span class="font-semibold">NP2024121403</span>
                                </h3>
                                <p class="text-sm sm:text-base text-dark-primary">Status: <span>Menunggu</span></p>
                                <div
                                    class="flex justify-start flex-col xs:flex-row xs:justify-between items-start xs:items-end gap-2 mt-2">
                                    <p class="text-sm sm:text-base text-dark-primary">Total 1 item: <span
                                            class="text-primary font-medium"><span
                                                class="text-sm">Rp</span>800.000</span></p>
                                    <a href=""
                                        class="font-normal bg-dark-tertiary p-2 rounded-md text-white flex items-center gap-2 text-sm sm:text-base">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.25 8.25H21.75M2.25 9H21.75M5.25 14.25H11.25M5.25 16.5H8.25M4.5 19.5H19.5C20.0967 19.5 20.669 19.2629 21.091 18.841C21.5129 18.419 21.75 17.8467 21.75 17.25V6.75C21.75 6.15326 21.5129 5.58097 21.091 5.15901C20.669 4.73705 20.0967 4.5 19.5 4.5H4.5C3.90326 4.5 3.33097 4.73705 2.90901 5.15901C2.48705 5.58097 2.25 6.15326 2.25 6.75V17.25C2.25 17.8467 2.48705 18.419 2.90901 18.841C3.33097 19.2629 3.90326 19.5 4.5 19.5Z"
                                                stroke="white" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Bayar
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-5 border-b pt-3 pb-5" x-data="{ goToDetail: '{{ route('my-account.orders.detail') }}' }"
                            @click="window.location.href = goToDetail">
                            <div
                                class="text-sm sm:text-base inline-flex mt-[2px] justify-center w-12 text-dark-secondary">
                                2
                            </div>
                            <div class="flex flex-col justify-between w-full">
                                <h3 class="text-sm sm:text-base text-dark-primary">No Pesanan:
                                    <span class="font-semibold">NP2024121402</span>
                                </h3>
                                <p class="text-sm sm:text-base text-dark-primary">Status: <span>Pengiriman</span></p>
                                <div
                                    class="flex justify-start flex-col xs:flex-row xs:justify-between items-start xs:items-end gap-2 mt-2">
                                    <p class="text-sm sm:text-base text-dark-primary">Total 1 item: <span
                                            class="text-primary font-medium"><span
                                                class="text-sm">Rp</span>600.000</span></p>
                                    <a href=""
                                        class="font-normal bg-dark-tertiary p-2 rounded-md text-white flex items-center gap-2 text-sm sm:text-base">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.25 8.25H21.75M2.25 9H21.75M5.25 14.25H11.25M5.25 16.5H8.25M4.5 19.5H19.5C20.0967 19.5 20.669 19.2629 21.091 18.841C21.5129 18.419 21.75 17.8467 21.75 17.25V6.75C21.75 6.15326 21.5129 5.58097 21.091 5.15901C20.669 4.73705 20.0967 4.5 19.5 4.5H4.5C3.90326 4.5 3.33097 4.73705 2.90901 5.15901C2.48705 5.58097 2.25 6.15326 2.25 6.75V17.25C2.25 17.8467 2.48705 18.419 2.90901 18.841C3.33097 19.2629 3.90326 19.5 4.5 19.5Z"
                                                stroke="white" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Bayar
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-5 border-b pt-3 pb-5" x-data="{ goToDetail: '{{ route('my-account.orders.detail') }}' }"
                            @click="window.location.href = goToDetail">
                            <div
                                class="text-sm sm:text-base inline-flex mt-[2px] justify-center w-12 text-dark-secondary">
                                3
                            </div>
                            <div class="flex flex-col justify-between w-full">
                                <h3 class="text-sm sm:text-base text-dark-primary">No Pesanan:
                                    <span class="font-semibold">NP2024121401</span>
                                </h3>
                                <p class="text-sm sm:text-base text-dark-primary">Status: <span>Sampai</span></p>
                                <div
                                    class="flex justify-start flex-col xs:flex-row xs:justify-between items-start xs:items-end gap-2 mt-2">
                                    <p class="text-sm sm:text-base text-dark-primary">Total 1 item: <span
                                            class="text-primary font-medium"><span
                                                class="text-sm">Rp</span>1.600.000</span></p>
                                    <a href=""
                                        class="font-normal bg-[#0E9F6E] hover:bg-[#28906d] p-2 rounded-md text-white flex items-center gap-2 text-sm sm:text-base">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.25 8.25H21.75M2.25 9H21.75M5.25 14.25H11.25M5.25 16.5H8.25M4.5 19.5H19.5C20.0967 19.5 20.669 19.2629 21.091 18.841C21.5129 18.419 21.75 17.8467 21.75 17.25V6.75C21.75 6.15326 21.5129 5.58097 21.091 5.15901C20.669 4.73705 20.0967 4.5 19.5 4.5H4.5C3.90326 4.5 3.33097 4.73705 2.90901 5.15901C2.48705 5.58097 2.25 6.15326 2.25 6.75V17.25C2.25 17.8467 2.48705 18.419 2.90901 18.841C3.33097 19.2629 3.90326 19.5 4.5 19.5Z"
                                                stroke="white" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        Bayar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Desktop --}}
                    <table
                        class="hidden md:table w-full text-sm text-left rtl:text-right text-dark-secondary dark:text-gray-400 mb-4">
                        <thead
                            class="text-xs text-dark-primary font-semibold uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    No Pesanan
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Payment
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
                                    NP24121403
                                </th>
                                <td class="px-6 py-4">
                                    <span class="text-xs">Rp</span>800.000
                                </td>
                                <td class="px-6 py-4">
                                    Menunggu
                                </td>
                                <td class="px-6 py-4">
                                    Unpaid
                                </td>
                                <td class="flex items-center px-6 py-4">
                                    <a href="{{ route('my-account.orders.detail') }}"
                                        class="font-medium bg-primary hover:bg-primary-hover p-2 rounded-md hover:underline"><svg
                                            width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.99966 7.23096C8.00216 7.23096 7.19141 8.04246 7.19141 9.03996C7.19141 10.0367 8.00216 10.8475 8.99966 10.8475C9.99716 10.8475 10.8087 10.0367 10.8087 9.03996C10.8087 8.04246 9.99716 7.23096 8.99966 7.23096M8.99966 11.9725C7.38191 11.9725 6.06641 10.657 6.06641 9.03996C6.06641 7.42221 7.38191 6.10596 8.99966 6.10596C10.6174 6.10596 11.9337 7.42221 11.9337 9.03996C11.9337 10.657 10.6174 11.9725 8.99966 11.9725"
                                                fill="white" />
                                            <mask id="mask0_249_7933" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="1" y="3" width="16" height="13">
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
                                        class="font-medium bg-dark-tertiary p-2 rounded-md hover:underline ms-3">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.25 8.25H21.75M2.25 9H21.75M5.25 14.25H11.25M5.25 16.5H8.25M4.5 19.5H19.5C20.0967 19.5 20.669 19.2629 21.091 18.841C21.5129 18.419 21.75 17.8467 21.75 17.25V6.75C21.75 6.15326 21.5129 5.58097 21.091 5.15901C20.669 4.73705 20.0967 4.5 19.5 4.5H4.5C3.90326 4.5 3.33097 4.73705 2.90901 5.15901C2.48705 5.58097 2.25 6.15326 2.25 6.75V17.25C2.25 17.8467 2.48705 18.419 2.90901 18.841C3.33097 19.2629 3.90326 19.5 4.5 19.5Z"
                                                stroke="white" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="w-4 p-4 text-center">
                                    2
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-semibold text-dark-primary whitespace-nowrap dark:text-white">
                                    NP24121402
                                </th>
                                <td class="px-6 py-4">
                                    <span class="text-xs">Rp</span>600.000
                                </td>
                                <td class="px-6 py-4">
                                    Pengiriman
                                </td>
                                <td class="px-6 py-4">
                                    Unpaid
                                </td>
                                <td class="flex items-center px-6 py-4">
                                    <a href="{{ route('my-account.orders.detail') }}"
                                        class="font-medium bg-primary hover:bg-primary-hover p-2 rounded-md hover:underline"><svg
                                            width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.99966 7.23096C8.00216 7.23096 7.19141 8.04246 7.19141 9.03996C7.19141 10.0367 8.00216 10.8475 8.99966 10.8475C9.99716 10.8475 10.8087 10.0367 10.8087 9.03996C10.8087 8.04246 9.99716 7.23096 8.99966 7.23096M8.99966 11.9725C7.38191 11.9725 6.06641 10.657 6.06641 9.03996C6.06641 7.42221 7.38191 6.10596 8.99966 6.10596C10.6174 6.10596 11.9337 7.42221 11.9337 9.03996C11.9337 10.657 10.6174 11.9725 8.99966 11.9725"
                                                fill="white" />
                                            <mask id="mask0_249_7933" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="1" y="3" width="16" height="13">
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
                                        class="font-medium bg-dark-tertiary p-2 rounded-md hover:underline ms-3">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.25 8.25H21.75M2.25 9H21.75M5.25 14.25H11.25M5.25 16.5H8.25M4.5 19.5H19.5C20.0967 19.5 20.669 19.2629 21.091 18.841C21.5129 18.419 21.75 17.8467 21.75 17.25V6.75C21.75 6.15326 21.5129 5.58097 21.091 5.15901C20.669 4.73705 20.0967 4.5 19.5 4.5H4.5C3.90326 4.5 3.33097 4.73705 2.90901 5.15901C2.48705 5.58097 2.25 6.15326 2.25 6.75V17.25C2.25 17.8467 2.48705 18.419 2.90901 18.841C3.33097 19.2629 3.90326 19.5 4.5 19.5Z"
                                                stroke="white" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="w-4 p-4 text-center">
                                    3
                                </td>
                                <th scope="row"
                                    class="px-6 py-4 font-semibold text-dark-primary whitespace-nowrap dark:text-white">
                                    NP24121401
                                </th>
                                <td class="px-6 py-4">
                                    <span class="text-xs">Rp</span>1.600.000
                                </td>
                                <td class="px-6 py-4">
                                    Sampai
                                </td>
                                <td class="px-6 py-4">
                                    Pay
                                </td>
                                <td class="flex items-center px-6 py-4">
                                    <a href="{{ route('my-account.orders.detail') }}"
                                        class="font-medium bg-primary hover:bg-primary-hover p-2 rounded-md hover:underline"><svg
                                            width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.99966 7.23096C8.00216 7.23096 7.19141 8.04246 7.19141 9.03996C7.19141 10.0367 8.00216 10.8475 8.99966 10.8475C9.99716 10.8475 10.8087 10.0367 10.8087 9.03996C10.8087 8.04246 9.99716 7.23096 8.99966 7.23096M8.99966 11.9725C7.38191 11.9725 6.06641 10.657 6.06641 9.03996C6.06641 7.42221 7.38191 6.10596 8.99966 6.10596C10.6174 6.10596 11.9337 7.42221 11.9337 9.03996C11.9337 10.657 10.6174 11.9725 8.99966 11.9725"
                                                fill="white" />
                                            <mask id="mask0_249_7933" style="mask-type:luminance"
                                                maskUnits="userSpaceOnUse" x="1" y="3" width="16" height="13">
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
                                        class="font-medium bg-[#0E9F6E] hover:bg-[#28906d] p-2 rounded-md hover:underline ms-3">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.25 8.25H21.75M2.25 9H21.75M5.25 14.25H11.25M5.25 16.5H8.25M4.5 19.5H19.5C20.0967 19.5 20.669 19.2629 21.091 18.841C21.5129 18.419 21.75 17.8467 21.75 17.25V6.75C21.75 6.15326 21.5129 5.58097 21.091 5.15901C20.669 4.73705 20.0967 4.5 19.5 4.5H4.5C3.90326 4.5 3.33097 4.73705 2.90901 5.15901C2.48705 5.58097 2.25 6.15326 2.25 6.75V17.25C2.25 17.8467 2.48705 18.419 2.90901 18.841C3.33097 19.2629 3.90326 19.5 4.5 19.5Z"
                                                stroke="white" stroke-width="1.3" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="md:flex sm:flex-row flex-col items-center justify-between hidden">
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
        </div>
    </section>
</x-guest-layout>
