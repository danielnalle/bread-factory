<div class="px-5 py-2.5 bg-white dark:bg-gray-900 antialiased relative overflow-x-auto shadow-sm sm:rounded-lg mb-8">
    <div
        class="grid @if (auth()->user()->role != 'admin') {{ 'grid-cols-2 gap-4 md:grid-cols-2 xl:grid-cols-4' }} @else {{ 'grid-cols-2 gap-4 md:grid-cols-3 xl:grid-cols-7' }} @endif">
        <div
            class="px-0 md:px-5 py-3 md:py-4 border-r border-gray-200 @if (auth()->user()->role != 'admin') {{ 'hidden' }} @else {{ 'static' }} @endif">
            <p class="font-medium text-sm text-dark-secondary">
                Tim
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $informations[0] ?? '0' }}
            </h3>
        </div>
        <div
            class="px-0 md:px-5 py-3 md:py-4 @if (auth()->user()->role != 'admin') {{ 'border-r border-gray-200' }} @else {{ 'md:border-r md:border-gray-200' }} @endif">
            <p class="font-medium text-sm text-dark-secondary">
                Pelanggan
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $informations[1] ?? '0' }}
            </h3>
        </div>
        <div
            class="px-0 md:px-5 py-3 md:py-4 @if (auth()->user()->role != 'admin') {{ 'xl:border-r xl:border-gray-200' }} @else {{ 'border-r border-gray-200 md:border-none xl:border-r xl:border-gray-200' }} @endif">
            <p class="font-medium text-sm text-dark-secondary">
                Roti
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $informations[2] ?? '0' }}
            </h3>
        </div>
        <div
            class="px-0 md:px-5 py-3 md:py-4 @if (auth()->user()->role != 'admin') {{ 'border-r border-gray-200' }} @else {{ 'md:border-r md:border-gray-200' }} @endif">
            <p class="font-medium text-sm text-dark-secondary">
                Jenis Roti
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $informations[3] ?? '0' }}
            </h3>
        </div>
        <div
            class="px-0 md:px-5 py-3 md:py-4 @if (auth()->user()->role != 'admin') {{ '' }} @else {{ 'border-r border-gray-200' }} @endif">
            <p class="font-medium text-sm text-dark-secondary">
                Pesanan
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                {{ $informations[4] ?? '0' }}
            </h3>
        </div>
        <div
            class="px-0 md:px-5 py-3 md:py-4 xl:col-span-2 @if (auth()->user()->role != 'admin') {{ 'hidden' }} @else {{ 'static' }} @endif">
            <p class="font-medium text-sm text-dark-secondary">
                Pendapatan
            </p>
            <h3 class="font-bold text-dark-primary text-xl">
                Rp. {{ number_format($pendapatan, 0, ',', '.') }}
            </h3>
        </div>
    </div>
</div>
