<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'CookJar') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-orange-50 min-h-screen">

    <!-- HEADER (ISOLATED) -->
    <header>
        @include('partials.header')
    </header>

    <!-- PAGE CONTENT WRAPPER -->
    <div class="max-w-7xl mx-auto px-4 py-6">
        <main>
            @yield('content')
        </main>
    </div>

    <!-- MOBILE MENU SCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuBtn = document.getElementById('menuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const closeBtn = document.getElementById('closeMenu');

            menuBtn?.addEventListener('click', () => {
                mobileMenu?.classList.remove('hidden');
            });

            closeBtn?.addEventListener('click', () => {
                mobileMenu?.classList.add('hidden');
            });
        });
    </script>

        <!-- FOOTER (ISOLATED) -->
    <footer>
        @include('partials.footer')
    </footer>

</body>
</html>
