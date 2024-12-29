<x-guest-layout>
    <section id="account" class="px-5 md:px-24 xl:px-44 w-full pt-[96px] pb-10 bg-white">
        <div class="flex gap-2">
            <x-landing.my-account.sidebar />
            <div class="p-0 lg:pl-4 lg:py-4 w-full">
                <h1 class="text-2xl md:text-3xl text-dark-primary dark:text-gray-100 font-bold mb-5">Akun</h1>
                <div class="flex flex-col gap-8">
                    <div class="flex gap-8 flex-col xs:flex-row w-full">
                        @livewire('my-account.form-user-image')
                        <div class="flex flex-col flex-grow">
                            <h5 class="mb-5 text-base text-dark-primary font-semibold">Pengaturan Profil</h5>

                            @livewire('my-account.FormProfil')

                        </div>
                    </div>
                    <div class="flex gap-8 flex-col xs:flex-row w-full">
                        <div class="flex flex-col basis-full xs:basis-48 sm:basis-[280px]">
                            <h3 class="text-dark-primary font-semibold mb-1">Ganti Password</h3>
                            <p class="text-sm sm:text-base text-dark-secondary">Pastikan akun Anda menggunakan kata
                                sandi yang
                                panjang dan acak untuk tetap aman.</p>
                        </div>
                        <div class="flex flex-col flex-grow">
                            <form action="">
                                <div class="mb-5">
                                    <label for="currPass"
                                        class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Password
                                        Saat Ini</label>
                                    <input type="text" id="currPass"
                                        class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="newPass"
                                        class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Password
                                        Baru</label>
                                    <input type="email" id="newPass"
                                        class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                        required />
                                </div>
                                <div class="mb-5">
                                    <label for="confirmPass"
                                        class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Konfirmasi
                                        Password</label>
                                    <input type="text" id="confirmPass"
                                        class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                        required />
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="text-white text-sm sm:text-base bg-primary hover:bg-primary-hover rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                                        Ubah
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
