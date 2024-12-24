<x-layout>
    
    <main class="bg-[#f8f5f2]">
        <div class="grid lg:grid-cols-2 items-center ">
            <div class="flex flex-col justify-center p-6 h-full order-2 lg:order-1">
                <p class="text-gray-900 text-sm uppercase tracking-widest font-medium mb-3 lg:mb-6">
                    CAISSE ENREGISTREUSE - ODEO
                </p>
                <h1 class="text-gray-900 text-2xl sm:text-4xl lg:text-5xl font-bold leading-tight mb-4">
                    La révolution tactile pour votre commerce
                </h1>
                <p class="text-gray-800 text-ld leading-relaxed max-w-2xl mb-4">
                    Premier choix en matière de caisse tactile au Maroc, Odeo équipe plus de 165 000 commerces avec sa solution tout-en-un. Découvrez nos caisses enregistreuses nouvelle génération à prix compétitifs.
                </p>
            
                <div>
                    <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
                        <a href="/contact" class="w-full sm:w-auto inline-block bg-[#812755] text-white text-center px-8 py-4 rounded-full text-lg font-bold hover:bg-[#812755] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                            Visionner une démo
                        </a>
                        <a href="/contact" class="w-full sm:w-auto inline-block bg-transparent border-2 border-[#812755] text-[#812755] text-center px-8 py-4 rounded-full text-lg font-bold hover:bg-[#812755] hover:text-white transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                            Contactez-nous
                        </a>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center pt-8 order-1 lg:order-2">
                <img src="{{asset('/images/products/pos-o.png')}}" alt="CAISSE ENREGISTREUSE - ODEO " style="max-height:530px">
            </div>
        </div>
    </main>

    <section class="">
        <div>
            <div class="container mx-auto px-4 py-8">
                <h1 class="text-[#4a1d34] text-2xl lg:text-3xl font-bold my-8">Nos Produits</h1>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    
                   <x-product-card/>
                </div>
            </div>

        </div>


       
    </section>
</x-layout>