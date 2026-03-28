<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <script>
        if (localStorage.getItem('dark-mode') === 'false' || !('dark-mode' in localStorage)) {
            document.querySelector('html').classList.remove('dark');
            document.querySelector('html').style.colorScheme = 'light';
        } else {
            document.querySelector('html').classList.add('dark');
            document.querySelector('html').style.colorScheme = 'dark';
        }
    </script>
</head>

<body class="font-secondary antialiased bg-gray-100 dark:bg-gray-900 text-gray-600 dark:text-gray-400">

    <main class="bg-[#F7F7F9] dark:bg-gray-900">



        <!-- Content -->
        <div class="w-full min-h-[100dvh] h-full flex items-center justify-center px-5">
            {{ $slot }}
        </div>

    </main>

    @livewireScripts
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const alert = document.getElementById('alert');

            // Menampilkan alert dengan transisi
            setTimeout(() => {
                alert.classList.remove('opacity-0', 'scale-90');
                alert.classList.add('opacity-100', 'scale-100');
            }, 100); // Delay sedikit untuk efek transisi.

            setTimeout(() => {
                alert.classList.remove('opacity-100', 'scale-100');
                alert.classList.add('opacity-0', 'scale-90');
            }, 10000); // Durasi tampilan 5 detik.

            setTimeout(() => {
                alert.classList.add('hidden');
            }, 10200); // Durasi tampilan 5 detik.
        });
    </script>

</body>

</html>
