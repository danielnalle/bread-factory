<section id="detail" class="px-5 md:px-24 xl:px-44 w-full pt-[84px] pb-10 bg-[#F5F5F5]">
    <form class="w-full mb-6" wire:submit='makeOrder'>
        <!-- Header -->
        <div class="bg-white px-3 sm:px-5 py-3 sm:py-5 shadow-sm rounded-lg mb-5">
            <h1 class="text-primary font-main text-xl sm:text-2xl font-semibold pb-3 border-b">Checkout</h1>
            <div class="mt-5">
                <h3 class="font-medium text-sm sm:text-base text-primary mb-2">Alamat Pengiriman</h3>
                <div class="flex gap-5 items-center">
                    <div class="flex flex-wrap gap-2">
                        <p class="text-sm sm:text-base font-semibold text-dark-primary">
                            {{ auth()->user()->name }} ({{ auth()->user()->customer->phone ?? '' }})
                        </p>
                        <p class="text-sm sm:text-base font-medium text-dark-secondary">
                            {{ auth()->user()->customer->address ?? '' }}</p>
                    </div>
                    <a href="{{ route('my-account.account') }}"
                        class="text-sm sm:text-base text-primary font-semibold">Ubah</a>
                </div>
            </div>
            <div class="mt-5">
                <label for="catatan"
                    class="block mb-2.5 text-base font-medium text-primary dark:text-white">Catatan</label>
                <textarea name="catatan"
                    class="border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary
                    focus:border-primary w-full md:w-1/2 block p-2.5 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600
                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                    id="catatan" rows="4" maxlength="1000" placeholder="Masukan catatan, seperti patokan, blok dan nama outlet"
                    wire:model='note'></textarea>
            </div>
        </div>
        <div class="bg-white px-3 sm:px-5 py-3 sm:py-5 shadow-sm rounded-lg mb-5">
            <h1 class="text-primary text-sm sm:text-base font-medium pb-3 border-b">Pesanan</h1>
            <div
                class="hidden md:grid md:grid-cols-5 lg:grid-cols-6 gap-5 text-sm sm:text-base font-normal text-dark-secondary mt-5">
                <div class="col-span-2 lg:col-span-3">Roti</div>
                <div class="text-center">Harga Satuan</div>
                <div class="text-center">Jumlah</div>
                <div class="text-center">Total Harga</div>
            </div>

            {{-- Mobile --}}
            @foreach ($carts as $cart)
                <div class="flex md:hidden gap-5 pt-3 sm:pt-5">
                    <div class="w-24 h-auto shrink-0 overflow-hidden rounded-sm">
                        <div class="relative h-full w-full bg-[#f8f8f8]">
                            <img src="{{ Storage::url($cart->breads->image) }}" class="w-full h-full object-contain"
                                alt="">
                        </div>
                    </div>
                    <div class="cols-span-2 flex flex-col justify-between w-full">
                        <div>
                            <h3 class="text-sm sm:text-base text-dark-primary font-medium">{{ $cart->breads->name }}
                            </h3>
                            <p class="text-xs sm:text-sm text-dark-primary">Rp<span
                                    class="text-sm sm:text-base">{{ number_format($cart->breads->price, 0, ',', '.') }}</span>
                            </p>
                        </div>
                        <div class="flex justify-between items-center gap-2 mt-4 flex-wrap">
                            <p class="text-xs sm:text-sm text-primary font-medium">Rp<span
                                    class="text-sm sm:base">{{ number_format($cart->quantity * $cart->breads->price, 0, ',', '.') }}</span>
                            </p>
                            <span class="text-sm text-dark-primary">x{{ $cart->quantity }}</span>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- Desktop --}}
            @foreach ($carts as $cart)
                <div class="hidden md:block pt-5">
                    <div class="grid grid-cols-5 lg:grid-cols-6 gap-5 items-center">
                        <div
                            class="col-span-2 lg:col-span-3 flex gap-2.5 items-center text-base sm:text-lg font-semibold text-dark-primary">
                            <div class="w-20 h-20 shrink-0 overflow-hidden rounded-sm">
                                <div class="relative h-full w-full bg-[#f8f8f8]">
                                    <img src="{{ Storage::url($cart->breads->image) }}"
                                        class="w-full h-full object-contain" alt="">
                                </div>
                            </div>
                            {{ $cart->breads->name }}
                        </div>
                        <div class="text-xs sm:text-sm text-center text-dark-primary">Rp<span
                                class="text-sm sm:text-base">{{ number_format($cart->breads->price, 0, ',', '.') }}</span>
                        </div>
                        <div class="text-sm sm:text-base text-center text-dark-primary">
                            {{ $cart->quantity }}
                        </div>
                        <div class="text-xs sm:text-sm text-center text-dark-primary">Rp<span
                                class="text-sm sm:text-base">{{ number_format($cart->quantity * $cart->breads->price, 0, ',', '.') }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex flex-col-reverse gap-5 sm:flex-row sm:justify-between items-start">
            <a href="{{ route('carts') }}"
                class="text-white leading-relaxed text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                Kembali
            </a>
            <div class="bg-white p-3 sm:p-5 rounded-lg shadow-sm w-full sm:w-[400px] sm:max-w-md">
                <div class="flex flex-col gap-5">
                    <h3 class="text-base sm:text-lg font-medium text-dark-primary">Detail Harga</h3>
                    <div class="flex justify-between items-center text-sm sm:text-base text-dark-primary pb-4 border-b">
                        <p>Jumlah Pesanan:</p>
                        <p><span>{{ count($carts) }}</span> Item</p>
                    </div>
                    <div class="flex justify-between items-center text-sm sm:text-base text-dark-primary pb-4 border-b">
                        <p>Pengiriman:</p>
                        <p>Gratis</p>
                    </div>
                    <div class="flex justify-between items-center text-sm sm:text-base text-dark-primary">
                        <p>Total:</p>
                        <p class="text-primary font-medium text-xs sm:text-sm">Rp<span
                                class="text-sm sm:text-base">{{ number_format($totalPrice, 0, ',', '.') }}</span>
                        </p>
                    </div>
                    <button type="submit"
                        class="text-white leading-relaxed text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center inline-flex justify-center items-center dark:bg-primary dark:hover:bg-primary-hover ">
                        Buat Pesanan
                    </button>
                </div>
            </div>
        </div>
    </form>

    <div id="alamat-modal"
        class="@if (isset(auth()->user()->customer->phone)) {{ 'hidden' }} @else {{ 'flex' }} @endif overflow-y-auto overflow-x-hidden fixed inset-0 z-50 justify-center items-center w-full h-screen">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Alamat Baru
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    @livewire('orders.form-update-profil')
                </div>
            </div>
        </div>
    </div>
</section>
