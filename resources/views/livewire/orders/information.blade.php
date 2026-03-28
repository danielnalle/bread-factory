<div wire:poll.keep-alive.5s
    class="px-5 py-2.5 bg-white dark:bg-gray-900 antialiased relative overflow-x-auto shadow-sm sm:rounded-lg mb-8">
    <div class="grid grid-cols-2 gap-4 md:grid-cols-3 xl:grid-cols-6">
        <div class="px-0 md:px-5 py-3 md:py-4 border-r border-gray-200">
            <p class="font-medium text-sm text-dark-secondary">
                Total Pesanan
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $total_orders }}
            </h3>
        </div>
        <div class="px-0 md:px-5 py-3 md:py-4 md:border-r md:border-gray-200">
            <p class="font-medium text-sm text-dark-secondary">
                Pesanan Baru
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $informations[0] }}
            </h3>
        </div>
        <div
            class="px-0 md:px-5 py-3 md:py-4 border-r border-gray-200 md:border-none xl:border-r xl:border-solid xl:border-gray-200">
            <p class="font-medium text-sm text-dark-secondary">
                Pesanan Diproses
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $informations[1] }}
            </h3>
        </div>
        <div class="px-0 md:px-5 py-3 md:py-4 md:border-r md:border-gray-200">
            <p class="font-medium text-sm text-dark-secondary">
                Dalam Pengiriman
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $informations[2] }}
            </h3>
        </div>
        <div class="px-0 md:px-5 py-3 md:py-4 border-r border-gray-200">
            <p class="font-medium text-sm text-dark-secondary">
                Sampai di Tujuan
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $informations[3] }}
            </h3>
        </div>
        <div class="px-0 md:px-5 py-3 md:py-4">
            <p class="font-medium text-sm text-dark-secondary">
                Pesanan Berhasil
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $informations[4] }}
            </h3>
        </div>
    </div>
</div>
