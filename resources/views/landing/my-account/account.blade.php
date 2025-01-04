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

                            @livewire('my-account.form-profil')

                        </div>
                    </div>
                    <div
                        class="flex gap-8 flex-col xs:flex-row w-full {{ auth()->user()->role != 'customer' ? 'mt-10' : '' }}">
                        <div class="flex flex-col basis-full xs:basis-48 sm:basis-[280px]">
                            <h3 class="text-dark-primary font-semibold mb-1">Ganti Password</h3>
                            <p class="text-sm sm:text-base text-dark-secondary">Pastikan akun Anda menggunakan kata
                                sandi yang
                                panjang dan acak untuk tetap aman.</p>
                        </div>
                        <div class="flex flex-col flex-grow">
                            @livewire('my-account.form-reset-password')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
