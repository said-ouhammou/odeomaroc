
<div class="w-full py-4">
    <div data-hs-carousel='{
        "isAutoplay": true,
        "isDraggable": true,
        "isSnap": false,
        "slidesQty": {
            "xs": 2,
            "sm": 3,
            "md": 4,
            "lg": 5,
            "xl": 6,
            "2xl": 6
        },
        "loadingClasses": "opacity-0",
        "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer dark:border-neutral-600 dark:hs-carousel-active:bg-blue-500 dark:hs-carousel-active:border-blue-500"
        }' class="relative">
        <div class="hs-carousel relative overflow-hidden w-full min-h-64 bg-white">
            <div class="mt-auto w-full max-w-[85rem] pt-6  px-4 sm:px-6 lg:px-8 mx-auto">
                <h1 class="text-gray-700 text-md sm:text-xl md:text-3xl font-bold leading-tight">
                    Découvrez nos clients
                </h1>
            </div>
            <div class="hs-carousel-body hs-carousel:dragging:transition-none absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">

                @if ($clientLogos)
                    @foreach ($clientLogos as $clientLogo)
                    <div class="hs-carousel-slide flex items-center justify-center">
                        <div class="aspect-square w-36 md:w-40">
                            <img 
                                class="h-full w-full object-contain opacity-70 transition-transform duration-300 hover:scale-110 hover:opacity-100" 
                                src="{{ asset($clientLogo['src']) }}" 
                                alt="{{ $clientLogo['alt'] }}">
                        </div>
                    </div>
                    @endforeach
                @endif
        
            </div>
        </div>

        <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute top-2/4 start-2 inline-flex justify-center items-center w-[46px] h-[46px] text-gray-800 bg-gray-800/10 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-full dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m15 18-6-6 6-6"></path>
                </svg>
            </span>
            <span class="sr-only">Previous</span>
        </button>
        <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute top-2/4 end-2 inline-flex justify-center items-center w-[46px] h-[46px] text-gray-800 bg-gray-800/10 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-full dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
            <span class="sr-only">Next</span>
            <span class="text-2xl" aria-hidden="true">
                <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6"></path>
                </svg>
            </span>
        </button>
    </div>
</div>