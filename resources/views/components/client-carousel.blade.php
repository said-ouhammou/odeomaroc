<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="w-full py-4">
    <div class="relative overflow-hidden w-full min-h-64 bg-white">
        <div class="mt-auto w-full max-w-[85rem] pt-6  px-4 sm:px-6 lg:px-8 mx-auto">
            <h1 class="text-gray-700 text-md sm:text-xl md:text-3xl font-bold leading-tight">
                Nos Clients de Confiance
            </h1>
            <p class="py-2 text-lg text-gray-600">Découvrez les entreprises qui nous font confiance pour leurs solutions POS et PMS.</p>
        </div>
        <div class="swiper clients">
            <div class="swiper-wrapper">
                @if ($clientLogos)
                    @foreach ($clientLogos as $clientLogo)
                    <div class="swiper-slide">
                        <div class="flex items-center justify-center">
                            <div class="aspect-square w-36 md:w-40">
                                <img 
                                    class="h-full w-full object-contain opacity-70 transition-transform duration-300 hover:scale-110 hover:opacity-100" 
                                    src="{{ asset($clientLogo['src']) }}" 
                                    alt="{{ $clientLogo['alt'] }}">
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".clients", {
autoplay: {
    delay: 2000,
},
slidesPerView: 5,
spaceBetween: 20,
freeMode: true,
pagination: {
    el: ".swiper-pagination",
    clickable: true,
},
breakpoints: {
    // when window width is >= 320px
    320: {
    slidesPerView: 2,
    spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
    slidesPerView: 3,
    spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
    slidesPerView: 4,
    spaceBetween: 20
    },
    990: {
    slidesPerView: 5,
    spaceBetween: 20
    }
}
});
</script>