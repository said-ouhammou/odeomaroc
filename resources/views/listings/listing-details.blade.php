<x-layout>
    @if ($listing)
        <section class="">
            <div class="grid lg:grid-cols-2 items-center ">
                <div class="bg-[#4a1d34] flex flex-col justify-center p-6 h-full order-2 lg:order-1">
                    <p class="text-white text-sm uppercase tracking-widest font-medium mb-3">
                        CAISSE ENREGISTREUSE - ODEO
                    </p>
                    <h1 class="text-white text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight">
                        {{-- Tirez le meilleur de votre activité --}}
                        {{$listing['title']}}
                    </h1>
                    <p class="mt-3 text-gray-300 text-ld leading-relaxed max-w-2xl">
                        {{-- Odeo, le logiciel de caisse tout-en-un et sa plateforme de paiements intégrée, équipe les meilleurs restaurants et commerçants dans plus de 165 000 emplacements dans le monde.* --}}
                        {{$listing['short_description']}}
                    </p>
                
                    <div>
                        <div class="mt-3 flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
                            <a href="/contact" class="w-full sm:w-auto inline-block bg-[#812755] text-white text-center px-8 py-4 rounded-full text-lg font-bold hover:bg-[#812755] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                                Visionner une démo
                            </a>
                            <a href="/contact" class="w-full sm:w-auto inline-block bg-transparent border-2 border-[#812755] text-white text-center px-8 py-4 rounded-full text-lg font-bold hover:bg-[#812755] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                                Contactez-nous
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" bg-[#f8f5f2] flex items-center justify-center order-1 lg:order-2">
                    {{-- <img src="{{asset('/images/b/b-1.jpg')}}" alt="CAISSE ENREGISTREUSE - ODEO " class="block max-h-[500px] object-cover"> --}}
                    <img src="{{ asset($listing['image']['url']) }}" 
                    alt="{{ $listing['image']['alt'] }}" 
                    class="block max-h-[500px] object-cover">
               
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-4">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Left Column -->
                <div class="lg:w-1/2">
                    <h1 class="text-[#4a1d34] text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        {{-- Stock avec Odeo Inventory --}}
                        {{$listing['sections'][0]['title']}}
                    </h1>
                    <p class="text-md text-[#812755] mb-8">
                        {{-- Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. --}}
                        {{$listing['sections'][0]['text']}}
                    </p>
                    
                    <div class="space-y-8">
                        @foreach ($listing['sections'][0]['features'] as $feature)
                            <div class="flex gap-4">
                                <svg class="w-6 h-6 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <p class="text-gray-900">
                                    {!! $feature !!}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right Column -->
                <div class="lg:w-1/2 relative">
                    <div class="relative ">
                        <img 
                            src="{{asset($listing['sections'][0]['image']['url'])}}" 
                            alt="{{$listing['sections'][0]['image']['alt']}}"
                            class="max-h-[420px] object-cover block mx-auto "
                        />
                        <!-- Overlay UI -->
                        <div class="absolute top-4 right-4 bg-white rounded-lg shadow-lg p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-medium uppercase">caisse enregistreuse</span>
                                <span class="bg-[#812755] text-white text-sm mx-2 px-3 py-1 rounded-full">
                                    Odeo
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-4">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Left Column -->
                <div class="lg:w-1/2 relative">
                    <div class="relative ">
                        <img 
                            src="{{asset($listing['sections'][1]['image']['url'])}}" 
                            alt="{{$listing['sections'][1]['image']['alt']}}"
                            class="w-full object-cover block mx-auto "
                        />
                        <!-- Overlay UI -->
                        <div class="absolute top-4 right-4 bg-white rounded-lg shadow-lg p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-medium uppercase">caisse enregistreuse</span>
                                <span class="bg-[#812755] text-white text-sm mx-2 px-3 py-1 rounded-full">
                                    Odeo
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                

                <!-- Right Column -->
                <div class="lg:w-1/2">
                    <h1 class="text-[#4a1d34] text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        {{-- Stock avec Odeo Inventory --}}
                        {{$listing['sections'][1]['title']}}
                    </h1>
                    <p class="text-md text-[#812755] mb-8">
                        {{-- Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. --}}
                        {{$listing['sections'][1]['text']}}
                    </p>
                    
                    <div class="space-y-8">
                        @foreach ($listing['sections'][1]['features'] as $feature)
                            <div class="flex gap-4">
                                <svg class="w-6 h-6 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <p class="text-gray-900">
                                    {!! $feature !!}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16 pb-4">
            <div class="flex flex-col lg:flex-row gap-12">
                <!-- Left Column -->
                <div class="lg:w-1/2">
                    <h1 class="text-[#4a1d34] text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-6">
                        {{-- Stock avec Odeo Inventory --}}
                        {{$listing['sections'][2]['title']}}
                    </h1>
                    <p class="text-md text-[#812755] mb-8">
                        {{-- Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. --}}
                        {{$listing['sections'][2]['text']}}
                    </p>
                    
                    <div class="space-y-8">
                        @foreach ($listing['sections'][2]['features'] as $feature)
                            <div class="flex gap-4">
                                <svg class="w-6 h-6 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <p class="text-gray-900">
                                    {!! $feature !!}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Right Column -->
                <div class="lg:w-1/2 relative">
                    <div class="relative ">
                        <img 
                            src="{{asset($listing['sections'][2]['image']['url'])}}" 
                            alt="{{$listing['sections'][2]['image']['alt']}}"
                            class="max-h-[600px] object-cover block mx-auto "
                        />
                        <!-- Overlay UI -->
                        <div class="absolute top-4 right-4 bg-white rounded-lg shadow-lg p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="font-medium uppercase">caisse enregistreuse</span>
                                <span class="bg-[#812755] text-white text-sm mx-2 px-3 py-1 rounded-full">
                                    Odeo
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.webapp')

        <x-reviews/>
        <x-buttons class="justify-center"/>

    @else
    <div class="bg-[#f8f5f2]">
        <div class="max-w-md w-full mx-auto py-8 ">
            <div class="text-center mb-8">
                <h1 class="text-8xl font-bold mb-4 text-[#812755]">404</h1>
                <h2 class="text-3xl font-semibold mb-2 text-gray-700">Page Non Trouvée</h2>
                <p class="text-lg mb-8 text-[#812755]">Désolé, la page que vous recherchez semble avoir disparu dans les méandres du web.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <p class="text-lg mb-6">Que souhaitez-vous faire maintenant ?</p>
                <ul class="space-y-4">
                    <li>
                        <a href="/" class="block w-full text-center bg-[#812755] text-[#f8f5f2] py-3 rounded-lg hover:bg-[#a53f7c] transition-colors duration-300">
                            Retour à l'accueil
                        </a>
                    </li>
                    <li>
                        <a href="/solutions" class="block w-full text-center border-2 border-[#812755] text-[#812755] py-3 rounded-lg hover:bg-[#812755] hover:text-[#f8f5f2] transition-colors duration-300">
                            Découvrez nos solutions
                        </a>
                    </li>
                </ul>
            </div>
            <div class="mt-8 text-center text-sm text-[#812755]/60">
                <p>Si vous pensez qu'il s'agit d'une erreur, veuillez <a href="/contact" class="underline hover:text-[#a53f7c]">nous contacter</a>.</p>
            </div>
        </div>
    </div>
    @endif
</x-layout>