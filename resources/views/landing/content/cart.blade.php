<x-guest-layout>
    @if (count($cart->cart_details) != 0)
        @livewire('carts.list-cart')
        <section id="featured" class="px-5 md:px-24 xl:px-44 w-full pt-10 pb-20">
            <div class="flex flex-col gap-5">
                <h3 class="font-semibold text-primary font-main text-xl sm:text-2xl md:text-3xl">Roti Lain</h3>
                <ul class="flex flex-wrap justify-center xl:justify-start gap-10 xl:gap-7">
                    @foreach ($breads as $bread)
                        <li class="bg-white border border-gray-200 rounded-md overflow-hidden w-[270px] shadow-sm transition duration-500 ease-in-out hover:shadow-lg dark:bg-gray-800 dark:border-gray-700 flex flex-col mb-0 xl:mb-5 cursor-pointer"
                            x-data="{ goToDetail: '{{ route('detail-breads', $bread->id) }}' }" @click="window.location.href = goToDetail">
                            <div class="h-40">
                                <img class="h-full w-full object-center object-cover"
                                    src="{{ Storage::url($bread->image) }}" alt="" />
                            </div>
                            <div class="px-3 py-2.5 flex-[4] h-auto">
                                <h5 class="mb-1 text-sm sm:text-base font-semibold text-dark-primary dark:text-white">
                                    {{ $bread->name }}
                                </h5>
                                <p
                                    class="mb-1 font-normal text-xs sm:text-sm text-dark-secondary dark:text-gray-400 line-clamp-2">
                                    {{ $bread->description }}</p>
                                <h3 class="mb-1 font-bold text-base sm:text-lg text-primary">Rp
                                    {{ number_format($bread->price, 0, ',', '.') }}</h3>
                                <p class="font-medium text-xs sm:text-sm text-dark-primary">Min. order: <span
                                        class="text-dark-secondary font-normal">{{ $bread->min_order }}
                                        {{ $bread->unit }}</span></p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    @else
        <div class="flex justify-center flex-col items-center gap-3 mt-[64px] pt-16 md:pt-10 pb-20 xl:pt-20">
            <img src="{{ asset('images/icons/empty-cart.png') }}" alt="empty-cart" class="w-16 lg:w-20">
            <h1 class="text-center text-base xl:text-lg font-semibold text-dark-primary">Keranjang Belanja Anda
                Kosong</h1>
            <a href="{{ route('roti') }}"
                class="text-white mx-auto sm:mx-0 mt-2 text-sm sm:text-base bg-primary hover:bg-primary-hover font-medium rounded-full px-6 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                Belanja Sekarang
            </a>
        </div>
    @endif
</x-guest-layout>
