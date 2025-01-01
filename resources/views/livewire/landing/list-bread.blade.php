<div>
    <section id="searchSection" class="px-5 md:px-24 xl:px-44 w-full pt-[74px] pb-20 border border-b">
        <div class="flex flex-col items-center">
            <h3 class="text-3xl md:text-4xl mb-8 text-center md:mb-12 mt-10 font-semibold text-primary font-main ">Roti
                Pilihan untuk
                Anda!
            </h3>
            <form class="relative max-w-3xl w-full" wire:submit='searching'>
                <input type="text" wire:model="search"
                    class="inline-block py-5 ps-4 pe-40 text-sm sm:text-base leading-snug border border-dark-secondary font-normal text-dark-primary rounded-full w-full focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 placeholder-dark-tertiary dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                    placeholder="Cari Roti Favorite...">
                <button type="submit"
                    class="text-white absolute top-[11px] sm:top-[13px] right-[10px] text-sm sm:text-base leading-relaxed bg-primary tracking-wide hover:bg-primary-hover font-normal rounded-full px-6 py-2 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" class="mr-2"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="mask0_269_9118" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="1"
                            width="17" height="17">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.6665 1.66675H17.8972V17.8976H1.6665V1.66675Z" fill="white" />
                        </mask>
                        <g mask="url(#mask0_269_9118)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M9.78234 2.91675C5.9965 2.91675 2.9165 5.99591 2.9165 9.78175C2.9165 13.5676 5.9965 16.6476 9.78234 16.6476C13.5673 16.6476 16.6473 13.5676 16.6473 9.78175C16.6473 5.99591 13.5673 2.91675 9.78234 2.91675ZM9.78234 17.8976C5.30734 17.8976 1.6665 14.2567 1.6665 9.78175C1.6665 5.30675 5.30734 1.66675 9.78234 1.66675C14.2573 1.66675 17.8973 5.30675 17.8973 9.78175C17.8973 14.2567 14.2573 17.8976 9.78234 17.8976Z"
                                fill="white" />
                        </g>
                        <mask id="mask1_269_9118" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="14" y="14"
                            width="5" height="5">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.3667 14.7559H18.5534V18.9348H14.3667V14.7559Z" fill="white" />
                        </mask>
                        <g mask="url(#mask1_269_9118)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.9286 18.9348C17.7694 18.9348 17.6094 18.874 17.4869 18.7523L14.5502 15.824C14.3061 15.5798 14.3052 15.184 14.5494 14.9398C14.7927 14.694 15.1886 14.6957 15.4336 14.9382L18.3702 17.8673C18.6144 18.1115 18.6152 18.5065 18.3711 18.7507C18.2494 18.874 18.0886 18.9348 17.9286 18.9348Z"
                                fill="white" />
                        </g>
                    </svg>
                    Search
                </button>
            </form>
        </div>
    </section>
    <section id="breads" class="px-5 md:px-24 xl:px-44 w-full py-5 bg-[#F5F5F5]">
        <div class="flex flex-col">
            <div class="font-medium text-primary text-sm sm:text-base mb-7">
                <ul class="flex items-center gap-2.5 overflow-x-auto">
                    <li
                        class="px-5 py-2.5 rounded-full whitespace-nowrap @if ($selectedBreadType == '') {{ 'bg-primary text-white' }} @else {{ '' }} @endif">
                        <a href="#" wire:click="filter('')">Semua
                            Roti</a>
                    </li>
                    @foreach ($bread_types as $bread_type)
                        <li
                            class="px-5 py-2.5 rounded-full whitespace-nowrap bg-none @if ($selectedBreadType == $bread_type->id) {{ 'bg-primary text-white' }} @else {{ '' }} @endif">
                            <a href="#" wire:click='filter({{ $bread_type->id }})'>{{ $bread_type->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
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
</div>
