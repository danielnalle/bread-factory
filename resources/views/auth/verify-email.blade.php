<x-authentication-layout>

    <div
        class="p-6 flex items-center flex-col bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full max-w-md">
        @if (flash()->message)
            <div class="p-4 mb-4 text-sm text-green-600 w-full font-medium text-center rounded-lg bg-green-500 bg-opacity-20 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ flash()->message }}
            </div>
        @endif

        <h1 class="text-xl text-center text-dark-primary md:text-2xl font-medium mb-1">
            Verifikasi Akun
        </h1>
        <p class="text-sm text-center md:text-base text-dark-secondary mb-4">
            Email verifikasi sudah dikirim ke alamat email
        </p>

        <a href="https://mail.google.com/mail/"
            class="text-white bg-primary hover:bg-primary-hover font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-primary dark:hover:bg-primary-hover mb-4">
            Verifikasi Sekarang
        </a>
        <div class="flex items-center mb-4">
            <p class="text-base text-center text-dark-secondary">
                Tidak menerima email?
            </p>
            <form action="{{ route('verification.send') }}" method="POST" class="ms-1">
                @csrf
                <button type="submit"
                    class="font-semibold hover:underline text-primary hover:text-primary-blue dark:text-primary-500 cursor-pointer">Kirim
                    ulang</button>
            </form>
        </div>
        <p class="text-sm font-semibold text-dark-seocndary text-center italic"><span class="font-semibold">Note:
            </span> Silahkan melakukan verifikasi dengan perangkat dan
            browser yang sama sesuai email yang terdaftar.</p>
    </div>

</x-authentication-layout>
