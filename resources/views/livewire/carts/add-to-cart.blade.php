<form wire:submit='addToCart'>
    <li class="flex gap-2 w-full">
        <div class="max-w-20 sm:max-w-28 lg:max-w-20 xl:max-w-36 w-full">
            <p>Kuantitas</p>
        </div>
        <div class="w-full flex h-8">
            <button type="button" wire:click='decrement' @if ($amount < $bread->min_order) {{ 'disabled' }} @endif
                class="inline-flex items-center justify-center p-1 w-8 h-8 border-t border-l border-b border-dark-tertiary"><svg
                    width="12" height="2" viewBox="0 0 12 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1H11" stroke="#0C1C2E" stroke-opacity="0.87" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
            <input type="text" wire:model.live='amount'
                class="max-w-20 w-14 text-center border-dark-tertiary focus:ring-transparent focus:border-primary text-primary">
            <button type="button" wire:click='increment'
                class="inline-flex items-center justify-center p-1 w-8 h-8 border-t border-r border-b border-dark-tertiary"><svg
                    width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 7V17" stroke="#0C1C2E" stroke-opacity="0.87" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M7 12H17" stroke="#0C1C2E" stroke-opacity="0.87" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </li>
    @if (isset($errMessage))
        <div class="text-red-500 text-sm mt-1">{{ $errMessage }}</div>
    @endif
    <li class="flex flex-wrap gap-2.5 mt-4">
        <button type="submit"
            class="text-white w-full justify-center sm:justify-start sm:w-fit leading-relaxed text-base font-normal bg-primary border hover:bg-primary-hover border-none rounded-full px-7 py-2 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover gap-2">
            <svg width="24" height="24" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.38236 9.73873L8.08586 18.1061C8.13719 18.7501 8.66336 19.2331 9.30619 19.2331H9.31086H22.0404H22.0427C22.6505 19.2331 23.1697 18.7804 23.256 18.1796L24.3644 10.5274C24.39 10.3454 24.3445 10.1634 24.2337 10.0164C24.124 9.86823 23.963 9.77257 23.781 9.7469C23.5372 9.75623 13.4187 9.74223 7.38236 9.73873ZM9.30385 20.9831C7.76735 20.9831 6.46652 19.7837 6.34169 18.2496L5.27302 5.5399L3.51486 5.23657C3.03769 5.15257 2.71919 4.70107 2.80086 4.2239C2.88486 3.74673 3.34569 3.4364 3.81236 3.51107L6.23902 3.93107C6.62986 3.9999 6.92735 4.32424 6.96119 4.7209L7.23535 7.98874C23.8907 7.99574 23.9444 8.0039 24.0249 8.01324C24.6747 8.10774 25.2464 8.44724 25.636 8.9699C26.0257 9.4914 26.189 10.1342 26.0957 10.7782L24.9885 18.4292C24.7797 19.8852 23.515 20.9831 22.045 20.9831H22.0392H9.31319H9.30385Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M20.1688 14.051H16.9348C16.4506 14.051 16.0598 13.659 16.0598 13.176C16.0598 12.693 16.4506 12.301 16.9348 12.301H20.1688C20.6518 12.301 21.0438 12.693 21.0438 13.176C21.0438 13.659 20.6518 14.051 20.1688 14.051Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M9.36172 26.2976C8.52872 26.2976 7.85205 25.6198 7.85205 24.7868C7.85205 23.9538 8.52872 23.2771 9.36172 23.2771C10.1959 23.2771 10.8737 23.9538 10.8737 24.7868C10.8737 25.6198 10.1959 26.2976 9.36172 26.2976Z"
                    fill="currentColor" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M21.9618 26.2976C21.1288 26.2976 20.4521 25.6198 20.4521 24.7868C20.4521 23.9538 21.1288 23.2771 21.9618 23.2771C22.796 23.2771 23.4738 23.9538 23.4738 24.7868C23.4738 25.6198 22.796 26.2976 21.9618 26.2976Z"
                    fill="currentColor" />
            </svg>
            <span>Masukan Keranjang</span>
        </button>
    </li>
</form>
