<section class="mb-20">
    <h2 class="text-3xl font-bold mb-10">
        Mastering the Basics
    </h2>

    <div class="grid md:grid-cols-3 gap-6">

        @foreach ([
            ['Knife Skills', 'Cut smarter and safer with proper knife control.'],
            ['Sautéing & Searing', 'Build flavor with heat and timing.'],
            ['Roasting Tips', 'Achieve even cooking and caramelization.'],
            ['Prep Workstations', 'Organize before you cook.'],
            ['Clean As You Go', 'Stay efficient and stress-free.'],
            ['Recipe Modification', 'Adapt dishes to your taste.'],
        ] as [$title, $desc])

        <div class="bg-white rounded-2xl p-5 shadow-sm">
            <div class="h-40 bg-gray-200 rounded-lg mb-4"></div>

            <h3 class="font-semibold text-lg mb-2">
                {{ $title }}
            </h3>

            <p class="text-sm text-gray-600 mb-4">
                {{ $desc }}
            </p>

            <a href="#" class="text-sm font-medium text-orange-500 float-right">
                Read more →
            </a>
        </div>

        @endforeach

    </div>
</section>
