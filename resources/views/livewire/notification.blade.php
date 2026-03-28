<div wire:poll.keep-alive.5s>
    <div class="relative inline-flex" x-data="{ open: false }">
        <button
            class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 lg:hover:bg-gray-200 dark:hover:bg-gray-700/50 dark:lg:hover:bg-gray-800 rounded-full"
            :class="{ 'bg-gray-200 dark:bg-gray-800': open }" aria-haspopup="true" @click.prevent="open = !open"
            :aria-expanded="open">
            <span class="sr-only">Notifications</span>
            {{-- <svg class="fill-current text-gray-500/80 dark:text-gray-400/80" width="16" height="16" viewBox="0 0 16 16"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M7 0a7 7 0 0 0-7 7c0 1.202.308 2.33.84 3.316l-.789 2.368a1 1 0 0 0 1.265 1.265l2.595-.865a1 1 0 0 0-.632-1.898l-.698.233.3-.9a1 1 0 0 0-.104-.85A4.97 4.97 0 0 1 2 7a5 5 0 0 1 5-5 4.99 4.99 0 0 1 4.093 2.135 1 1 0 1 0 1.638-1.148A6.99 6.99 0 0 0 7 0Z" />
            <path
                d="M11 6a5 5 0 0 0 0 10c.807 0 1.567-.194 2.24-.533l1.444.482a1 1 0 0 0 1.265-1.265l-.482-1.444A4.962 4.962 0 0 0 16 11a5 5 0 0 0-5-5Zm-3 5a3 3 0 0 1 6 0c0 .588-.171 1.134-.466 1.6a1 1 0 0 0-.115.82 1 1 0 0 0-.82.114A2.973 2.973 0 0 1 11 14a3 3 0 0 1-3-3Z" />
        </svg> --}}
            <svg id="Notification" class="fill-current text-dark-primary" width="22" height="22" viewBox="0 0 24 24"
                version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <g stroke="none" stroke-width="1.5" fill="none" fill-rule="evenodd">
                    <g id="Notification" transform="translate(3.000000, 1.000000)" fill="currentColor">
                        <path
                            d="M7.3243,19.106 C7.8423,19.683 8.5073,20 9.1973,20 L9.1983,20 C9.8913,20 10.5593,19.683 11.0783,19.105 C11.3563,18.798 11.8303,18.773 12.1373,19.05 C12.4453,19.327 12.4703,19.802 12.1933,20.109 C11.3853,21.006 10.3223,21.5 9.1983,21.5 L9.1963,21.5 C8.0753,21.499 7.0143,21.005 6.2093,20.108 C5.9323,19.801 5.9573,19.326 6.2653,19.05 C6.5733,18.772 7.0473,18.797 7.3243,19.106 Z M9.2471,0 C13.6921,0 16.6781,3.462 16.6781,6.695 C16.6781,8.358 17.1011,9.063 17.5501,9.811 C17.9941,10.549 18.4971,11.387 18.4971,12.971 C18.1481,17.018 13.9231,17.348 9.2471,17.348 C4.5711,17.348 0.3451,17.018 8.66453236e-05,13.035 C-0.0029,11.387 0.5001,10.549 0.9441,9.811 L1.10084456,9.54715551 C1.48677474,8.88385813 1.8161,8.16235294 1.8161,6.695 C1.8161,3.462 4.8021,0 9.2471,0 Z M9.2471,1.5 C5.7521,1.5 3.3161,4.238 3.3161,6.695 C3.3161,8.774 2.7391,9.735 2.2291,10.583 C1.8201,11.264 1.4971,11.802 1.4971,12.971 C1.6641,14.857 2.9091,15.848 9.2471,15.848 C15.5501,15.848 16.8341,14.813 17.0001,12.906 C16.9971,11.802 16.6741,11.264 16.2651,10.583 C15.7551,9.735 15.1781,8.774 15.1781,6.695 C15.1781,4.238 12.7421,1.5 9.2471,1.5 Z"
                            id="Combined-Shape"></path>
                    </g>
                </g>
            </svg>
            @if ($notifications->count() > 0)
                <div
                    class="absolute top-0 right-0 w-2.5 h-2.5 bg-red-500 border-2 border-gray-100 dark:border-gray-900 rounded-full">
                </div>
            @endif
        </button>
        <div class="origin-top-right z-10 absolute top-full -mr-48 sm:mr-0 min-w-80 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 py-1.5 rounded-lg shadow-lg overflow-hidden mt-1 right-0"
            @click.outside="open = false" @keydown.escape.window="open = false" x-show="open"
            x-transition:enter="transition ease-out duration-200 transform"
            x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-out duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" x-cloak>
            <div class="text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase pt-1.5 pb-2 px-4">Notifications
            </div>

            {{-- <div class="absolute top-4 right-4 cursor-pointer w-4 h-4 flex justify-center items-center"
                @click="open = false" wire:click='markAsReadAll'>
                <svg width="10" height="10" viewBox="0 0 8 8" fill="currentColor"
                    class="fill-current text-dark-tertiary" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6.21967 0.21967C6.51256 -0.0732233 6.98744 -0.0732233 7.28033 0.21967C7.5466 0.485936 7.5708 0.9026 7.35295 1.19621L7.28033 1.28033L1.28033 7.28033C0.987437 7.57322 0.512563 7.57322 0.21967 7.28033C-0.0465966 7.01406 -0.0708027 6.5974 0.147052 6.30379L0.21967 6.21967L6.21967 0.21967Z"
                        fill="currentColor" />
                    <path
                        d="M0.21967 0.21967C0.485936 -0.0465966 0.9026 -0.0708027 1.19621 0.147052L1.28033 0.21967L7.28033 6.21967C7.57322 6.51256 7.57322 6.98744 7.28033 7.28033C7.01406 7.5466 6.5974 7.5708 6.30379 7.35295L6.21967 7.28033L0.21967 1.28033C-0.0732233 0.987437 -0.0732233 0.512563 0.21967 0.21967Z"
                        fill="currentColor" />
                </svg>
            </div> --}}
            <ul>
                @if ($notifications->count() > 0)
                    @foreach ($notifications as $notification)
                        <li class="border-b relative border-gray-200 dark:border-gray-700/60 last:border-0">
                            <div class="block py-2 px-4 hover:bg-gray-50 cursor-pointer dark:hover:bg-gray-700/20"
                                wire:click='goToDetail({{ $notification }})' @click="open = false" @focus="open = true"
                                @focusout="open = false">
                                <span
                                    class="block font-medium text-sm text-gray-800 dark:text-gray-100">{{ $notification->data['title'] }}</span>

                                <span class="block text-sm mb-2">{{ $notification->data['message'] }}</span>
                                <span
                                    class="block text-xs font-medium text-gray-400 dark:text-gray-500">{{ $notification->created_at->diffForHumans() }}</span>
                            </div>
                            <div class="absolute top-2 right-4 cursor-pointer w-4 h-4 flex justify-center items-center"
                                wire:click='markAsRead({{ $notification }})'>
                                <svg width="10" height="10" viewBox="0 0 8 8" fill="currentColor"
                                    class="fill-current text-dark-secondary" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.21967 0.21967C6.51256 -0.0732233 6.98744 -0.0732233 7.28033 0.21967C7.5466 0.485936 7.5708 0.9026 7.35295 1.19621L7.28033 1.28033L1.28033 7.28033C0.987437 7.57322 0.512563 7.57322 0.21967 7.28033C-0.0465966 7.01406 -0.0708027 6.5974 0.147052 6.30379L0.21967 6.21967L6.21967 0.21967Z"
                                        fill="currentColor" />
                                    <path
                                        d="M0.21967 0.21967C0.485936 -0.0465966 0.9026 -0.0708027 1.19621 0.147052L1.28033 0.21967L7.28033 6.21967C7.57322 6.51256 7.57322 6.98744 7.28033 7.28033C7.01406 7.5466 6.5974 7.5708 6.30379 7.35295L6.21967 7.28033L0.21967 1.28033C-0.0732233 0.987437 -0.0732233 0.512563 0.21967 0.21967Z"
                                        fill="currentColor" />
                                </svg>
                            </div>
                        </li>
                    @endforeach
                @else
                    <li
                        class="border-b border-gray-200 py-2 px-4 dark:border-gray-700/60 last:border-0 flex justify-center flex-col items-center gap-1">
                        <img src="{{ asset('images/icons/no-notification.png') }}" alt="empty-cart" class="w-12">
                        <p class="text-center text-base font-medium text-dark-secondary">Belum ada notifikasi</p>
                    </li>
                @endif

                {{-- <li class="border-b border-gray-200 dark:border-gray-700/60 last:border-0">
                <a class="block py-2 px-4 hover:bg-gray-50 dark:hover:bg-gray-700/20" href="#0"
                    @click="open = false" @focus="open = true" @focusout="open = false">
                    <span class="block text-sm mb-2">🚀<span class="font-medium text-gray-800 dark:text-gray-100">Say
                            goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt mollit anim.</span>
                    <span class="block text-xs font-medium text-gray-400 dark:text-gray-500">Jan 24, 2024</span>
                </a>
            </li> --}}
            </ul>
        </div>
    </div>
</div>
