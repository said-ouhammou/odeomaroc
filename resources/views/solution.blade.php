<x-layout :meta="$meta">
    <main class="min-h-screen">
        <div class="grid lg:grid-cols-2 items-center min-h-screen">
            <div class="bg-[#4a1d34] flex flex-col justify-center p-6 h-full order-2 lg:order-1">
                <p class="text-white text-sm uppercase tracking-widest font-medium">
                    CAISSE ENREGISTREUSE - ODEO
                </p>
                <h1 class="text-white text-xl sm:text-4xl font-bold leading-tight py-2">
                    Des Solutions de Gestion et de Caisse Adaptées à Votre Secteur
                </h1>
                <p class="text-gray-300 text-ld leading-relaxed max-w-2xl">
                    Chez Odeo Systems, nous offrons des solutions sur mesure : caisses tactiles, caisses enregistreuses modernes, tiroirs-caisses et plus encore. Que vous cherchiez une caisse automatique, une caisse tactile abordable ou une solution pour salon de coiffure, nous avons ce qu’il vous faut. Optimisez votre gestion avec nos produits fiables et adaptés à votre activité.
                </p>
            
                <div class="mt-6">
                    <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
                        <a href="/contact" class="w-full sm:w-auto inline-block bg-[#812755] text-white text-center px-8 py-4 rounded-full text-lg font-bold hover:bg-[#812755] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                            Visionner une démo
                        </a>
                        <a href="/contact" class="w-full sm:w-auto inline-block bg-transparent border-2 border-[#812755] text-white text-center px-8 py-4 rounded-full text-lg font-bold hover:bg-[#812755] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                            Contactez-nous
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:min-h-screen bg-[#f8f5f2] flex items-center justify-center pt-8 order-1 lg:order-2">
                <img src="{{asset('/images/products/pos-o.png')}}" alt="CAISSE ENREGISTREUSE - ODEO " class="max-h-[300px] md:max-h-[530px]">
            </div>
        </div>
    </main>
    

    @include('partials.tabs')

    @include('partials.webapp')

    <x-cards/>

    <x-reviews/>

    <x-buttons class="justify-center"/>
</x-layout>