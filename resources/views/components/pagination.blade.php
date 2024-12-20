<div>
    @if ($paginator->hasPages())
        <div class="flex sm:flex-row flex-col items-center justify-between">
            <!-- Help text -->
            <span class="text-sm text-dark-secondary dark:text-gray-400">
                Showing <span
                    class="font-semibold text-dark-primary dark:text-white">{{ $paginator->firstItem() }}</span> to <span
                    class="font-semibold text-dark-primary dark:text-white">{{ $paginator->lastItem() }}</span> of <span
                    class="font-semibold text-dark-primary dark:text-white">{{ $paginator->total() }}</span> Entries
            </span>
            <!-- Buttons -->
            <div class="inline-flex mt-2 sm:mt-0">
                @if ($paginator->onFirstPage())
                    <button
                        class="flex cursor-default items-center justify-center px-3 h-8 text-sm font-medium text-white bg-dark-primary rounded-s">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        Prev
                    </button>
                @else
                    <button wire:click="previousPage" wire:loading.attr="disabled"
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-dark-primary rounded-s hover:bg-gray-900 ">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        Prev
                    </button>
                @endif
                @if ($paginator->hasMorePages())
                    <button wire:click="nextPage" wire:loading.attr="disabled"
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-dark-primary border-0 border-s border-gray-700 rounded-e hover:bg-gray-900 ">
                        Next
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                @else
                    <button
                        class="flex items-center cursor-default justify-center px-3 h-8 text-sm font-medium text-white bg-dark-primary border-0 border-s border-gray-700 rounded-e ">
                        Next
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                @endif

            </div>
        </div>
    @endif
</div>
