<x-guest-layout>
    <section id="heroSection" class="px-5 md:px-10 w-full h-screen pt-[116px] pb-10">
        <div
            class="bg-[url('../../../public/images/about-bg.png')] bg-cover bg-center h-full rounded-lg overflow-hidden">
            <div class="flex items-center md:items-end p-4 bg-black bg-opacity-20 justify-start h-full">
                <div class="bg-white rounded-lg p-7">
                    <div class="max-w-xl flex flex-col items-center md:items-start">
                        <button disabled
                            class="text-dark-primary border tracking-tight border-dark-secondary text-base font-medium shadow-sm rounded-full px-4 py-2 text-center mb-4">
                            Tentang Bakeru
                        </button>
                        <h1
                            class="text-4xl text-center md:text-start sm:text-5xl md:text-[56px] font-main font-medium mb-4 leading-tight md:leading-none">
                            Membawa Kesegaran
                            <span class="inline-block md:mt-2">Dan Kualitas Di Setiap</span>
                            <span class="inline-block md:mt-2">Gigitan!</span>
                        </h1>
                        <p class="text-center mb-5 text-dark-secondary md:text-start text-base font-normal">
                            Bakeru menghadirkan roti segar berkualitas tinggi yang dibuat untuk membawa kehangatan dan
                            kebahagiaan ke setiap santapan.
                        </p>
                        <a href="{{ route('produk') }}"
                            class="text-white mx-auto sm:mx-0 text-base bg-primary hover:bg-primary-hover rounded-full px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                            Lihat Produk Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="overview" class="px-5 md:px-24 xl:px-44 w-full py-14">
        <div class="max-w-5xl flex flex-col items-center gap-8 mx-auto mb-9">
            <h1 class="text-2xl text-center sm:text-start sm:text-3xl font-main text-primary font-semibold">
                Gambaran Umum
            </h1>
            <p class="text-center text-dark-secondary text-base font-medium">
                Bread Factory adalah platform daring untuk memesan roti langsung dari toko roti kami. Pelanggan dapat
                memilih, menyesuaikan, dan memesan roti untuk dikirim ke lokasi mereka. Dengan fokus pada kualitas dan
                kemudahan, kami memastikan bahwa setiap pesanan dilakukan secara efisien dan transparan.
            </p>
        </div>
        <hr>
    </section>
    <section id="outTim" class="px-5 md:px-24 xl:px-44 w-full pt-5 pb-24">
        <div class="flex flex-col items-center gap-10">
            <h1 class="text-2xl text-center sm:text-start sm:text-3xl font-main text-primary font-semibold">
                Tim Kami
            </h1>
            <div class="flex flex-wrap gap-5 items-center justify-center">
                <div class="p-0 sm:pb-10 max-w-60 h-[340px]">
                    <img src="{{ asset('images/team/1.jpg') }}" class="rounded-lg overflow-hidden" alt="">
                </div>
                <div class="p-0 sm:pt-10 max-w-60 h-[340px]">
                    <img src="{{ asset('images/user1.png') }}" class="rounded-lg overflow-hidden" alt="">
                </div>
                <div class="p-0 sm:pb-10 max-w-60 h-[340px]">
                    <img src="{{ asset('images/user1.png') }}" class="rounded-lg overflow-hidden" alt="">
                </div>
                <div class="p-0 sm:pt-10 max-w-60 h-[340px]">
                    <img src="{{ asset('images/user1.png') }}" class="rounded-lg overflow-hidden" alt="">
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
