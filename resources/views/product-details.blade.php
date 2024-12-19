<x-layout>
    <section class="">
        <div class="grid lg:grid-cols-2 items-center ">
            <div class="bg-[#4a1d34] flex flex-col justify-center p-6 h-full">
                <p class="text-white text-sm uppercase tracking-widest font-medium">
                    CAISSE ENREGISTREUSE - ODEO
                </p>
                <h1 class="text-white text-4xl sm:text-5xl font-bold leading-tight">
                    Tirez le meilleur de votre activité
                </h1>
                <p class="text-gray-300 text-ld leading-relaxed max-w-2xl">
                    Odeo, le logiciel de caisse tout-en-un et sa plateforme de paiements intégrée, équipe les meilleurs restaurants et commerçants dans plus de 165 000 emplacements dans le monde.*
                </p>
            
                <div>
                    <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-6">
                        <a href="#" class="w-full sm:w-auto inline-block bg-[#812755] text-white text-center px-8 py-4 rounded-full text-lg font-bold hover:bg-[#812755] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                            Visionner une démo
                        </a>
                        <a href="#" class="w-full sm:w-auto inline-block bg-transparent border-2 border-[#812755] text-white text-center px-8 py-4 rounded-full text-lg font-bold hover:bg-[#812755] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                            Contactez-nous
                        </a>
                    </div>
                </div>
            </div>
            <div class=" bg-[#f8f5f2] flex items-center justify-center">
                <img src="{{asset('/images/b/b-1.jpg')}}" alt="CAISSE ENREGISTREUSE - ODEO " class="block max-h-[500px] object-cover">
            </div>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Left Column -->
            <div class="lg:w-1/2">
                <h1 class="text-[#4a1d34] text-4xl lg:text-5xl font-bold mb-6">
                    Stock avec Lightspeed Inventory
                </h1>
                <p class="text-md text-[#812755] mb-8">
                    Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires.
                </p>
                
                <div class="space-y-8">
                    <div class="flex gap-4">
                        <svg class="w-6 h-6 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p class="text-gray-900">
                            Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>
                        </p>
                    </div>

                    <div class="flex gap-4">
                        <svg class="w-6 h-6 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p class="text-gray-900">
                            Créez des recettes avec des <span class="font-semibold">suggestions de prix pour les menus</span> et un suivi de la marge brute
                        </p>
                    </div>

                    <div class="flex gap-4">
                        <svg class="w-6 h-6 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p class="text-gray-900">
                            <span class="font-semibold">Gérez vos fournisseurs dans un même endroit</span> et créez, envoyez et recevez facilement des commandes
                        </p>
                    </div>

                    <div class="flex gap-4">
                        <svg class="w-6 h-6 text-red-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <p class="text-gray-900">
                            Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux <span class="font-semibold">rapports de stock en temps réel</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="lg:w-1/2 relative">
                <div class="relative">
                    <img 
                        src="{{asset('/images/products/pos-o.png')}}" 
                        alt="Gestion des stocks de tomates"
                        class="w-full "
                    />
                    <!-- Overlay UI -->
                    <div class="absolute top-4 right-4 bg-white rounded-lg shadow-lg p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="font-medium">caisse enregistreuse</span>
                            <span class="bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full">
                                Odeo
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout>