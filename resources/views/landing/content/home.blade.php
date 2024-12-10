<x-guest-layout>
    <section id="hero" class="bg-cover bg-center bg-no-repeat h-[600px] flex items-center"
        style="background-image: url('/images/hero-bg.png');">
        {{-- <div class="relative">
            <img src="{{ asset('images/hero-bg.png') }}" class="w-full h-auto" alt="">
            <div class="bg-black absolute bg-opacity-40 inset-0"></div>
        </div> --}}
        <div
            class="px-5 md:px-24 xl:px-44 w-full flex flex-col items-start justify-center h-full bg-black bg-opacity-40 text-white">
            <div class="max-w-[800px]">
                <h1 class="text-4xl text-center sm:text-start sm:text-5xl md:text-[56px] font-main font-semibold mb-4">
                    Kelezatan Roti
                    Yang Tak
                    <span class="inline-block mt-2">Tertandingi!</span>
                </h1>
                <p class="text-center sm:text-start text-base font-normal max-w-xl">
                    Dengan bahan alami dan proses yang penuh keahlian, kami menciptakan roti dengan tekstur sempurna dan
                    rasa yang tak terlupakan. Bakeru - lebih dari sekadar roti.
                </p>
            </div>
            <a href="{{ route('produk') }}"
                class="text-white mx-auto sm:mx-0 mt-7 text-base bg-primary hover:bg-primary-hover font-medium rounded-full px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                Jelajahi Koleksi Roti
            </a>
        </div>
    </section>
    <section id="featured" class="px-5 md:px-24 xl:px-44 w-full py-24">
        <div class="flex flex-col gap-5">
            <div class="flex items-end justify-between font-semibold text-primary font-main">
                <h3 class="text-3xl md:text-4xl">Produk Terlaris</h3>
                <a href="" class="text-sm md:text-base underline underline-offset-4 pb-1">See all</a>
            </div>
            <div class="flex flex-wrap justify-center xl:justify-between gap-5 lg:gap-10 xl:gap-0">
                <div
                    class="bg-white border border-gray-200 rounded-md overflow-hidden w-[270px] shadow-sm transition duration-500 ease-in-out hover:shadow-lg dark:bg-gray-800 dark:border-gray-700 flex flex-col mb-0 xl:mb-5">
                    <a href="#" class="h-40">
                        <img class="h-full w-full object-center object-cover" src="{{ asset('images/produk.png') }}"
                            alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-[4] h-auto">
                        <h5 class="mb-1 text-base font-semibold text-dark-primary dark:text-white">Croissant
                        </h5>
                        <p class="mb-1 font-normal text-sm text-dark-secondary dark:text-gray-400 line-clamp-2">Lorem
                            ipsum dolor sit
                            amet consectetur adipisicing elit. Libero, architecto?</p>
                        <h3 class="mb-1 font-bold text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-sm text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
                <div
                    class="bg-white border border-gray-200 rounded-md overflow-hidden w-[270px] shadow-sm transition duration-500 ease-in-out hover:shadow-lg dark:bg-gray-800 dark:border-gray-700 flex flex-col mb-0 xl:mb-5">
                    <a href="#" class="h-40">
                        <img class="h-full w-full object-center object-cover" src="{{ asset('images/produk.png') }}"
                            alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-[4] h-auto">
                        <h5 class="mb-1 text-base font-semibold text-dark-primary dark:text-white">Croissant
                        </h5>
                        <p class="mb-1 font-normal text-sm text-dark-secondary dark:text-gray-400 line-clamp-2">Lorem
                            ipsum dolor sit
                            amet consectetur adipisicing elit. Libero, architecto?</p>
                        <h3 class="mb-1 font-bold text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-sm text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
                <div
                    class="bg-white border border-gray-200 rounded-md overflow-hidden w-[270px] shadow-sm transition duration-500 ease-in-out hover:shadow-lg dark:bg-gray-800 dark:border-gray-700 flex flex-col mb-0 xl:mb-5">
                    <a href="#" class="h-40">
                        <img class="h-full w-full object-center object-cover" src="{{ asset('images/produk.png') }}"
                            alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-[4] h-auto">
                        <h5 class="mb-1 text-base font-semibold text-dark-primary dark:text-white">Croissant
                        </h5>
                        <p class="mb-1 font-normal text-sm text-dark-secondary dark:text-gray-400 line-clamp-2">Lorem
                            ipsum dolor sit
                            amet consectetur adipisicing elit. Libero, architecto?</p>
                        <h3 class="mb-1 font-bold text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-sm text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
                <div
                    class="bg-white border border-gray-200 rounded-md overflow-hidden w-[270px] shadow-sm transition duration-500 ease-in-out hover:shadow-lg dark:bg-gray-800 dark:border-gray-700 flex flex-col mb-0 xl:mb-5">
                    <a href="#" class="h-40">
                        <img class="h-full w-full object-center object-cover" src="{{ asset('images/produk.png') }}"
                            alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-[4] h-auto">
                        <h5 class="mb-1 text-base font-semibold text-dark-primary dark:text-white">Croissant
                        </h5>
                        <p class="mb-1 font-normal text-sm text-dark-secondary dark:text-gray-400 line-clamp-2">Lorem
                            ipsum dolor sit
                            amet consectetur adipisicing elit. Libero, architecto?</p>
                        <h3 class="mb-1 font-bold text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-sm text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="advantages" class="px-5 md:px-16 xl:px-36 w-full pt-10 pb-14 bg-tertiary">
        <div class="flex flex-col items-center gap-5">
            <h3 class="text-3xl md:text-4xl mb-3 md:mb-7 font-semibold text-primary font-main ">Mengapa Bakeru?</h3>
            <div class="flex flex-wrap justify-center gap-7">
                <div
                    class="bg-white rounded-lg p-4 sm:p-6 overflow-hidden w-full sm:w-[460px] shadow-lg flex gap-5 items-center">
                    <div class="bg-primary p-3 sm:p-5 rounded-lg flex justify-center items-center">
                        <img src="{{ asset('images/icons/Bahan Alami.png') }}" class="w-7 sm:w-auto" alt="">
                    </div>
                    <div class="flex flex-col">
                        <h5 class="text-base sm:text-lg font-semibold text-dark-primary dark:text-white">Bahan Alami
                        </h5>
                        <p class="font-normal text-sm text-dark-secondary dark:text-gray-400 hidden sm:block">Roti kami
                            dibuat
                            dengan
                            bahan alami, memberikan rasa dan kualitas terbaik di setiap gigitan.</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-lg p-4 sm:p-6 overflow-hidden w-full sm:w-[460px] shadow-lg flex gap-5 items-center ">
                    <div class="bg-primary p-3 sm:p-5 rounded-lg flex justify-center items-center">
                        <img src="{{ asset('images/icons/Bakery.png') }}" alt="" class="w-7 sm:w-auto">
                    </div>
                    <div class="flex flex-col">
                        <h5 class="text-base sm:text-lg font-semibold text-dark-primary dark:text-white">Beragam Pilihan
                            Rasa
                        </h5>
                        <p class="font-normal text-sm text-dark-secondary dark:text-gray-400 hidden sm:block">Nikmati
                            berbagai varian
                            roti lezat dengan bahan berkualitas untuk memanjakan lidah Anda.</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-lg p-4 sm:p-6 overflow-hidden w-full sm:w-[460px] shadow-lg flex gap-5 items-center ">
                    <div class="bg-primary p-3 sm:p-5 rounded-lg flex justify-center items-center">
                        <img src="{{ asset('images/icons/Fast Delivery.png') }}" alt="" class="w-7 sm:w-auto">
                    </div>
                    <div class="flex flex-col">
                        <h5 class="text-base sm:text-lg font-semibold text-dark-primary dark:text-white">Pengiriman
                            Cepat
                        </h5>
                        <p class="font-normal text-sm text-dark-secondary dark:text-gray-400 hidden sm:block">Kami
                            memastikan pesanan
                            Anda sampai dengan cepat, tepat waktu, dan aman di tangan Anda.</p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-lg p-4 sm:p-6 overflow-hidden w-full sm:w-[460px] shadow-lg flex gap-5 items-center ">
                    <div class="bg-primary p-3 sm:p-5 rounded-lg flex justify-center items-center">
                        <img src="{{ asset('images/icons/Checklist.png') }}" alt="" class="w-7 sm:w-auto">
                    </div>
                    <div class="flex flex-col">
                        <h5 class="text-base sm:text-lg font-semibold text-dark-primary dark:text-white">Produksi
                            Bersih
                        </h5>
                        <p class="font-normal text-sm text-dark-secondary dark:text-gray-400 hidden sm:block">Setiap
                            roti dipersiapkan
                            di lingkungan yang higienis, dengan menjaga standar kebersihan dan kualitas tertinggi.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="howToOrder" class="px-5 md:px-16 xl:px-36 w-full py-24 bg-white">
        <div class="flex flex-col items-center gap-5">
            <h3 class="text-3xl md:text-4xl mb- font-semibold text-primary font-main">Cara Pemesanan
            </h3>
            <p class="text-dark-secondary text-base font-normal max-w-[600px] text-center mb-12">Pesan, terima, dan
                bayar
                roti
                segar dengan
                mudah.
                Produk berkualitas langsung diantar
                ke pintu Anda.</p>
            <div class="flex flex-wrap justify-center gap-20 md:gap-10">
                <div class="w-[320px] flex flex-col gap-7 items-center">
                    <div class="rounded-full w-40 h-40 bg-tertiary flex justify-center items-center">
                        <img src="{{ asset('images/icons/Pesan.png') }}" alt="" class="w-24">
                    </div>
                    <div class="text-center w-full flex flex-col items-center gap-5">
                        <div class="rounded-full border-primary border-2 w-12 h-12 flex justify-center items-center">
                            <p class="text-primary text-3xl font-semibold">1</p>
                        </div>
                        <h3 class="text-dark-primary text-2xl font-medium">Pesan Produk</h3>
                        <p class="text-base text-dark-secondary w-full font-normal">Pilih roti favorit Anda
                            dan tambahkan
                            ke
                            keranjang.
                            Sesuaikan pesanan sesuai
                            kebutuhan.</p>
                    </div>
                </div>
                <div class="w-[360px] flex flex-col gap-7 items-center">
                    <div class="rounded-full w-40 h-40 bg-tertiary flex justify-center items-center">
                        <img src="{{ asset('images/icons/Delivery.png') }}" alt="" class="w-24">
                    </div>
                    <div class="text-center w-full flex flex-col items-center gap-5">
                        <div class="rounded-full border-primary border-2 w-12 h-12 flex justify-center items-center">
                            <p class="text-primary text-3xl font-semibold">2</p>
                        </div>
                        <h3 class="text-dark-primary text-2xl font-medium">Dikirim kepada Anda</h3>
                        <p class="text-base text-dark-secondary w-full font-normal">Setelah dikonfirmasi, pesanan Anda
                            segera dipersiapkan dan dikirim ke lokasi Anda, tetap segar dan siap dinikmati.</p>
                    </div>
                </div>
                <div class="w-[320px] flex flex-col gap-7 items-center">
                    <div class="rounded-full w-40 h-40 bg-tertiary flex justify-center items-center">
                        <img src="{{ asset('images/icons/Pay.png') }}" alt="" class="w-24">
                    </div>
                    <div class="text-center w-full flex flex-col items-center gap-5">
                        <div class="rounded-full border-primary border-2 w-12 h-12 flex justify-center items-center">
                            <p class="text-primary text-3xl font-semibold">3</p>
                        </div>
                        <h3 class="text-dark-primary text-2xl font-medium">Bayar Pesanan</h3>
                        <p class="text-base text-dark-secondary w-full font-normal">Selesaikan pembelian dengan opsi
                            pembayaran aman dan fleksibel. Cepat dan mudah.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-guest-layout>
