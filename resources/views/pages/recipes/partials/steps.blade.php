@if ($recipe->steps->count())
<div>
    <h2 class="text-2xl font-semibold mb-6">INSTRUCTIONS</h2>
    <div class="space-y-8">
        @foreach ($recipe->steps as $step)
            <div class="gap-6">
                <div class=" text-sm">This recipe goes beyond the basics, inviting you to savor the richness of a creamy
                     tomato basil sauce that clings to each strand of perfectly cooked pasta. 
                It\'s a celebration of simplicity, where every ingredient plays a crucial role in creating a dish that
                 is as comforting as it is delightful. Allow the chicken to rest for 10 minutes before carving. 
                 This brief resting period is essential; it allows the juices to redistribute, ensuring each slice is succulent and bursting with flavor. 
                As you carve into the golden exterior, be prepared for the enticing aroma that fills the air, 
                signaling that your Citrus Infusion Delight is ready to be savored.
                </div>
                <div>
                    <h3 class="font-semibold mb-2">{{ $step->title }}</h3>
                    <p class="text-gray-600 mb-3">{{ $step->instruction }}</p>
                    @if ($step->image)
                        <img src="/images/{{ $step->image }}"
                             class="rounded-xl w-full max-w-md">
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif
