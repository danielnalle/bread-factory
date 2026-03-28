<x-guest-layout>
    <section id="detail" class="px-5 md:px-24 xl:px-44 w-full pt-[116px] pb-10 bg-[#F5F5F5]">
        <div
            class="flex flex-col items-center lg:items-start lg:flex-row h-full gap-8 p-5 mb-5 rounded-lg bg-white shadow-sm">
            <div class="xs:w-[400px] xs:shrink-0 xs:h-[400px] overflow-hidden rounded-sm">
                <div class="relative h-full w-full bg-[#f8f8f8]">
                    <img src="{{ Storage::url($bread->image) }}" class="w-full h-full object-contain" alt="">
                </div>
            </div>
            <div class="w-full">
                <h1 class="font-semibold text-xl md:text-2xl text-dark-primary mb-1">{{ $bread->name }}</h1>
                <h3 class="font-medium text-2xl md:text-3xl text-primary mb-5">Rp.
                    <span>{{ number_format($bread->price, 0, ',', '.') }}</span>
                </h3>
                <ul class="flex flex-col gap-5 text-[#0C1C2ECC] text-sm md:text-base font-normal">
                    <li class="flex gap-2 w-full">
                        <div class="max-w-20 sm:max-w-28 lg:max-w-20 xl:max-w-36 w-full">
                            <p>Minimal Order</p>
                        </div>
                        <div class="w-full">
                            <p>{{ $bread->min_order }} {{ $bread->unit }}</p>
                        </div>
                    </li>
                    <li class="flex gap-2 w-full">
                        <div class="max-w-20 sm:max-w-28 lg:max-w-20 xl:max-w-36 w-full">
                            <p>Stok tersedia</p>
                        </div>
                        <div class="w-full">
                            <p>
                                @if ($bread->quantity < $bread->min_order)
                                    {{ 'Habis' }}
                                @else
                                    {{ $bread->quantity }}
                                @endif
                            </p>
                        </div>
                    </li>
                    <li class="flex gap-2 w-full">
                        <div class="max-w-20 sm:max-w-28 lg:max-w-20 xl:max-w-36 w-full">
                            <p>Jenis Roti</p>
                        </div>
                        <div class="w-full">
                            <p>{{ $bread->bread_type->name }}</p>
                        </div>
                    </li>
                    <li class="flex gap-2 w-full">
                        <div class="max-w-20 sm:max-w-28 lg:max-w-20 xl:max-w-36 w-full">
                            <p>Deskripsi Roti</p>
                        </div>
                        <div class="w-full">
                            <p class=" whitespace-pre-line">{{ $bread->description }}
                            </p>
                        </div>
                    </li>
                    @livewire('carts.add-to-cart', ['bread' => $bread])
                </ul>
            </div>
        </div>
        <a href="{{ route('roti') }}"
            class="text-white leading-relaxed text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
            Kembali
        </a>
    </section>
    <section id="featured" class="px-5 md:px-24 xl:px-44 w-full pt-10 pb-20">
        <div class="flex flex-col gap-5">
            <h3 class="font-semibold text-primary font-main text-2xl md:text-3xl">Roti Serupa</h3>
            <ul class="flex flex-wrap justify-center xl:justify-start gap-10 xl:gap-7">
                @foreach ($similar as $bread)
                    <li>
                        <a href="{{ route('detail-breads', $bread->id) }}"
                            class="bg-white border border-gray-200 rounded-md overflow-hidden w-[270px] shadow-sm transition duration-500 ease-in-out hover:shadow-lg dark:bg-gray-800 dark:border-gray-700 flex flex-col mb-0 xl:mb-5 cursor-pointer">
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
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

    </section>

</x-guest-layout>
