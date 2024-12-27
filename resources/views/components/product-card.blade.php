@if($products)
    @foreach($products as $product)
    <div x-data="{ showModal: false }" class="bg-white rounded-lg shadow-md overflow-hidden relative group" x-init="() => {
            $nextTick(() => {showModal = false;}">
        <img src="{{asset($product['image'])}}" alt="Product 1" class="w-full h-48 object-contain">
        <div class="p-4">
            <h2 class="text-xl font-semibold mb-2">{{$product['title']}}</h2>
            <p class="text-gray-600 mb-4">{{$product['short_description']}}</p>
        </div>
        <!-- Quick Review Button (Visible on Hover) -->
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
            <button @click="showModal = true" class="bg-white text-black px-4 py-2 rounded hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400">
            Aperçu rapide
            </button>
        </div>
        <!-- Modal -->
        <div x-show="showModal" x-cloak class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                <!-- Background overlay -->
                <div @click="showModal = false" x-show="showModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
                <!-- Modal panel -->
                <div x-show="showModal" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-6xl sm:w-full">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-4">
                        <div class="flex flex-col-reverse lg:flex-row gap-12">
                            <!-- Left Column -->
                            <div class="lg:w-1/2 ">
                                <h1 class="text-[#4a1d34] text-2xl lg:text-3xl font-bold mb-6">
                                    {{-- Stock avec Odeo Inventory --}}
                                    {{$product['title']}}
                                </h1>
                                <p class="text-md text-[#812755] mb-8">
                                    {{$product['short_description']}}
                                </p>
                                
                                <div class="space-y-2">
                                    @foreach ($product['features'] as $feature)
                                        <div class="flex gap-4">
                                            <svg class="w-6 h-6 text-red-600 flex-shrink-0" fill="none" stroke="#4a1d34" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                            </svg>
                                            <p class="text-gray-900">
                                                {!! $feature !!}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                                <p class="text-md text-[#812755] mt-8">
                                    {{$product['description']}}
                                </p>
                                <x-buttons class="bg-white mt-8"/>
                            </div>
            
                            <!-- Right Column -->
                            <div class="lg:w-1/2 relative">
                                <div class="relative ">
                                    <img 
                                        src="{{asset($product['image'])}}" 
                                        {{-- alt="{{$product['alt']}}" --}}
                                        class="max-h-[420px] object-cover block mx-auto "
                                    />
                                    <!-- Overlay UI -->
                                    <div class="absolute top-4 right-4 bg-white rounded-lg shadow-lg p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="font-medium uppercase">{{$product["title"]}}</span>
                                            <span class="bg-[#812755] text-white text-sm mx-2 px-3 py-1 rounded-full">
                                                Odeo
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                        <button @click="showModal = false" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-[#7f2855] text-base font-medium text-white hover:bg-[#7f2855]/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Fermer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        [x-cloak] { display: none !important; }
    </style>
    @endforeach
@endIf