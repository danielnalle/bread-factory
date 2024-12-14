<x-guest-layout>
    <section id="detail" class="px-5 md:px-24 xl:px-44 w-full pt-[84px] pb-10 bg-[#F5F5F5]">
        <div class="w-full mb-6">
            <!-- Header -->
            <div class="bg-white px-3 sm:px-5 py-3 sm:py-5 shadow-sm rounded-lg mb-5">
                <h1 class="text-primary font-main text-xl sm:text-2xl font-semibold pb-3 border-b">Checkout</h1>
                <div class="mt-5">
                    <h3 class="font-medium text-sm sm:text-base text-primary mb-2">Alamat Pengiriman</h3>
                    <div class="flex gap-5 items-center">
                        <div class="flex flex-wrap gap-2">
                            <p class="text-sm sm:text-base font-semibold text-dark-primary">
                                Yogi Pradnyana (+62) 81234567891
                            </p>
                            <p class="text-sm sm:text-base font-medium text-dark-secondary">Jalan
                                Gunung Guntur
                                No. 30, Denpasar
                                Barat</p>
                        </div>
                        <a href="" class="text-sm sm:text-base text-primary font-semibold">Ubah</a>
                    </div>
                </div>
            </div>
            <div class="bg-white px-3 sm:px-5 py-3 sm:py-5 shadow-sm rounded-lg mb-5">
                <h1 class="text-primary text-sm sm:text-base font-medium pb-3 border-b">Pesanan</h1>
                <div
                    class="hidden md:grid md:grid-cols-5 lg:grid-cols-6 gap-5 text-sm sm:text-base font-normal text-dark-secondary my-5">
                    <div class="col-span-2 lg:col-span-3">Produk</div>
                    <div class="text-center">Harga Satuan</div>
                    <div class="text-center">Jumlah</div>
                    <div class="text-center">Total Harga</div>
                </div>

                {{-- Mobile --}}
                <div class="flex md:hidden gap-5 pt-3 sm:pt-5">
                    <div class="w-24 h-auto shrink-0 overflow-hidden rounded-sm">
                        <div class="relative h-full w-full bg-[#f8f8f8]">
                            <img src="{{ asset('images/products/1.jpg') }}" class="w-full h-full object-contain"
                                alt="">
                        </div>
                    </div>
                    <div class="cols-span-2 flex flex-col justify-between w-full">
                        <div>
                            <h3 class="text-base text-dark-primary font-medium">White Bread</h3>
                            <p class="text-sm text-dark-primary">Rp. <span>8000</span></p>
                        </div>
                        <div class="flex justify-between items-center gap-2 mt-4 flex-wrap">
                            <p class="text-base text-primary font-medium">Rp. 800.000</p>
                            <span class="text-sm text-dark-primary">x100</span>
                        </div>
                    </div>
                </div>

                {{-- Desktop --}}
                <div class="hidden md:block">
                    <div class="grid grid-cols-5 lg:grid-cols-6 gap-5 items-center">
                        <div
                            class="col-span-2 lg:col-span-3 flex gap-2.5 items-center text-base sm:text-lg font-semibold text-dark-primary">
                            <div class="w-20 h-20 shrink-0 overflow-hidden rounded-sm">
                                <div class="relative h-full w-full bg-[#f8f8f8]">
                                    <img src="{{ asset('images/products/1.jpg') }}" class="w-full h-full object-contain"
                                        alt="">
                                </div>
                            </div>
                            White Bread
                        </div>
                        <div class="text-sm sm:text-base text-center text-dark-primary">Rp.
                            <span>8000</span>
                        </div>
                        <div class="text-sm sm:text-base text-center text-dark-primary">
                            100
                        </div>
                        <div class="text-sm sm:text-base text-dark-primary text-center">Rp.
                            <span>800.000</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col-reverse gap-5 sm:flex-row sm:justify-between items-start">
                <a href="{{ route('cart') }}"
                    class="text-white leading-relaxed text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                    Kembali
                </a>
                <div class="bg-white p-3 sm:p-5 rounded-lg shadow-sm w-full sm:w-[400px] sm:max-w-md">
                    <div class="flex flex-col gap-5">
                        <h3 class="text-base sm:text-lg font-medium text-dark-primary">Detail Harga</h3>
                        <div
                            class="flex justify-between items-center text-sm sm:text-base text-dark-primary pb-4 border-b">
                            <p>Total Pesanan:</p>
                            <p>Rp. <span>800.000</span></p>
                        </div>
                        <div
                            class="flex justify-between items-center text-sm sm:text-base text-dark-primary pb-4 border-b">
                            <p>Jumlah Pesanan:</p>
                            <p><span>1</span> Item</p>
                        </div>
                        <div
                            class="flex justify-between items-center text-sm sm:text-base text-dark-primary pb-4 border-b">
                            <p>Pengiriman:</p>
                            <p>Gratis</p>
                        </div>
                        <div class="flex justify-between items-center text-sm sm:text-base text-dark-primary">
                            <p>Total:</p>
                            <p class="text-primary font-medium">Rp. <span>800.000</span></p>
                        </div>
                        <button type="submit"
                            class="text-white leading-relaxed text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center inline-flex justify-center items-center dark:bg-primary dark:hover:bg-primary-hover ">
                            Buat Pesanan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
