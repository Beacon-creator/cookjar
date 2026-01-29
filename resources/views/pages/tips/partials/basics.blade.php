<section class="mb-6 py-6">
    <h2 class="text-3xl font-bold mb-6">
        MASTERING THE BASICS
    </h2>

    <div class="grid md:grid-cols-3 gap-6">

        @foreach ([
            ['Knife Skills', 'Cut smarter and safer with proper knife control.', 'knife-skills.png'],
            ['Sautéing & Searing', 'Build flavor with heat and timing.', 'sauteing.png'],
            ['Roasting Tips', 'Achieve even cooking and caramelization.', 'roasting.png'],
            ['Prep Workstations', 'Organize before you cook.', 'prep-workstation.png'],
            ['Clean As You Go', 'Stay efficient and stress-free.', 'clean-as-you-go.png'],
            ['Recipe Modification', 'Adapt dishes to your taste.', 'recipe-modification.png'],
        ] as [$title, $desc, $img])

        <div class=" rounded-2xl  shadow-sm flex flex-col">
            <!-- IMAGE -->
            <img src="{{ asset('images/' . $img) }}"
                 alt="{{ $title }}"
                 class="h-40 w-full object-cover rounded-lg mb-3">

            <!-- TITLE & DESCRIPTION -->
            <h3 class="font-semibold px-3 text-lg mb-2">{{ $title }}</h3>
            <p class="text-sm px-3 text-gray-600 mb-4 flex-1">{{ $desc }}</p>

            <!-- BUTTON -->
            <a href="#"
               class="mt-auto inline-block m-6 text-sm font-medium
                text-orange-500 border border-gray-200 rounded-full 
                px-3 py-1 text-center hover:bg-orange-50 transition">
               Read More
            </a>
        </div>

        @endforeach

    </div>
</section>
