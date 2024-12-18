<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* Change bullet color */
    .swiper-pagination-bullet {
        background-color: #eee; /* Replace with your desired color */
        opacity: 0.7;
        transition: opacity 0.3s;
        width: 14px;
        height: 14px;
    }

    /* Change bullet color on active state */
    .swiper-pagination-bullet-active {
        background-color:  #812755; /* Replace with your active color */
        opacity: 1;
    }
</style>


<!-- Swiper -->
<div class="max-w-7xl mx-auto px-4 py-8 bg-[#f8f5f2]">
    <div class="pb-4">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @if ($reviews)
                    @foreach ($reviews as $review)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-lg p-6 h-[280px] shadow-sm">
                            <div class="flex mb-2">
                                <div class="flex space-x-1">
                                    @for ($i = 0; $i < $review['stars']; $i++)
                                    <div class="w-4 h-4 rounded-full bg-[#812755]"></div>
                                    @endfor
                                </div>
                            </div>
                            <h2 class="text-xl font-semibold mb-4">{{$review['title']}}</h2>
                            <p class="text-gray-600 mb-6">{{$review['content']}}</p>
                            <div class="space-y-2 text-sm text-gray-500">
                                <p class="mt-4">{{$review['date']}}</p>
                            </div>
                        </div>
                    </div>   
                    @endforeach
                @endif         
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
var swiper = new Swiper(".mySwiper", {
autoplay: {
    delay: 2000,
},
slidesPerView: 3,
spaceBetween: 30,
freeMode: true,
pagination: {
    el: ".swiper-pagination",
    clickable: true,
},
breakpoints: {
    // when window width is >= 320px
    320: {
    slidesPerView: 1,
    spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
    slidesPerView: 1,
    spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
    slidesPerView: 2,
    spaceBetween: 30
    },
    990: {
    slidesPerView: 3,
    spaceBetween: 30
    }
}
});
</script>