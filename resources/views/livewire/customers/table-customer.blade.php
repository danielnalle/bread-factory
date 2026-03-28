<div class="p-5 bg-white dark:bg-gray-900 antialiased relative overflow-x-auto shadow-sm sm:rounded-lg">
    <div class="mb-4 bg-white dark:bg-gray-900 sm:flex sm:justify-between sm:items-center">
        <div class="mb-4 sm:mb-0">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative mt-1">
                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-dark-secondary dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search" wire:model.live='search'
                    class="block pt-2 ps-10 text-sm text-dark-primary border border-gray-300 rounded-lg w-full sm:w-96 bg-gray-50 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 placeholder-dark-secondary dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                    placeholder="Cari pelanggan...">
            </div>
        </div>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-dark-secondary dark:text-gray-400 mb-4">
        <thead class="text-xs font-semibold text-dark-primary uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    No HP
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr class=" text-dark-secondary bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="w-4 p-4 text-center">
                        {{ $loop->iteration }}
                    </td>
                    <th scope="row"
                        class="px-6 py-4 font-semibold text-dark-primary whitespace-nowrap dark:text-white">
                        {{ $customer->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $customer->email }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $customer->customer->phone ?? '' }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $customer->customer->address ?? '' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $customers->links('components.pagination') }}
</div>
