<x-guest-layout>
    {{-- {{ dd($order) }} --}}
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
                                {{ $customer_name }} ({{ $customer->phone }})
                            </p>
                            <p class="text-sm sm:text-base font-medium text-dark-secondary">{{ $customer->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <label for="catatan"
                        class="block mb-2.5 text-base font-medium text-primary dark:text-white">Catatan</label>
                    <textarea name="catatan" disabled
                        class="border border-gray-300 bg-gray-100 text-dark-primary text-sm rounded-lg focus:ring-primary
                        focus:border-primary w-full md:w-1/2 block p-2.5 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600
                        dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                        id="catatan" rows="4" maxlength="1000">{{ $order->note }}</textarea>
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
                @foreach ($cart_details as $cart_detail)
                    <div class="flex md:hidden gap-5 pt-3 sm:pt-5">
                        <div class="w-24 h-auto shrink-0 overflow-hidden rounded-sm">
                            <div class="relative h-full w-full bg-[#f8f8f8]">
                                <img src="{{ Storage::url($cart_detail->breads->image) }}"
                                    class="w-full h-full object-contain" alt="">
                            </div>
                        </div>
                        <div class="cols-span-2 flex flex-col justify-between w-full">
                            <div>
                                <h3 class="text-sm sm:text-base text-dark-primary font-medium">
                                    {{ $cart_detail->breads->name }}
                                </h3>
                                <p class="text-xs sm:text-sm text-dark-primary">Rp<span
                                        class="text-sm sm:text-base">{{ number_format($cart_detail->breads->price, 0, ',', '.') }}</span>
                                </p>
                            </div>
                            <div class="flex justify-between items-center gap-2 mt-4 flex-wrap">
                                <p class="text-xs sm:text-sm text-primary font-medium">Rp<span
                                        class="text-sm sm:base">{{ number_format($cart_detail->quantity * $cart_detail->breads->price, 0, ',', '.') }}</span>
                                </p>
                                <span class="text-sm text-dark-primary">x{{ $cart_detail->quantity }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- Desktop --}}
                @foreach ($cart_details as $cart_detail)
                    <div class="hidden md:block pt-5">
                        <div class="grid grid-cols-5 lg:grid-cols-6 gap-5 items-center">
                            <div
                                class="col-span-2 lg:col-span-3 flex gap-2.5 items-center text-base font-semibold text-dark-primary">
                                <div class="w-20 h-20 shrink-0 overflow-hidden rounded-sm">
                                    <div class="relative h-full w-full bg-[#f8f8f8]">
                                        <img src="{{ Storage::url($cart_detail->breads->image) }}"
                                            class="w-full h-full object-contain" alt="">
                                    </div>
                                </div>
                                {{ $cart_detail->breads->name }}
                            </div>
                            <div class="text-xs sm:text-sm text-center text-dark-primary">Rp<span
                                    class="text-sm sm:text-base">{{ number_format($cart_detail->breads->price, 0, ',', '.') }}</span>
                            </div>
                            <div class="text-sm sm:text-base text-center text-dark-primary">
                                {{ $cart_detail->quantity }}
                            </div>
                            <div class="text-xs sm:text-sm text-center text-dark-primary">Rp<span
                                    class="text-sm sm:text-base">{{ number_format($cart_detail->quantity * $cart_detail->breads->price, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex flex-col-reverse gap-5 sm:flex-row sm:justify-between items-start">
                <a href="{{ route('my-account.orders') }}"
                    class="text-white leading-relaxed text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                    Kembali
                </a>
                <div class="bg-white p-3 sm:p-5 rounded-lg shadow-sm w-full sm:w-[400px] sm:max-w-md">
                    <div class="flex flex-col gap-5">
                        <h3 class="text-base sm:text-lg font-medium text-dark-primary">Detail Harga</h3>
                        <div
                            class="flex justify-between items-center text-sm sm:text-base text-dark-primary pb-4 border-b">
                            <p>Jumlah Pesanan:</p>
                            <p><span>{{ count($cart_details) }}</span> Item</p>
                        </div>
                        <div
                            class="flex justify-between items-center text-sm sm:text-base text-dark-primary pb-4 border-b">
                            <p>Pengiriman:</p>
                            <p>Gratis</p>
                        </div>
                        <div class="flex justify-between items-center text-sm sm:text-base text-dark-primary">
                            <p>Total:</p>
                            <p class="text-primary font-medium text-xs sm:text-sm">Rp<span
                                    class="text-sm sm:text-base">{{ number_format($order->total_price, 0, ',', '.') }}</span>
                            </p>
                        </div>
                        @if ($snap_token)
                            @if ($order->paymentStatus->id != 3)
                                <button type="submit" id="pay-button"
                                    class="text-white leading-relaxed text-sm md:text-base bg-primary font-medium hover:bg-primary-hover rounded-full px-7 py-2 text-center justify-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                                    Bayar Sekarang
                                </button>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
    </script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function() {
            // SnapToken acquired from previous step
            snap.pay('{{ $snap_token }}', {
                // Optional
                onSuccess: function(result) {
                    result.cart_id = '{{ $cart_id }}';
                    // console.log((JSON.stringify(result, null, 2)));
                    sendTransactionResponse(JSON.stringify(result, null, 2));
                },
                // Optional
                onPending: function(result) {
                    result.cart_id = '{{ $cart_id }}';
                    // console.log((JSON.stringify(result, null, 2)));
                    sendTransactionResponse(JSON.stringify(result, null, 2))
                },
                // Optional
                onError: function(result) {
                    result.cart_id = '{{ $cart_id }}';
                    // console.log((JSON.stringify(result, null, 2)));
                    sendTransactionResponse(JSON.stringify(result, null, 2))
                }
            });
        };

        function sendTransactionResponse(data) {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            console.log(data);

            fetch("{{ route('transaction-response') }}", {
                method: 'POST',
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": csrfToken
                },
                body: data
            })
            .then(res => res.json())
            .then(res => {
                console.log(res);
            })
            .catch(e => console.log(e.message));
        }
    </script>
</x-guest-layout>
