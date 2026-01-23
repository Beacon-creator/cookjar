<section class="grid grid-cols-2 md:grid-cols-4 gap-4 py-20">
    @for ($i = 1; $i <= 8; $i++)
        <img src="/images/author{{ $i }}.png"
             class="rounded-2xl object-cover">
    @endfor
</section>
