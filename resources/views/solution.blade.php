<x-layout>
    <main class="min-h-screen">
        <div class="grid lg:grid-cols-2 items-center min-h-screen">
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
            <div class="min-h-screen bg-[#f8f5f2] flex items-center justify-center">
                <img src="{{asset('/images/products/pos-o.png')}}" alt="CAISSE ENREGISTREUSE - ODEO " style="max-height:530px">
            </div>
        </div>
    </main>
    @include('partials.tabs')

    <main class="max-w-7xl bg-[#f8f5f2]  my-2 rounded-[50px] mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Left Column -->
            <div class="lg:w-1/2 text-black">
                <h1 class="text-2xl font-bold mb-4 text-[#812755]">L'application a été pensée par un restaurateur qui connaît tes contraintes !</h1>
                

                <p class="text-gray-700 mb-4">
                    Popina s'efforce de mettre à disposition une application personnalisée entre les mains des restaurateurs qui l'utilisent. Souscris à tes indispensables et ajoute de nombreux services et accessoires,
                </p>

                <div class="space-y-2">
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10H9m3 4v-4m0 0l3-3m-3 3l-3-3m12 1V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2z"/>
                            </svg>
                        </div>
                        <span>Paiement et prise de commande</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <span>Gestion des stocks avancée</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <span>Ventilation des ventes et export comptable</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <span>Organisation des pôles de préparation</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                            </svg>
                        </div>
                        <span>Pilotage du programme de fidélité</span>
                    </div>
                </div>
            </div>            

            <!-- Right Column -->
            <div class="lg:w-1/2 h-fit border-2 border-solid border-[#812755] rounded-xl ">
                <div class="relative ">
                    <div class="relative overflow-hidden rounded-e-3xl rounded-s-3xl p-3">
                        <img src="{{asset('/images/app/app-1.png')}}" alt="Restaurateur" class=" object-cover">
                    </div>
                </div>
            </div>

        </div>
    </main>

    <main class="max-w-7xl bg-[#f8f5f2] my-2 rounded-[50px]  mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Left Column -->
            <div class="lg:w-1/2 h-fit border-2 border-solid border-[#812755] rounded-xl ">
                <div class="relative ">
                    <div class="relative overflow-hidden rounded-e-3xl rounded-s-3xl p-3">
                        <img src="{{asset('/images/app/app-2.png')}}" alt="Restaurateur" class=" object-cover">
                    </div>
                </div>
            </div>

            <!-- Right Column -->
            <div class="lg:w-1/2 text-black">
                <h1 class="text-2xl font-bold mb-4 text-[#812755]">L'application a été pensée par un restaurateur qui connaît tes contraintes !</h1>
                

                <p class="text-gray-700 mb-4">
                    Popina s'efforce de mettre à disposition une application personnalisée entre les mains des restaurateurs qui l'utilisent. Souscris à tes indispensables et ajoute de nombreux services et accessoires,
                </p>

                <div class="space-y-2">
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10H9m3 4v-4m0 0l3-3m-3 3l-3-3m12 1V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2z"/>
                            </svg>
                        </div>
                        <span>Paiement et prise de commande</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <span>Gestion des stocks avancée</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <span>Ventilation des ventes et export comptable</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <span>Organisation des pôles de préparation</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                            </svg>
                        </div>
                        <span>Pilotage du programme de fidélité</span>
                    </div>
                </div>
            </div> 

        </div>
    </main>

    <main class="max-w-7xl bg-[#f8f5f2] my-2 rounded-[50px]  mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Left Column -->
            <div class="lg:w-1/2 text-black">
                <h1 class="text-2xl font-bold mb-4 text-[#812755]">L'application a été pensée par un restaurateur qui connaît tes contraintes !</h1>
                

                <p class="text-gray-700 mb-4">
                    Popina s'efforce de mettre à disposition une application personnalisée entre les mains des restaurateurs qui l'utilisent. Souscris à tes indispensables et ajoute de nombreux services et accessoires,
                </p>

                <div class="space-y-2">
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10H9m3 4v-4m0 0l3-3m-3 3l-3-3m12 1V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2z"/>
                            </svg>
                        </div>
                        <span>Paiement et prise de commande</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <span>Gestion des stocks avancée</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <span>Ventilation des ventes et export comptable</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <span>Organisation des pôles de préparation</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                            </svg>
                        </div>
                        <span>Pilotage du programme de fidélité</span>
                    </div>
                </div>
            </div>            

            <!-- Right Column -->
            <div class="lg:w-1/2 h-fit border-2 border-solid border-[#812755] rounded-xl ">
                <div class="relative ">
                    <div class="relative overflow-hidden rounded-e-3xl rounded-s-3xl p-3">
                        <img src="{{asset('/images/app/app-3.png')}}" alt="Restaurateur" class=" object-cover">
                    </div>
                </div>
            </div>

        </div>
    </main>


    <x-cards/>

    <x-reviews/>

    <div class="py-2 bg-[#f8f5f2]">
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6">
            <a href="#" class="w-full sm:w-auto inline-block bg-[#812755] text-white text-center px-8 py-2 rounded-full text-lg font-bold hover:bg-[#812755] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                Visionner une démo
            </a>
            <a href="#" class="w-full sm:w-auto inline-block bg-transparent border-2 border-[#812755] text-[#812755] text-center px-8 py-2 rounded-full text-lg font-bold hover:bg-[#812755] hover:text-white transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                Contactez-nous
            </a>
        </div>
    </div>
</x-layout>