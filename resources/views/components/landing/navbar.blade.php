<div
    class="w-full z-[999] @if (!in_array(Request::segment(1), [''])) {{ 'bg-white border border-b-2 shadow-sm' }} @else{{ 'bg-gradient-to-b from-[rgba(0,0,0,0.4)] via-[rgba(0,0,0,0.2)] to-[rgba(0,0,0,0)]' }} @endif fixed top-0 left-0">

    <nav class="px-5 md:px-24 xl:px-44">
        <div class="max-w-screen-xl relative flex flex-wrap items-center justify-between mx-auto py-4">
            <a href="/" class="flex items-center p-0 lg:pr-14">
                <span
                    class=" text-2xl font-main @if (!in_array(Request::segment(1), [''])) {{ 'text-primary' }} @else{{ 'text-gray-200 hover:text-white' }} @endif tracking-widest font-bold whitespace-nowrap dark:text-white">Bakeru</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <div
                    class="flex items-center justify-between fill-current @if (!in_array(Request::segment(1), [''])) {{ 'text-primary' }} @else{{ 'text-gray-200' }} @endif">
                    <svg width="24" height="24" viewBox="0 0 28 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
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

                    <button type="button"
                        class="flex ml-5 text-sm bg-gray-800 rounded-full md:me-0 focus:ring-2 focus:ring-primary dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full object-cover" src="{{ asset('images/team/1.jpg') }}"
                            alt="user photo">
                    </button>
                    {{-- <button type="submit"
                        class="text-white text-base bg-primary tracking-wide ml-6 hover:bg-primary-hover font-normal rounded-full px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" class="mr-2"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-outside-1_470_5810" maskUnits="userSpaceOnUse" x="1.5" y="8.375"
                                width="13" height="3" fill="black">
                                <rect fill="white" x="1.5" y="8.375" width="13" height="3" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.1592 10.625H3.125C2.78 10.625 2.5 10.345 2.5 10C2.5 9.655 2.78 9.375 3.125 9.375H13.1592C13.5042 9.375 13.7842 9.655 13.7842 10C13.7842 10.345 13.5042 10.625 13.1592 10.625" />
                            </mask>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.1592 10.625H3.125C2.78 10.625 2.5 10.345 2.5 10C2.5 9.655 2.78 9.375 3.125 9.375H13.1592C13.5042 9.375 13.7842 9.655 13.7842 10C13.7842 10.345 13.5042 10.625 13.1592 10.625"
                                fill="white" />
                            <path
                                d="M13.1592 10.425H3.125V10.825H13.1592V10.425ZM3.125 10.425C2.89046 10.425 2.7 10.2345 2.7 10H2.3C2.3 10.4555 2.66954 10.825 3.125 10.825V10.425ZM2.7 10C2.7 9.76546 2.89046 9.575 3.125 9.575V9.175C2.66954 9.175 2.3 9.54454 2.3 10H2.7ZM3.125 9.575H13.1592V9.175H3.125V9.575ZM13.1592 9.575C13.3937 9.575 13.5842 9.76546 13.5842 10H13.9842C13.9842 9.54454 13.6146 9.175 13.1592 9.175V9.575ZM13.5842 10C13.5842 10.2345 13.3937 10.425 13.1592 10.425V10.825C13.6146 10.825 13.9842 10.4555 13.9842 10H13.5842Z"
                                fill="white" mask="url(#path-1-outside-1_470_5810)" />
                            <mask id="path-3-outside-2_470_5810" maskUnits="userSpaceOnUse" x="9.09473" y="5.94531"
                                width="5" height="8" fill="black">
                                <rect fill="white" x="9.09473" y="5.94531" width="5" height="8" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M10.7195 13.0543C10.5595 13.0543 10.3987 12.9934 10.277 12.8701C10.0329 12.6251 10.0345 12.2301 10.2787 11.9868L12.2737 10.0001L10.2787 8.0126C10.0345 7.76927 10.0329 7.37427 10.277 7.12927C10.5212 6.88427 10.9162 6.88427 11.1604 7.1276L13.6012 9.5576C13.7195 9.67427 13.7854 9.83427 13.7854 10.0001C13.7854 10.1659 13.7195 10.3259 13.6012 10.4426L11.1604 12.8718C11.0387 12.9934 10.8787 13.0543 10.7195 13.0543" />
                            </mask>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M10.7195 13.0543C10.5595 13.0543 10.3987 12.9934 10.277 12.8701C10.0329 12.6251 10.0345 12.2301 10.2787 11.9868L12.2737 10.0001L10.2787 8.0126C10.0345 7.76927 10.0329 7.37427 10.277 7.12927C10.5212 6.88427 10.9162 6.88427 11.1604 7.1276L13.6012 9.5576C13.7195 9.67427 13.7854 9.83427 13.7854 10.0001C13.7854 10.1659 13.7195 10.3259 13.6012 10.4426L11.1604 12.8718C11.0387 12.9934 10.8787 13.0543 10.7195 13.0543"
                                fill="white" />
                            <path
                                d="M10.277 12.8701L10.4194 12.7296L10.4187 12.7289L10.277 12.8701ZM10.2787 11.9868L10.1376 11.8451L10.1375 11.8451L10.2787 11.9868ZM12.2737 10.0001L12.4148 10.1418L12.5571 10.0001L12.4148 9.85842L12.2737 10.0001ZM10.2787 8.0126L10.1375 8.15427L10.1375 8.15429L10.2787 8.0126ZM11.1604 7.1276L11.0192 7.26927L11.0192 7.26934L11.1604 7.1276ZM13.6012 9.5576L13.4601 9.69934L13.4608 9.70003L13.6012 9.5576ZM13.6012 10.4426L13.4608 10.3002L13.4601 10.3008L13.6012 10.4426ZM11.1604 12.8718L11.0193 12.73L11.0189 12.7303L11.1604 12.8718ZM10.7195 12.8543C10.61 12.8543 10.5014 12.8128 10.4194 12.7296L10.1346 13.0106C10.296 13.1741 10.509 13.2543 10.7195 13.2543V12.8543ZM10.4187 12.7289C10.2527 12.5624 10.2537 12.294 10.4199 12.1284L10.1375 11.8451C9.81534 12.1662 9.81298 12.6878 10.1354 13.0113L10.4187 12.7289ZM10.4198 12.1285L12.4148 10.1418L12.1326 9.85839L10.1376 11.8451L10.4198 12.1285ZM12.4148 9.85842L10.4198 7.87092L10.1375 8.15429L12.1325 10.1418L12.4148 9.85842ZM10.4199 7.87094C10.2537 7.70534 10.2527 7.43697 10.4187 7.27045L10.1354 6.98809C9.81298 7.31157 9.81534 7.8332 10.1375 8.15427L10.4199 7.87094ZM10.4187 7.27045C10.5848 7.1038 10.8531 7.1038 11.0192 7.26927L11.3015 6.98594C10.9792 6.66474 10.4576 6.66475 10.1354 6.98809L10.4187 7.27045ZM11.0192 7.26934L13.4601 9.69934L13.7423 9.41587L11.3015 6.98587L11.0192 7.26934ZM13.4608 9.70003C13.5404 9.77851 13.5854 9.88696 13.5854 10.0001H13.9854C13.9854 9.78159 13.8987 9.57003 13.7416 9.41518L13.4608 9.70003ZM13.5854 10.0001C13.5854 10.1133 13.5404 10.2217 13.4608 10.3002L13.7416 10.585C13.8987 10.4302 13.9854 10.2186 13.9854 10.0001H13.5854ZM13.4601 10.3008L11.0193 12.73L11.3014 13.0135L13.7423 10.5844L13.4601 10.3008ZM11.0189 12.7303C10.9364 12.8129 10.8279 12.8543 10.7195 12.8543V13.2543C10.9294 13.2543 11.141 13.174 11.3018 13.0132L11.0189 12.7303Z"
                                fill="white" mask="url(#path-3-outside-2_470_5810)" />
                            <mask id="path-5-outside-3_470_5810" maskUnits="userSpaceOnUse" x="5.44434" y="0.666748"
                                width="13" height="18" fill="black">
                                <rect fill="white" x="5.44434" y="0.666748" width="13" height="18" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14.2018 18.3334H10.131C8.0985 18.3334 6.44434 16.6792 6.44434 14.6459V13.8609C6.44434 13.5159 6.72434 13.2359 7.06934 13.2359C7.41434 13.2359 7.69434 13.5159 7.69434 13.8609V14.6459C7.69434 15.9892 8.78767 17.0834 10.131 17.0834H14.2018C15.551 17.0834 16.6485 15.9867 16.6485 14.6367V5.35425C16.6485 4.01091 15.5543 2.91675 14.211 2.91675H10.1402C8.79184 2.91675 7.69434 4.01341 7.69434 5.36175V6.13925C7.69434 6.48425 7.41434 6.76425 7.06934 6.76425C6.72434 6.76425 6.44434 6.48425 6.44434 6.13925V5.36175C6.44434 3.32425 8.10267 1.66675 10.1402 1.66675H14.211C16.2435 1.66675 17.8985 3.32091 17.8985 5.35425V14.6367C17.8985 16.6751 16.2393 18.3334 14.2018 18.3334" />
                            </mask>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.2018 18.3334H10.131C8.0985 18.3334 6.44434 16.6792 6.44434 14.6459V13.8609C6.44434 13.5159 6.72434 13.2359 7.06934 13.2359C7.41434 13.2359 7.69434 13.5159 7.69434 13.8609V14.6459C7.69434 15.9892 8.78767 17.0834 10.131 17.0834H14.2018C15.551 17.0834 16.6485 15.9867 16.6485 14.6367V5.35425C16.6485 4.01091 15.5543 2.91675 14.211 2.91675H10.1402C8.79184 2.91675 7.69434 4.01341 7.69434 5.36175V6.13925C7.69434 6.48425 7.41434 6.76425 7.06934 6.76425C6.72434 6.76425 6.44434 6.48425 6.44434 6.13925V5.36175C6.44434 3.32425 8.10267 1.66675 10.1402 1.66675H14.211C16.2435 1.66675 17.8985 3.32091 17.8985 5.35425V14.6367C17.8985 16.6751 16.2393 18.3334 14.2018 18.3334"
                                fill="white" />
                            <path
                                d="M14.2018 18.1334H10.131V18.5334H14.2018V18.1334ZM10.131 18.1334C8.20899 18.1334 6.64434 16.5688 6.64434 14.6459H6.24434C6.24434 16.7897 7.98802 18.5334 10.131 18.5334V18.1334ZM6.64434 14.6459V13.8609H6.24434V14.6459H6.64434ZM6.64434 13.8609C6.64434 13.6264 6.83479 13.4359 7.06934 13.4359V13.0359C6.61388 13.0359 6.24434 13.4055 6.24434 13.8609H6.64434ZM7.06934 13.4359C7.30388 13.4359 7.49434 13.6264 7.49434 13.8609H7.89434C7.89434 13.4055 7.52479 13.0359 7.06934 13.0359V13.4359ZM7.49434 13.8609V14.6459H7.89434V13.8609H7.49434ZM7.49434 14.6459C7.49434 16.0996 8.67712 17.2834 10.131 17.2834V16.8834C8.89822 16.8834 7.89434 15.8789 7.89434 14.6459H7.49434ZM10.131 17.2834H14.2018V16.8834H10.131V17.2834ZM14.2018 17.2834C15.6614 17.2834 16.8485 16.0973 16.8485 14.6367H16.4485C16.4485 15.8762 15.4406 16.8834 14.2018 16.8834V17.2834ZM16.8485 14.6367V5.35425H16.4485V14.6367H16.8485ZM16.8485 5.35425C16.8485 3.90046 15.6648 2.71675 14.211 2.71675V3.11675C15.4439 3.11675 16.4485 4.12137 16.4485 5.35425H16.8485ZM14.211 2.71675H10.1402V3.11675H14.211V2.71675ZM10.1402 2.71675C8.68147 2.71675 7.49434 3.90287 7.49434 5.36175H7.89434C7.89434 4.12396 8.9022 3.11675 10.1402 3.11675V2.71675ZM7.49434 5.36175V6.13925H7.89434V5.36175H7.49434ZM7.49434 6.13925C7.49434 6.37379 7.30388 6.56425 7.06934 6.56425V6.96425C7.52479 6.96425 7.89434 6.59471 7.89434 6.13925H7.49434ZM7.06934 6.56425C6.83479 6.56425 6.64434 6.37379 6.64434 6.13925H6.24434C6.24434 6.59471 6.61388 6.96425 7.06934 6.96425V6.56425ZM6.64434 6.13925V5.36175H6.24434V6.13925H6.64434ZM6.64434 5.36175C6.64434 3.43476 8.21307 1.86675 10.1402 1.86675V1.46675C7.99227 1.46675 6.24434 3.21373 6.24434 5.36175H6.64434ZM10.1402 1.86675H14.211V1.46675H10.1402V1.86675ZM14.211 1.86675C16.1331 1.86675 17.6985 3.4314 17.6985 5.35425H18.0985C18.0985 3.21043 16.3539 1.46675 14.211 1.46675V1.86675ZM17.6985 5.35425V14.6367H18.0985V5.35425H17.6985ZM17.6985 14.6367C17.6985 16.5646 16.1289 18.1334 14.2018 18.1334V18.5334C16.3498 18.5334 18.0985 16.7856 18.0985 14.6367H17.6985Z"
                                fill="white" mask="url(#path-5-outside-3_470_5810)" />
                        </svg>
                        Login
                    </button> --}}
                </div>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base max-w-56 list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-base font-medium text-dark-primary dark:text-white">Hy, Yogi
                            Pradnyana</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        {{-- <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-medium text-primary hover:bg-gray-100">Dashboard</a>
                        </li> --}}
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-medium text-primary hover:bg-gray-100">Pesanan</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-medium text-primary hover:bg-gray-100">Akun</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-medium text-primary hover:bg-gray-100">Alamat</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm font-medium text-primary hover:bg-gray-100">Sign Out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center fill-current text-sm @if (!in_array(Request::segment(1), [''])) {{ 'text-primary' }} @else{{ 'text-gray-200' }} @endif  rounded-lg md:hidden dark:text-gray-400"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="md:items-center absolute top-20 md:static md:justify-between hidden w-full md:flex md:w-auto md:order-1 bg-[#F1E1C6] bg-opacity-80 rounded-lg mt-2 md:rounded-none md:mt-0 md:bg-transparent"
                id="navbar-user">
                <ul
                    class="flex flex-col text-base tracking-wide p-4 md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 ">
                    <li>
                        <a href="{{ route('landing-page') }}"
                            class="block py-2 px-3 font-normal text-dark-primary @if (!in_array(Request::segment(1), [''])) {{ 'md:text-primary md:hover:text-opacity-80' }} @else{{ 'md:text-gray-200 md:hover:text-white' }} @endif  @if (in_array(Request::segment(1), [''])) {{ 'bg-primary text-white' }} @endif rounded md:bg-transparent md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('produk') }}"
                            class="block py-2 px-3 text-dark-primary font-normal @if (!in_array(Request::segment(1), [''])) {{ 'md:text-primary md:hover:text-opacity-80' }} @else{{ 'md:text-gray-200 md:hover:text-white' }} @endif @if (in_array(Request::segment(1), ['produk'])) {{ 'bg-primary text-white' }} @endif rounded md:bg-transparent md:p-0">Produk</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 px-3 text-dark-primary font-normal @if (!in_array(Request::segment(1), [''])) {{ 'md:text-primary md:hover:text-opacity-80' }} @else{{ 'md:text-gray-200 md:hover:text-white' }} @endif @if (in_array(Request::segment(1), ['about'])) {{ 'bg-primary text-white' }} @endif rounded md:bg-transparent md:p-0">Tentang
                            Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}"
                            class="block py-2 px-3 text-dark-primary font-normal @if (!in_array(Request::segment(1), [''])) {{ 'md:text-primary md:hover:text-opacity-80' }} @else{{ 'md:text-gray-200 md:hover:text-white' }} @endif @if (in_array(Request::segment(1), ['contact'])) {{ 'bg-primary text-white' }} @endif rounded md:bg-transparent md:p-0">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
