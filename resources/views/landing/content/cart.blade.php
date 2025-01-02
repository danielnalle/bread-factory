<x-guest-layout>
    <section id="cart" class="px-5 md:px-24 xl:px-44 w-full pt-[84px] pb-10 bg-[#F5F5F5]" x-data="stickyHandler">
        <div class="w-full mb-6">
            <!-- Header -->
            <div class="hidden lg:block bg-white  px-5 py-6 shadow-sm rounded-lg mb-5">
                <h1 class="text-primary font-main text-2xl font-semibold pb-3 border-b">Keranjang Belanja</h1>
                <div
                    class="grid grid-cols-[32px_repeat(6,_1fr)] gap-5 text-sm sm:text-base font-normal text-dark-primary mt-5">
                    <div class="inline-flex items-center justify-center">
                        <input
                            class="rounded-sm border-gray-300 focus:ring-0 checked:bg-primary focus:ring-transparent hover:scale-105 focus:outline-none"
                            id="checkbox" name="checkbox" type="checkbox" value="">
                    </div>
                    <div class="col-span-2">Roti</div>
                    <div class="text-center">Harga Satuan</div>
                    <div class="text-center">Jumlah</div>
                    <div class="text-center">Total Harga</div>
                    <div class="text-center">Aksi</div>
                </div>
            </div>

            <!-- Item -->
            <div class="flex flex-col bg-white rounded-lg overflow-hidden shadow-sm">
                {{-- Mobile --}}
                <div class="px-3 sm:px-5 block lg:hidden">
                    <h1 class="text-primary font-main text-xl sm:text-2xl font-semibold pb-3 border-b mt-3 sm:mt-5">
                        Keranjang
                        Belanja</h1>
                    <div class="flex gap-5 border-b py-3 sm:py-5">
                        <div class="inline-flex items-center justify-center">
                            <input
                                class="rounded-sm border-gray-300 focus:ring-0 checked:bg-primary focus:ring-transparent hover:scale-105 focus:outline-none"
                                id="checkbox" name="checkbox" type="checkbox" value="">
                        </div>
                        <div class="w-24 h-auto shrink-0 overflow-hidden rounded-sm">
                            <div class="relative h-full w-full bg-[#f8f8f8]">
                                <img src="{{ asset('images/breads/1.jpg') }}" class="w-full h-full object-contain"
                                    alt="">
                            </div>
                        </div>
                        <div class="cols-span-2 flex flex-col justify-between w-full">
                            <div>
                                <h3 class="text-sm sm:text-base text-dark-primary font-medium">White Bread</h3>
                                <p class="text-xs sm:text-sm text-dark-primary">Rp<span
                                        class="text-sm sm:text-base">8000</span></p>
                            </div>
                            <div class="flex justify-between items-center gap-2 mt-4 flex-wrap">
                                <p class="text-xs sm:text-sm text-primary font-medium">Rp<span
                                        class="text-sm sm:text-base">800.000</span></p>
                                <div class="flex h-6 lg:h-8">
                                    <button
                                        class="inline-flex items-center justify-center p-1 w-6 lg:w-8 h-6 lg:h-8 border-t border-l border-b border-dark-tertiary"><svg
                                            class="w-2 lg:w-3" height="2" viewBox="0 0 12 2" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1H11" stroke="#0C1C2E" stroke-opacity="0.87"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <input type="text"
                                        class="max-w-20 w-14 text-sm lg:text-base text-center border-dark-tertiary focus:ring-transparent focus:border-primary text-primary"
                                        value="100">
                                    <button
                                        class="inline-flex items-center justify-center p-1 w-6 lg:w-8 h-6 lg:h-8 border-t border-r border-b border-dark-tertiary"><svg
                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 7V17" stroke="#0C1C2E" stroke-opacity="0.87"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7 12H17" stroke="#0C1C2E" stroke-opacity="0.87"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- Desktop --}}
                <div class="hidden lg:block px-5">
                    <div class="grid grid-cols-[32px_repeat(6,_1fr)] gap-5 items-center border-b py-5">
                        <div class="inline-flex items-center justify-center">
                            <input
                                class="rounded-sm border-gray-300 focus:ring-0 checked:bg-primary focus:ring-transparent hover:scale-105 focus:outline-none"
                                id="checkbox" name="checkbox" type="checkbox" value="">
                        </div>
                        <div
                            class="col-span-2 flex gap-2.5 items-center text-base sm:text-lg font-semibold text-dark-primary">
                            <div class="w-20 h-20 shrink-0 overflow-hidden rounded-sm">
                                <div class="relative h-full w-full bg-[#f8f8f8]">
                                    <img src="{{ asset('images/breads/1.jpg') }}" class="w-full h-full object-contain"
                                        alt="">
                                </div>
                            </div>
                            White Bread
                        </div>
                        <div class="text-sm sm:text-base text-center font-medium text-dark-primary">Rp.
                            <span>8000</span>
                        </div>
                        <div class="flex h-8 mx-auto">
                            <button
                                class="inline-flex items-center justify-center p-1 w-8 h-8 border-t border-l border-b border-dark-tertiary"><svg
                                    width="12" height="2" viewBox="0 0 12 2" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1H11" stroke="#0C1C2E" stroke-opacity="0.87" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                            <input type="text"
                                class="max-w-20 w-14 text-center border-dark-tertiary focus:ring-transparent focus:border-primary text-primary"
                                value="100">
                            <button
                                class="inline-flex items-center justify-center p-1 w-8 h-8 border-t border-r border-b border-dark-tertiary"><svg
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 7V17" stroke="#0C1C2E" stroke-opacity="0.87" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7 12H17" stroke="#0C1C2E" stroke-opacity="0.87" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                        <div class="text-sm sm:text-base font-medium text-primary text-center">Rp.
                            <span>800.000</span>
                        </div>
                        <a href="{{ route('roti') }}"
                            class="text-white leading-relaxed mx-auto text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.3626 20.2804C11.0076 20.2804 9.68656 20.2654 8.37957 20.2384C6.70756 20.2054 5.55057 19.1214 5.36156 17.4094C5.04656 14.5694 4.50756 7.87542 4.50256 7.80842C4.46856 7.39542 4.77657 7.03342 5.18957 7.00042C5.59657 6.98942 5.96457 7.27542 5.99757 7.68742C6.00257 7.75542 6.54057 14.4264 6.85257 17.2444C6.95957 18.2174 7.48456 18.7194 8.41056 18.7384C10.9106 18.7914 13.4616 18.7944 16.2116 18.7444C17.1956 18.7254 17.7276 18.2334 17.8376 17.2374C18.1476 14.4434 18.6876 7.75542 18.6936 7.68742C18.7266 7.27542 19.0916 6.98742 19.5006 7.00042C19.9136 7.03442 20.2216 7.39542 20.1886 7.80842C20.1826 7.87642 19.6406 14.5874 19.3286 17.4024C19.1346 19.1494 17.9806 20.2124 16.2386 20.2444C14.9056 20.2674 13.6196 20.2804 12.3626 20.2804Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21.208 6.98926H4.25C3.836 6.98926 3.5 6.65326 3.5 6.23926C3.5 5.82526 3.836 5.48926 4.25 5.48926H21.208C21.622 5.48926 21.958 5.82526 21.958 6.23926C21.958 6.65326 21.622 6.98926 21.208 6.98926Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.9403 6.98924C16.8023 6.98924 15.8143 6.17824 15.5903 5.06224L15.3473 3.84624C15.2963 3.66124 15.0853 3.50024 14.8453 3.50024H10.6123C10.3723 3.50024 10.1613 3.66124 10.1003 3.89224L9.86733 5.06224C9.64433 6.17824 8.65533 6.98924 7.51733 6.98924C7.10333 6.98924 6.76733 6.65324 6.76733 6.23924C6.76733 5.82524 7.10333 5.48924 7.51733 5.48924C7.94333 5.48924 8.31333 5.18524 8.39733 4.76724L8.64033 3.55124C8.88733 2.61924 9.69433 2.00024 10.6123 2.00024H14.8453C15.7633 2.00024 16.5703 2.61924 16.8073 3.50624L17.0613 4.76724C17.1443 5.18524 17.5143 5.48924 17.9403 5.48924C18.3543 5.48924 18.6903 5.82524 18.6903 6.23924C18.6903 6.65324 18.3543 6.98924 17.9403 6.98924Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        {{-- Mobile --}}
        <div id="sticky-element-mobile" x-init="checkSticky"
            class="lg:hidden sticky bottom-0 bg-white w-full mt-6 rounded-lg transition-all duration-300">
            <div class="p-3 sm:p-5">
                <div class="flex items-center flex-wrap gap-0 xs:gap-5 justify-between">
                    <div class="flex gap-5 items-center mb-2 xs:mb-0">
                        <div class="inline-flex items-center justify-center">
                            <input
                                class="rounded-sm border-gray-300 focus:ring-0 checked:bg-primary focus:ring-transparent hover:scale-105 focus:outline-none"
                                id="checkbox" name="checkbox" type="checkbox" value="">
                        </div>
                        <div class="text-sm sm:text-base text-dark-primary">Semua
                        </div>
                        <a href="{{ route('roti') }}"
                            class="text-white leading-relaxed text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-4 py-2 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                            <svg width="21" height="20" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.3626 20.2804C11.0076 20.2804 9.68656 20.2654 8.37957 20.2384C6.70756 20.2054 5.55057 19.1214 5.36156 17.4094C5.04656 14.5694 4.50756 7.87542 4.50256 7.80842C4.46856 7.39542 4.77657 7.03342 5.18957 7.00042C5.59657 6.98942 5.96457 7.27542 5.99757 7.68742C6.00257 7.75542 6.54057 14.4264 6.85257 17.2444C6.95957 18.2174 7.48456 18.7194 8.41056 18.7384C10.9106 18.7914 13.4616 18.7944 16.2116 18.7444C17.1956 18.7254 17.7276 18.2334 17.8376 17.2374C18.1476 14.4434 18.6876 7.75542 18.6936 7.68742C18.7266 7.27542 19.0916 6.98742 19.5006 7.00042C19.9136 7.03442 20.2216 7.39542 20.1886 7.80842C20.1826 7.87642 19.6406 14.5874 19.3286 17.4024C19.1346 19.1494 17.9806 20.2124 16.2386 20.2444C14.9056 20.2674 13.6196 20.2804 12.3626 20.2804Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M21.208 6.98926H4.25C3.836 6.98926 3.5 6.65326 3.5 6.23926C3.5 5.82526 3.836 5.48926 4.25 5.48926H21.208C21.622 5.48926 21.958 5.82526 21.958 6.23926C21.958 6.65326 21.622 6.98926 21.208 6.98926Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M17.9403 6.98924C16.8023 6.98924 15.8143 6.17824 15.5903 5.06224L15.3473 3.84624C15.2963 3.66124 15.0853 3.50024 14.8453 3.50024H10.6123C10.3723 3.50024 10.1613 3.66124 10.1003 3.89224L9.86733 5.06224C9.64433 6.17824 8.65533 6.98924 7.51733 6.98924C7.10333 6.98924 6.76733 6.65324 6.76733 6.23924C6.76733 5.82524 7.10333 5.48924 7.51733 5.48924C7.94333 5.48924 8.31333 5.18524 8.39733 4.76724L8.64033 3.55124C8.88733 2.61924 9.69433 2.00024 10.6123 2.00024H14.8453C15.7633 2.00024 16.5703 2.61924 16.8073 3.50624L17.0613 4.76724C17.1443 5.18524 17.5143 5.48924 17.9403 5.48924C18.3543 5.48924 18.6903 5.82524 18.6903 6.23924C18.6903 6.65324 18.3543 6.98924 17.9403 6.98924Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="flex gap-2 items-center justify-between xs:justify-normal w-full xs:w-auto pt-2 xs:pt-0 border-t xs:border-none">
                        <div class="text-sm sm:text-base text-dark-primary text-start">
                            Total:
                            <p class="text-primary text-xs font-medium">Rp<span class="text-sm">800.000</span>
                            </p>
                        </div>
                        <a href="{{ route('checkout') }}"
                            class="text-white leading-relaxed w-fit text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center inline-flex justify-center items-center dark:bg-primary dark:hover:bg-primary-hover ">
                            Checkout (5)
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Desktop --}}
        <div class="hidden lg:block sticky bottom-0 bg-white w-full mt-6 rounded-lg p-5 transition-all duration-300"
            id="sticky-element" x-init="checkSticky">
            <div class="grid grid-cols-[32px_fit-content(150px)_fit-content(100px)_repeat(5,_1fr)] gap-5 items-center">
                <div class="inline-flex items-center justify-center">
                    <input
                        class="rounded-sm border-gray-300 focus:ring-0 checked:bg-primary focus:ring-transparent hover:scale-105 focus:outline-none"
                        id="checkbox" name="checkbox" type="checkbox" value="">
                </div>
                <div class="text-sm sm:text-base text-dark-primary">Pilih Semua (1)
                </div>
                <a href="{{ route('roti') }}"
                    class="text-white leading-relaxed w-fit text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                    <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.3626 20.2804C11.0076 20.2804 9.68656 20.2654 8.37957 20.2384C6.70756 20.2054 5.55057 19.1214 5.36156 17.4094C5.04656 14.5694 4.50756 7.87542 4.50256 7.80842C4.46856 7.39542 4.77657 7.03342 5.18957 7.00042C5.59657 6.98942 5.96457 7.27542 5.99757 7.68742C6.00257 7.75542 6.54057 14.4264 6.85257 17.2444C6.95957 18.2174 7.48456 18.7194 8.41056 18.7384C10.9106 18.7914 13.4616 18.7944 16.2116 18.7444C17.1956 18.7254 17.7276 18.2334 17.8376 17.2374C18.1476 14.4434 18.6876 7.75542 18.6936 7.68742C18.7266 7.27542 19.0916 6.98742 19.5006 7.00042C19.9136 7.03442 20.2216 7.39542 20.1886 7.80842C20.1826 7.87642 19.6406 14.5874 19.3286 17.4024C19.1346 19.1494 17.9806 20.2124 16.2386 20.2444C14.9056 20.2674 13.6196 20.2804 12.3626 20.2804Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M21.208 6.98926H4.25C3.836 6.98926 3.5 6.65326 3.5 6.23926C3.5 5.82526 3.836 5.48926 4.25 5.48926H21.208C21.622 5.48926 21.958 5.82526 21.958 6.23926C21.958 6.65326 21.622 6.98926 21.208 6.98926Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.9403 6.98924C16.8023 6.98924 15.8143 6.17824 15.5903 5.06224L15.3473 3.84624C15.2963 3.66124 15.0853 3.50024 14.8453 3.50024H10.6123C10.3723 3.50024 10.1613 3.66124 10.1003 3.89224L9.86733 5.06224C9.64433 6.17824 8.65533 6.98924 7.51733 6.98924C7.10333 6.98924 6.76733 6.65324 6.76733 6.23924C6.76733 5.82524 7.10333 5.48924 7.51733 5.48924C7.94333 5.48924 8.31333 5.18524 8.39733 4.76724L8.64033 3.55124C8.88733 2.61924 9.69433 2.00024 10.6123 2.00024H14.8453C15.7633 2.00024 16.5703 2.61924 16.8073 3.50624L17.0613 4.76724C17.1443 5.18524 17.5143 5.48924 17.9403 5.48924C18.3543 5.48924 18.6903 5.82524 18.6903 6.23924C18.6903 6.65324 18.3543 6.98924 17.9403 6.98924Z"
                            fill="white" />
                    </svg>
                </a>
                <div class="text-sm sm:text-base text-dark-primary col-span-4 text-end">Total (1 Item): <span
                        class="text-primary text-sm font-medium">Rp<span class="text-base">800.000</span>
                    </span>
                </div>
                <a href="{{ route('checkout') }}"
                    class="text-white leading-relaxed text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center inline-flex justify-center items-center dark:bg-primary dark:hover:bg-primary-hover ">
                    Checkout
                </a>
            </div>
        </div>
    </section>
    <section id="featured" class="px-5 md:px-24 xl:px-44 w-full pt-10 pb-20">
        <div class="flex flex-col gap-5">
            <h3 class="font-semibold text-primary font-main text-xl sm:text-2xl md:text-3xl">Roti Lain</h3>
            <div class="flex flex-wrap justify-center xl:justify-between gap-5 lg:gap-10 xl:gap-0">
                <div class="bg-white border border-gray-200 rounded-md overflow-hidden w-[270px] shadow-sm transition duration-500 ease-in-out hover:shadow-lg dark:bg-gray-800 dark:border-gray-700 flex flex-col mb-0 xl:mb-5 cursor-pointer"
                    x-data="{ goToDetail: '' }" @click="window.location.href = goToDetail">
                    <a href="#" class="h-40">
                        <img class="h-full w-full object-center object-cover" src="{{ asset('images/roti.png') }}"
                            alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-[4] h-auto">
                        <h5 class="mb-1 text-sm sm:text-base font-semibold text-dark-primary dark:text-white">Croissant
                        </h5>
                        <p
                            class="mb-1 font-normal text-xs sm:text-sm text-dark-secondary dark:text-gray-400 line-clamp-2">
                            Lorem
                            ipsum dolor sit
                            amet consectetur adipisicing elit. Libero, architecto?</p>
                        <h3 class="mb-1 font-bold text-base sm:text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-xs sm:text-sm text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-md overflow-hidden w-[270px] shadow-sm transition duration-500 ease-in-out hover:shadow-lg dark:bg-gray-800 dark:border-gray-700 flex flex-col mb-0 xl:mb-5 cursor-pointer"
                    x-data="{ goToDetail: '' }" @click="window.location.href = goToDetail">
                    <a href="#" class="h-40">
                        <img class="h-full w-full object-center object-cover" src="{{ asset('images/roti.png') }}"
                            alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-[4] h-auto">
                        <h5 class="mb-1 text-sm sm:text-base font-semibold text-dark-primary dark:text-white">Croissant
                        </h5>
                        <p
                            class="mb-1 font-normal text-xs sm:text-sm text-dark-secondary dark:text-gray-400 line-clamp-2">
                            Lorem
                            ipsum dolor sit
                            amet consectetur adipisicing elit. Libero, architecto?</p>
                        <h3 class="mb-1 font-bold text-base sm:text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-xs sm:text-sm text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-md overflow-hidden w-[270px] shadow-sm transition duration-500 ease-in-out hover:shadow-lg dark:bg-gray-800 dark:border-gray-700 flex flex-col mb-0 xl:mb-5 cursor-pointer"
                    x-data="{ goToDetail: '' }" @click="window.location.href = goToDetail">
                    <a href="#" class="h-40">
                        <img class="h-full w-full object-center object-cover" src="{{ asset('images/roti.png') }}"
                            alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-[4] h-auto">
                        <h5 class="mb-1 text-sm sm:text-base font-semibold text-dark-primary dark:text-white">Croissant
                        </h5>
                        <p
                            class="mb-1 font-normal text-xs sm:text-sm text-dark-secondary dark:text-gray-400 line-clamp-2">
                            Lorem
                            ipsum dolor sit
                            amet consectetur adipisicing elit. Libero, architecto?</p>
                        <h3 class="mb-1 font-bold text-base sm:text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-xs sm:text-sm text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-md overflow-hidden w-[270px] shadow-sm transition duration-500 ease-in-out hover:shadow-lg dark:bg-gray-800 dark:border-gray-700 flex flex-col mb-0 xl:mb-5 cursor-pointer"
                    x-data="{ goToDetail: '' }" @click="window.location.href = goToDetail">
                    <a href="#" class="h-40">
                        <img class="h-full w-full object-center object-cover" src="{{ asset('images/roti.png') }}"
                            alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-[4] h-auto">
                        <h5 class="mb-1 text-sm sm:text-base font-semibold text-dark-primary dark:text-white">Croissant
                        </h5>
                        <p
                            class="mb-1 font-normal text-xs sm:text-sm text-dark-secondary dark:text-gray-400 line-clamp-2">
                            Lorem
                            ipsum dolor sit
                            amet consectetur adipisicing elit. Libero, architecto?</p>
                        <h3 class="mb-1 font-bold text-base sm:text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-xs sm:text-sm text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-guest-layout>
