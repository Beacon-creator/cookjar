<footer class=" w-full mt-3 bg-black text-gray-300 rounded-3xl">
    <!-- Content wrapper -->
    <div class="max-w-7xl mx-auto px-4 py-3">

        <!-- Top Row -->
        <div class="flex flex-col md:flex-row md:px-4 py-2
         items-center justify-between gap-8">

            <!-- Logo -->
            <div class="flex items-center gap-2 text-white text-xl font-bold">
                <img src="{{ asset('images/cookjarlg.svg') }}" alt="CookJar" class="h-8 w-8">
                CookJar
            </div>

            <!-- Navigation -->
            <nav class="flex flex-wrap justify-center gap-6 text-sm font-medium">
                <a href="/" class="text-gray-300 hover:text-orange-400 transition">HOME</a>
                <a href="{{ route('recipes.index') }}" class="text-gray-300 hover:text-orange-400 transition">RECIPES</a>
                <a href="{{ route('tips') }}" class="text-gray-300 hover:text-orange-400 transition">COOKING TIPS</a>
                <a href="{{ route('about')}}" class="text-gray-300 hover:text-orange-400 transition">ABOUT US</a>
            </nav>

            <!-- Social Icons -->
            <div class="flex items-center gap-5 text-gray-300">
                <a href="https://github.com/beacon" target="_blank" class="hover:text-orange-400 transition">
                    <i class="fa-brands fa-github text-xl"></i>
                </a>

                <a href="https://linkedin.com/in/olubukolaadebiyi" target="_blank" class="hover:text-orange-400 transition">
                    <i class="fa-brands fa-linkedin text-xl"></i>
                </a>
            </div>

        </div>

        <!-- Divider -->
        <div class="border-t border-gray-800 mt-8"></div>

        <!-- Bottom -->
        <p class="text-center text-sm mt-6 text-gray-400">
            © {{ date('Y') }} CookJar. All rights reserved.
        </p>

    </div>


    <script>
function toggleDesktopSearch() {
    const input = document.getElementById('desktopSearch');
    input.classList.toggle('w-48');
    input.classList.toggle('opacity-100');
}

function toggleMobileSearch() {
    const input = document.getElementById('mobileSearch');
    input.classList.toggle('w-full');
    input.classList.toggle('opacity-100');
}
</script>

</footer>
