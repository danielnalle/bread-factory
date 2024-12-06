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
</x-guest-layout>
