<x-guest-layout>
    <section id="account" class="px-5 md:px-24 xl:px-44 w-full pt-[96px] pb-10 bg-white">
        <div class="flex gap-2">
            <x-landing.my-account.sidebar />
            <div class="p-0 lg:pl-4 lg:py-4 w-full">
                <h1 class="text-2xl md:text-3xl text-dark-primary dark:text-gray-100 font-bold mb-5">Alamat</h1>
                <div class="flex flex-col gap-5">
                    <div class="flex gap-5 flex-col xs:flex-row">
                        <div class="flex-grow">
                            <label for="provinsi"
                                class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Provinsi</label>
                            <input type="text" id="provinsi" name="provinsi"
                                class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                value="Bali" required />
                        </div>
                        <div class="flex-grow">
                            <label for="kota"
                                class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Kota</label>
                            <input type="text" id="kota" name="kota"
                                class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                value="Denpasar" required />
                        </div>
                    </div>
                    <div class="flex gap-5 flex-col flex-grow xs:flex-row w-full">
                        <div class="flex-grow">
                            <label for="kecamatan"
                                class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Kecamatan</label>
                            <input type="text" id="kecamatan" name="kecamatan"
                                class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                value="Denpasar Barat" required />
                        </div>
                        <div class="flex-grow">
                            <label for="kodePOS"
                                class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Kode
                                Pos</label>
                            <input type="text" id="kodePOS"
                                class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                                value="80117" required />
                        </div>
                    </div>
                    <div class="flex-grow">
                        <label for="nohp"
                            class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">No
                            Handphone</label>
                        <input type="text" id="nohp" name="nohp"
                            class=" border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary focus:border-primary block w-full p-3 placeholder-dark-secondary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                            placeholder="Masukan email" value="081234567891" required />
                    </div>
                    <div class="flex-grow">
                        <label for="addressLengkap"
                            class="block mb-2.5 text-xs sm:text-sm font-medium text-dark-secondary dark:text-white">Alamat
                            Lengkap</label>
                        <textarea name="desc"
                            class="border border-gray-300 text-dark-primary text-sm sm:text-base rounded-lg focus:ring-primary
                                    focus:border-primary block w-full p-3"
                            id="desc" rows="2" maxlength="600" required>Jalan Gunung Guntur No. 15, Desa Padang Sambian, Kecamatan Denpasar Barat</textarea>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="text-white text-sm sm:text-base bg-primary hover:bg-primary-hover rounded-lg px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover ">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
