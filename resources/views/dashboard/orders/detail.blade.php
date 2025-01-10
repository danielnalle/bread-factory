<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-6">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Detail Pesanan</h1>
            </div>
            <div class="mb-4 sm:mb-0">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="#"
                                class="inline-flex items-center text-sm font-medium text-dark-primary hover:text-primary-hover dark:text-gray-400 dark:hover:text-white">
                                Transaksi
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <a href="{{ route('orders') }}"
                                    class="inline-flex ms-1 md:ms-2 items-center text-sm font-medium text-dark-primary hover:text-primary-hover dark:text-gray-400 dark:hover:text-white">
                                    Pesanan
                                </a>
                            </div>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="ms-1 text-sm font-medium text-dark-secondary md:ms-2 dark:text-gray-400">Detail</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>



        <!-- Cards -->

        <div class="antialiased relative">
            <form class="max-w-full mx-auto">
                <div class="md:grid md:grid-cols-3 gap-5 mb-5">
                    <div class="gap-5 col-span-2">
                        <div class="bg-white p-5 rounded-lg shadow-sm mb-5 md:mb-0">
                            <div class="mb-5">
                                <label for="name"
                                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Nama
                                    Pelanggan</label>
                                <input type="text" id="name" disabled
                                    class="bg-gray-100 border border-gray-300 text-dark-primary
                                    text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3
                                    placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary
                                    dark:focus:border-primary"
                                    placeholder="Masukan nama pelanggan" value="{{ $order->cart->user->name }}"
                                    required />
                            </div>
                            <div>
                                <label for="catatan"
                                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Catatan</label>
                                <textarea name="catatan" disabled
                                    class="border bg-gray-100 border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary
                                    focus:border-primary block w-full p-2.5 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600
                                    dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                    id="catatan" rows="6" maxlength="600" placeholder="Catatan" required>{{ $order->note }}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="bg-white p-5 rounded-lg shadow-sm">
                            <div class="mb-5">
                                <label for="no_pesanan"
                                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">No
                                    Pesanan</label>
                                <input type="text" id="no_pesanan" disabled
                                    class="bg-gray-100 border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                    required value="{{ $order->no_order }}" />
                            </div>
                            <div class="mb-5">
                                <label for="status-pesanan"
                                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Status
                                    Pesanan</label>
                                <select id="status" disabled
                                    class="bg-gray-100 border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full px-3 py-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary">
                                    <option>-- Pilih status --</option>
                                    <option selected>{{ $order->orderStatus->name }}</option>
                                </select>
                            </div>
                            <div class="">
                                <label for="status-transaksi"
                                    class="block mb-2.5 text-sm font-medium text-dark-primary dark:text-white">Status
                                    Transaksi</label>
                                <input type="text" id="status-transaksi" disabled
                                    class="bg-gray-100 border border-gray-300 text-dark-primary text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                    required value="{{ $order->paymentStatus->name }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-sm mb-5 overflow-x-auto">
                    <p class="block mb-5 text-base font-semibold text-dark-primary dark:text-white">Produk Pesanan</p>
                    <hr class="mb-5">
                    <table class="w-full text-sm text-left rtl:text-right text-dark-secondary dark:text-gray-400 mb-5">
                        <thead
                            class="text-xs text-dark-primary font-semibold uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Kuantitas
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Total Harga
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->cart->cart_details as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="w-4 p-4 text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-semibold text-dark-primary whitespace-nowrap dark:text-white">
                                        {{ $item->breads->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $item->quantity }} {{ $item->unit }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="text-xs">Rp</span>{{ number_format($item->breads->price, 0, ',', '.') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="text-xs">Rp</span>{{ number_format($item->quantity * $item->breads->price, 0, ',', '.') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <p class="block mb-1 text-sm font-medium text-dark-primary dark:text-white">Total Keseluruhan</p>
                    <h3 class="text-base font-semibold text-dark-primary dark:text-white"><span
                            class="text-sm">Rp</span>{{ number_format($order->total_price, 0, ',', '.') }}
                    </h3>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-sm mb-5 overflow-x-auto">
                    <p class="block mb-5 text-base font-semibold text-dark-primary dark:text-white">Alamat Pelanggan
                    </p>
                    <hr class="mb-5">
                    <table class="w-full text-sm text-left rtl:text-right text-dark-secondary dark:text-gray-400">
                        <thead
                            class="text-xs text-dark-primary font-semibold uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Alamat Lengkap
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    No Handphone
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4">
                                    {{ $order->cart->user->customer->address }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $order->cart->user->customer->phone }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('orders') }}"
                    class="text-white bg-primary hover:bg-primary-hover font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                    Kembali
                </a>
            </form>

        </div>

    </div>
</x-app-layout>
