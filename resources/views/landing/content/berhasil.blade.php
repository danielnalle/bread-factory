<x-guest-layout>
    <section class="px-5 md:px-24 xl:px-44 w-full pt-[104px] pb-10 bg-[#F5F5F5]">
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/icons/berhasil.png') }}" class="mb-6 w-16 md:w-auto">
            <h3 class="text-dark-primary text-2xl md:text-3xl font-semibold mb-2 md:mb-4">Pesanan Berhasil</h3>
            <p class="text-dark-secondary text-sm md:text-base font-medium max-w-2xl text-center mb-8">Kami akan segera
                memproses
                pesanan
                Anda. Anda
                dapat
                memantau status
                pesanan melalui dashboard di akun Anda.</p>
            <a href="{{ route('landing-page') }}"
                class="text-primary border-2 border-primary focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm md:text-base px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kembali
                ke Home</a>
        </div>
    </section>
</x-guest-layout>
