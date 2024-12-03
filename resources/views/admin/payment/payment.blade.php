<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="sm:flex sm:justify-between sm:items-center mb-6">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-dark-primary dark:text-gray-100 font-bold">Metode Pembayaran</h1>
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
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="ms-1 text-sm font-medium text-dark-secondary md:ms-2 dark:text-gray-400">Metode
                                    Pembayaran
                                </span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>



        <!-- Cards -->

        <div class="p-5 bg-white dark:bg-gray-900 antialiased relative overflow-x-auto shadow-sm sm:rounded-lg">
            <div class="mb-4 bg-white dark:bg-gray-900 sm:flex sm:justify-between sm:items-center">
                <div class="mb-4 sm:mb-0">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative mt-1">
                        <div
                            class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-dark-secondary dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block pt-2 ps-10 text-sm text-dark-primary border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 placeholder-dark-secondary dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                            placeholder="Cari metode pembayaran...">
                    </div>
                </div>
                <div class="mb-4 sm:mb-0">
                    <a href="{{ route('payment-method.create') }}"
                        class="text-white bg-primary hover:bg-primary-hoverfont-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover">
                        <svg class="me-2" width="12" height="12" viewBox="0 0 10 10" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M4.75 9.15427C4.336 9.15427 4 8.81827 4 8.40427V1.07727C4 0.663271 4.336 0.327271 4.75 0.327271C5.164 0.327271 5.5 0.663271 5.5 1.07727V8.40427C5.5 8.81827 5.164 9.15427 4.75 9.15427"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.4165 5.49023H1.0835C0.668496 5.49023 0.333496 5.15423 0.333496 4.74023C0.333496 4.32623 0.668496 3.99023 1.0835 3.99023H8.4165C8.8305 3.99023 9.1665 4.32623 9.1665 4.74023C9.1665 5.15423 8.8305 5.49023 8.4165 5.49023"
                                fill="white" />
                        </svg>
                        Metode Baru
                    </a>
                </div>
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-dark-secondary dark:text-gray-400 mb-4">
                <thead
                    class="text-xs font-semibold text-dark-primary uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Metode pembayaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            is active
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class=" text-dark-secondary bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="w-4 p-4 text-center">
                            1
                        </td>
                        <th scope="row"
                            class="px-6 py-4 font-semibold text-dark-primary whitespace-nowrap dark:text-white">
                            BCA (Bank Central Asia)
                        </th>
                        <td class="px-6 py-4">
                            {{-- Active --}}
                            <svg width="24" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.3315 3.5C5.8015 3.5 4.1665 5.233 4.1665 7.916V16.084C4.1665 18.767 5.8015 20.5 8.3315 20.5H16.9995C19.5305 20.5 21.1665 18.767 21.1665 16.084V7.916C21.1665 5.233 19.5305 3.5 17.0005 3.5H8.3315ZM16.9995 22H8.3315C4.9425 22 2.6665 19.622 2.6665 16.084V7.916C2.6665 4.378 4.9425 2 8.3315 2H17.0005C20.3895 2 22.6665 4.378 22.6665 7.916V16.084C22.6665 19.622 20.3895 22 16.9995 22Z"
                                    fill="#0E9F6E" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.7903 15.2457C11.5993 15.2457 11.4063 15.1727 11.2603 15.0258L8.88625 12.6528C8.59325 12.3598 8.59325 11.8858 8.88625 11.5928C9.17925 11.2998 9.65325 11.2998 9.94625 11.5928L11.7903 13.4348L16.0063 9.21975C16.2993 8.92675 16.7733 8.92675 17.0663 9.21975C17.3593 9.51275 17.3593 9.98675 17.0663 10.2797L12.3203 15.0258C12.1743 15.1727 11.9823 15.2457 11.7903 15.2457Z"
                                    fill="#0E9F6E" />
                            </svg>
                            {{-- Deactive --}}
                            {{-- <svg width="24" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.2688 15.1365C10.0768 15.1365 9.88479 15.0635 9.73879 14.9165C9.44579 14.6235 9.44579 14.1495 9.73879 13.8565L14.5308 9.06448C14.8238 8.77148 15.2978 8.77148 15.5908 9.06448C15.8838 9.35748 15.8838 9.83148 15.5908 10.1245L10.7988 14.9165C10.6528 15.0635 10.4608 15.1365 10.2688 15.1365Z"
                                    fill="#E02424" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.0628 15.1395C14.8708 15.1395 14.6788 15.0665 14.5328 14.9195L9.73684 10.1225C9.44384 9.82952 9.44384 9.35552 9.73684 9.06252C10.0308 8.76952 10.5048 8.76952 10.7968 9.06252L15.5928 13.8595C15.8858 14.1525 15.8858 14.6265 15.5928 14.9195C15.4468 15.0665 15.2538 15.1395 15.0628 15.1395Z"
                                    fill="#E02424" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.3315 3.5C5.8015 3.5 4.1665 5.233 4.1665 7.916V16.084C4.1665 18.767 5.8015 20.5 8.3315 20.5H16.9995C19.5305 20.5 21.1665 18.767 21.1665 16.084V7.916C21.1665 5.233 19.5305 3.5 17.0005 3.5H8.3315ZM16.9995 22H8.3315C4.9425 22 2.6665 19.622 2.6665 16.084V7.916C2.6665 4.378 4.9425 2 8.3315 2H17.0005C20.3895 2 22.6665 4.378 22.6665 7.916V16.084C22.6665 19.622 20.3895 22 16.9995 22Z"
                                    fill="#E02424" />
                            </svg> --}}


                        </td>
                        <td class="flex items-center px-6 py-4">
                            <a href="{{ route('payment-method.edit') }}"
                                class="font-medium bg-yellow-300 p-2 rounded-md hover:underline"><svg width="18"
                                    height="18" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.5771 22.3686H7.75312C4.31212 22.3686 2.00012 19.9536 2.00012 16.3596V8.04562C2.00012 4.45162 4.31212 2.03662 7.75312 2.03662H11.4921C11.9061 2.03662 12.2421 2.37262 12.2421 2.78662C12.2421 3.20062 11.9061 3.53662 11.4921 3.53662H7.75312C5.16912 3.53662 3.50012 5.30662 3.50012 8.04562V16.3596C3.50012 19.0986 5.16912 20.8686 7.75312 20.8686H16.5771C19.1611 20.8686 20.8311 19.0986 20.8311 16.3596V12.3316C20.8311 11.9176 21.1671 11.5816 21.5811 11.5816C21.9951 11.5816 22.3311 11.9176 22.3311 12.3316V16.3596C22.3311 19.9536 20.0181 22.3686 16.5771 22.3686Z"
                                        fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.86774 15.4282H11.8447C12.2247 15.4282 12.5807 15.2812 12.8497 15.0122L20.3587 7.50324C20.6667 7.19524 20.8367 6.78524 20.8367 6.34924C20.8367 5.91224 20.6667 5.50124 20.3587 5.19324L19.1417 3.97624C18.5047 3.34124 17.4687 3.34124 16.8307 3.97624L9.35774 11.4492C9.09874 11.7082 8.95174 12.0522 8.94274 12.4172L8.86774 15.4282ZM11.8447 16.9282H8.09874C7.89674 16.9282 7.70274 16.8462 7.56174 16.7012C7.42074 16.5572 7.34374 16.3622 7.34874 16.1592L7.44274 12.3802C7.46174 11.6282 7.76474 10.9212 8.29674 10.3882H8.29774L15.7707 2.91524C16.9927 1.69524 18.9797 1.69524 20.2017 2.91524L21.4187 4.13224C22.0117 4.72424 22.3377 5.51124 22.3367 6.34924C22.3367 7.18724 22.0107 7.97324 21.4187 8.56424L13.9097 16.0732C13.3587 16.6242 12.6247 16.9282 11.8447 16.9282Z"
                                        fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.731 9.9166C19.539 9.9166 19.347 9.8436 19.201 9.6966L14.635 5.1306C14.342 4.8376 14.342 4.3626 14.635 4.0696C14.928 3.7766 15.402 3.7766 15.695 4.0696L20.261 8.6366C20.554 8.9296 20.554 9.4036 20.261 9.6966C20.115 9.8436 19.923 9.9166 19.731 9.9166Z"
                                        fill="black" />
                                </svg>
                            </a>
                            <a href="#" class="font-medium bg-red-600 p-2 rounded-md hover:underline ms-3"><svg
                                    width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.8626 20.2804C10.5076 20.2804 9.18656 20.2654 7.87957 20.2384C6.20756 20.2054 5.05057 19.1214 4.86156 17.4094C4.54656 14.5694 4.00756 7.87542 4.00256 7.80842C3.96856 7.39542 4.27657 7.03342 4.68957 7.00042C5.09657 6.98942 5.46457 7.27542 5.49757 7.68742C5.50257 7.75542 6.04057 14.4264 6.35257 17.2444C6.45957 18.2174 6.98456 18.7194 7.91056 18.7384C10.4106 18.7914 12.9616 18.7944 15.7116 18.7444C16.6956 18.7254 17.2276 18.2334 17.3376 17.2374C17.6476 14.4434 18.1876 7.75542 18.1936 7.68742C18.2266 7.27542 18.5916 6.98742 19.0006 7.00042C19.4136 7.03442 19.7216 7.39542 19.6886 7.80842C19.6826 7.87642 19.1406 14.5874 18.8286 17.4024C18.6346 19.1494 17.4806 20.2124 15.7386 20.2444C14.4056 20.2674 13.1196 20.2804 11.8626 20.2804Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.708 6.98926H3.75C3.336 6.98926 3 6.65326 3 6.23926C3 5.82526 3.336 5.48926 3.75 5.48926H20.708C21.122 5.48926 21.458 5.82526 21.458 6.23926C21.458 6.65326 21.122 6.98926 20.708 6.98926Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.4405 6.98924C16.3025 6.98924 15.3145 6.17824 15.0905 5.06224L14.8475 3.84624C14.7965 3.66124 14.5855 3.50024 14.3455 3.50024H10.1125C9.87246 3.50024 9.66146 3.66124 9.60046 3.89224L9.36746 5.06224C9.14446 6.17824 8.15546 6.98924 7.01746 6.98924C6.60346 6.98924 6.26746 6.65324 6.26746 6.23924C6.26746 5.82524 6.60346 5.48924 7.01746 5.48924C7.44346 5.48924 7.81346 5.18524 7.89746 4.76724L8.14046 3.55124C8.38746 2.61924 9.19446 2.00024 10.1125 2.00024H14.3455C15.2635 2.00024 16.0705 2.61924 16.3075 3.50624L16.5615 4.76724C16.6445 5.18524 17.0145 5.48924 17.4405 5.48924C17.8545 5.48924 18.1905 5.82524 18.1905 6.23924C18.1905 6.65324 17.8545 6.98924 17.4405 6.98924Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr class=" text-dark-secondary bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="w-4 p-4 text-center">
                            2
                        </td>
                        <th scope="row"
                            class="px-6 py-4 font-semibold text-dark-primary whitespace-nowrap dark:text-white">
                            COD (Cash On Delivery)
                        </th>
                        <td class="px-6 py-4">
                            {{-- Active --}}
                            <svg width="24" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.3315 3.5C5.8015 3.5 4.1665 5.233 4.1665 7.916V16.084C4.1665 18.767 5.8015 20.5 8.3315 20.5H16.9995C19.5305 20.5 21.1665 18.767 21.1665 16.084V7.916C21.1665 5.233 19.5305 3.5 17.0005 3.5H8.3315ZM16.9995 22H8.3315C4.9425 22 2.6665 19.622 2.6665 16.084V7.916C2.6665 4.378 4.9425 2 8.3315 2H17.0005C20.3895 2 22.6665 4.378 22.6665 7.916V16.084C22.6665 19.622 20.3895 22 16.9995 22Z"
                                    fill="#0E9F6E" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.7903 15.2457C11.5993 15.2457 11.4063 15.1727 11.2603 15.0258L8.88625 12.6528C8.59325 12.3598 8.59325 11.8858 8.88625 11.5928C9.17925 11.2998 9.65325 11.2998 9.94625 11.5928L11.7903 13.4348L16.0063 9.21975C16.2993 8.92675 16.7733 8.92675 17.0663 9.21975C17.3593 9.51275 17.3593 9.98675 17.0663 10.2797L12.3203 15.0258C12.1743 15.1727 11.9823 15.2457 11.7903 15.2457Z"
                                    fill="#0E9F6E" />
                            </svg>
                            {{-- Deactive --}}
                            {{-- <svg width="24" height="24" viewBox="0 0 25 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.2688 15.1365C10.0768 15.1365 9.88479 15.0635 9.73879 14.9165C9.44579 14.6235 9.44579 14.1495 9.73879 13.8565L14.5308 9.06448C14.8238 8.77148 15.2978 8.77148 15.5908 9.06448C15.8838 9.35748 15.8838 9.83148 15.5908 10.1245L10.7988 14.9165C10.6528 15.0635 10.4608 15.1365 10.2688 15.1365Z"
                                    fill="#E02424" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.0628 15.1395C14.8708 15.1395 14.6788 15.0665 14.5328 14.9195L9.73684 10.1225C9.44384 9.82952 9.44384 9.35552 9.73684 9.06252C10.0308 8.76952 10.5048 8.76952 10.7968 9.06252L15.5928 13.8595C15.8858 14.1525 15.8858 14.6265 15.5928 14.9195C15.4468 15.0665 15.2538 15.1395 15.0628 15.1395Z"
                                    fill="#E02424" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.3315 3.5C5.8015 3.5 4.1665 5.233 4.1665 7.916V16.084C4.1665 18.767 5.8015 20.5 8.3315 20.5H16.9995C19.5305 20.5 21.1665 18.767 21.1665 16.084V7.916C21.1665 5.233 19.5305 3.5 17.0005 3.5H8.3315ZM16.9995 22H8.3315C4.9425 22 2.6665 19.622 2.6665 16.084V7.916C2.6665 4.378 4.9425 2 8.3315 2H17.0005C20.3895 2 22.6665 4.378 22.6665 7.916V16.084C22.6665 19.622 20.3895 22 16.9995 22Z"
                                    fill="#E02424" />
                            </svg> --}}


                        </td>
                        <td class="flex items-center px-6 py-4">
                            <a href="{{ route('payment-method.edit') }}"
                                class="font-medium bg-yellow-300 p-2 rounded-md hover:underline"><svg width="18"
                                    height="18" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.5771 22.3686H7.75312C4.31212 22.3686 2.00012 19.9536 2.00012 16.3596V8.04562C2.00012 4.45162 4.31212 2.03662 7.75312 2.03662H11.4921C11.9061 2.03662 12.2421 2.37262 12.2421 2.78662C12.2421 3.20062 11.9061 3.53662 11.4921 3.53662H7.75312C5.16912 3.53662 3.50012 5.30662 3.50012 8.04562V16.3596C3.50012 19.0986 5.16912 20.8686 7.75312 20.8686H16.5771C19.1611 20.8686 20.8311 19.0986 20.8311 16.3596V12.3316C20.8311 11.9176 21.1671 11.5816 21.5811 11.5816C21.9951 11.5816 22.3311 11.9176 22.3311 12.3316V16.3596C22.3311 19.9536 20.0181 22.3686 16.5771 22.3686Z"
                                        fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.86774 15.4282H11.8447C12.2247 15.4282 12.5807 15.2812 12.8497 15.0122L20.3587 7.50324C20.6667 7.19524 20.8367 6.78524 20.8367 6.34924C20.8367 5.91224 20.6667 5.50124 20.3587 5.19324L19.1417 3.97624C18.5047 3.34124 17.4687 3.34124 16.8307 3.97624L9.35774 11.4492C9.09874 11.7082 8.95174 12.0522 8.94274 12.4172L8.86774 15.4282ZM11.8447 16.9282H8.09874C7.89674 16.9282 7.70274 16.8462 7.56174 16.7012C7.42074 16.5572 7.34374 16.3622 7.34874 16.1592L7.44274 12.3802C7.46174 11.6282 7.76474 10.9212 8.29674 10.3882H8.29774L15.7707 2.91524C16.9927 1.69524 18.9797 1.69524 20.2017 2.91524L21.4187 4.13224C22.0117 4.72424 22.3377 5.51124 22.3367 6.34924C22.3367 7.18724 22.0107 7.97324 21.4187 8.56424L13.9097 16.0732C13.3587 16.6242 12.6247 16.9282 11.8447 16.9282Z"
                                        fill="black" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.731 9.9166C19.539 9.9166 19.347 9.8436 19.201 9.6966L14.635 5.1306C14.342 4.8376 14.342 4.3626 14.635 4.0696C14.928 3.7766 15.402 3.7766 15.695 4.0696L20.261 8.6366C20.554 8.9296 20.554 9.4036 20.261 9.6966C20.115 9.8436 19.923 9.9166 19.731 9.9166Z"
                                        fill="black" />
                                </svg>
                            </a>
                            <a href="#" class="font-medium bg-red-600 p-2 rounded-md hover:underline ms-3"><svg
                                    width="20" height="20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.8626 20.2804C10.5076 20.2804 9.18656 20.2654 7.87957 20.2384C6.20756 20.2054 5.05057 19.1214 4.86156 17.4094C4.54656 14.5694 4.00756 7.87542 4.00256 7.80842C3.96856 7.39542 4.27657 7.03342 4.68957 7.00042C5.09657 6.98942 5.46457 7.27542 5.49757 7.68742C5.50257 7.75542 6.04057 14.4264 6.35257 17.2444C6.45957 18.2174 6.98456 18.7194 7.91056 18.7384C10.4106 18.7914 12.9616 18.7944 15.7116 18.7444C16.6956 18.7254 17.2276 18.2334 17.3376 17.2374C17.6476 14.4434 18.1876 7.75542 18.1936 7.68742C18.2266 7.27542 18.5916 6.98742 19.0006 7.00042C19.4136 7.03442 19.7216 7.39542 19.6886 7.80842C19.6826 7.87642 19.1406 14.5874 18.8286 17.4024C18.6346 19.1494 17.4806 20.2124 15.7386 20.2444C14.4056 20.2674 13.1196 20.2804 11.8626 20.2804Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M20.708 6.98926H3.75C3.336 6.98926 3 6.65326 3 6.23926C3 5.82526 3.336 5.48926 3.75 5.48926H20.708C21.122 5.48926 21.458 5.82526 21.458 6.23926C21.458 6.65326 21.122 6.98926 20.708 6.98926Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M17.4405 6.98924C16.3025 6.98924 15.3145 6.17824 15.0905 5.06224L14.8475 3.84624C14.7965 3.66124 14.5855 3.50024 14.3455 3.50024H10.1125C9.87246 3.50024 9.66146 3.66124 9.60046 3.89224L9.36746 5.06224C9.14446 6.17824 8.15546 6.98924 7.01746 6.98924C6.60346 6.98924 6.26746 6.65324 6.26746 6.23924C6.26746 5.82524 6.60346 5.48924 7.01746 5.48924C7.44346 5.48924 7.81346 5.18524 7.89746 4.76724L8.14046 3.55124C8.38746 2.61924 9.19446 2.00024 10.1125 2.00024H14.3455C15.2635 2.00024 16.0705 2.61924 16.3075 3.50624L16.5615 4.76724C16.6445 5.18524 17.0145 5.48924 17.4405 5.48924C17.8545 5.48924 18.1905 5.82524 18.1905 6.23924C18.1905 6.65324 17.8545 6.98924 17.4405 6.98924Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="flex sm:flex-row flex-col items-center justify-between">
                <!-- Help text -->
                <span class="text-sm text-dark-secondary dark:text-gray-400">
                    Showing <span class="font-semibold text-dark-primary dark:text-white">1</span> to <span
                        class="font-semibold text-dark-primary dark:text-white">10</span> of <span
                        class="font-semibold text-dark-primary dark:text-white">100</span> Entries
                </span>
                <!-- Buttons -->
                <div class="inline-flex mt-2 xs:mt-0">
                    <button
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-dark-primary rounded-s hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4" />
                        </svg>
                        Prev
                    </button>
                    <button
                        class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-dark-primary border-0 border-s border-gray-700 rounded-e hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        Next
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
