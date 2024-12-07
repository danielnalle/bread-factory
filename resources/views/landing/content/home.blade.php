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
                <p class="text-sm text-center sm:text-start md:text-base font-normal max-w-xl">
                    Dengan bahan alami dan proses yang penuh keahlian, kami menciptakan roti dengan tekstur sempurna dan
                    rasa yang tak terlupakan. Bakeru - lebih dari sekadar roti.
                </p>
            </div>
            <button type="submit"
                class="text-white mx-auto sm:mx-0 mt-7 text-base bg-primary hover:bg-primary-hover font-medium rounded-full px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                Jelajahi Koleksi Roti
            </button>
        </div>
    </section>
    <section id="featured" class="px-5 md:px-24 xl:px-44 w-full my-24">
        <div class="flex flex-col space-y-5">
            <div class="flex items-end justify-between font-semibold text-primary font-main">
                <h3 class="text-4xl">Produk Terlaris</h3>
                <a href="" class="text-base underline underline-offset-4">See all</a>
            </div>
            <div class="flex flex-wrap justify-between">
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-md overflow-hidden h-[300px] w-[270px] shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col">
                    <a href="#" class="flex-1">
                        <img class="h-full object-cover" src="{{ asset('images/produk.png') }}" alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-none">
                        <h5 class="mb-1 text-base font-semibold text-dark-primary dark:text-white">White
                            Bread
                        </h5>
                        <p class="mb-1 font-normal text-xs text-dark-secondary dark:text-gray-400">Roti tawar putih
                            dengan tekstur lembut dan rasa ringan.</p>
                        <h3 class="mb-1 font-bold text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-xs text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-md overflow-hidden h-[300px] w-[270px] shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col">
                    <a href="#" class="flex-1">
                        <img class="h-full object-cover" src="{{ asset('images/produk.png') }}" alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-none">
                        <h5 class="mb-1 text-base font-semibold text-dark-primary dark:text-white">White
                            Bread
                        </h5>
                        <p class="mb-1 font-normal text-xs text-dark-secondary dark:text-gray-400">Roti tawar putih
                            dengan tekstur lembut dan rasa ringan.</p>
                        <h3 class="mb-1 font-bold text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-xs text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-md overflow-hidden h-[300px] w-[270px] shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col">
                    <a href="#" class="flex-1">
                        <img class="h-full object-cover" src="{{ asset('images/produk.png') }}" alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-none">
                        <h5 class="mb-1 text-base font-semibold text-dark-primary dark:text-white">White
                            Bread
                        </h5>
                        <p class="mb-1 font-normal text-xs text-dark-secondary dark:text-gray-400">Roti tawar putih
                            dengan tekstur lembut dan rasa ringan.</p>
                        <h3 class="mb-1 font-bold text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-xs text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
                <div
                    class="max-w-sm bg-white border border-gray-200 rounded-md overflow-hidden h-[300px] w-[270px] shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col">
                    <a href="#" class="flex-1">
                        <img class="h-full object-cover" src="{{ asset('images/produk.png') }}" alt="" />
                    </a>
                    <div class="px-3 py-2.5 flex-none">
                        <h5 class="mb-1 text-base font-semibold text-dark-primary dark:text-white">White
                            Bread
                        </h5>
                        <p class="mb-1 font-normal text-xs text-dark-secondary dark:text-gray-400">Roti tawar putih
                            dengan tekstur lembut dan rasa ringan.</p>
                        <h3 class="mb-1 font-bold text-lg text-primary">Rp 8.000</h3>
                        <p class="font-medium text-xs text-dark-primary">Min. order: <span
                                class="text-dark-secondary font-normal">100 pcs</span></p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-guest-layout>
