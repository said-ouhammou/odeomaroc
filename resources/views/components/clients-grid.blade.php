<div x-data="{ showReview: false, currentReview: null }" 
     x-init="showReview = false" 
     class="container mx-auto px-4 py-8">
    @unless (!$clientLogos)
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        @foreach ($clientLogos as $logo)
            <div class="p-4 border border-gray-200 flex items-center justify-center hover:shadow-lg transition duration-300">
                <img 
                    src="{{ asset($logo['src']) }}" 
                    alt="{{ $logo['alt'] }}" 
                    class="block mx-auto object-contain cursor-pointer transition duration-300 hover:opacity-100" 
                    style="max-height: 90px; opacity: 0.7;"
                    @click="showReview = true; currentReview = {{ json_encode($logo) }}"
                />
            </div>
        @endforeach
    </div>
    @endunless

    <!-- Review Popup -->
    <div x-show="showReview" 
         x-cloak 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-white z-50 overflow-y-auto" 
         @click.away="showReview = false">
        <button @click="showReview = false" class="fixed top-4 right-4 text-gray-500 hover:text-gray-700 transition duration-300">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <div class="container mx-auto px-4 py-8 min-h-screen">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold mb-8 text-center" x-text="currentReview?.company"></h2>
                <img :src="currentReview?.src" :alt="currentReview?.alt" class="mb-8 mx-auto" style="max-height: 80px;">
                <div class="mb-8">
                    <div class="flex items-center justify-center mb-4">
                        <div class="text-yellow-400 text-3xl" x-html="'★'.repeat(currentReview?.rating) + '☆'.repeat(5 - currentReview?.rating)"></div>
                        <span class="ml-2 text-gray-600 text-xl" x-text="`${currentReview?.rating}/5`"></span>
                    </div>
                    <p class="text-gray-700 italic mb-4 text-center text-md" x-text="currentReview?.shortReview"></p>
                    <p class="text-gray-600 text-lg" x-text="currentReview?.fullReview"></p>
                </div>
                <div class="grid grid-cols-2 gap-12">
                    <div class="border-t pt-8">
                        <h3 class="font-semibold text-2xl mb-4">Project Details</h3>
                        <p class="text-gray-600 text-lg" x-text="currentReview?.projectDetails"></p>
                    </div>
                    <div class="mt-8">
                        <h3 class="font-semibold text-2xl mb-4">Client Representative</h3>
                        <div class="flex items-center">
                            <img :src="currentReview?.repAvatar" alt="Representative" class="rounded-lg mr-6 object-cover">
                            <div>
                                <p class="font-medium text-xl" x-text="currentReview?.repName"></p>
                                <p class="text-gray-600 text-lg" x-text="currentReview?.repPosition"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

