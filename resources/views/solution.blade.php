<x-layout>
    <main class="min-h-screen">
        <div class="grid lg:grid-cols-2 items-center min-h-screen">
            <div class="bg-[#4a1d34] flex flex-col justify-center p-6 h-full">
                <p class="text-white text-sm uppercase tracking-widest font-medium">
                    CAISSE ENREGISTREUSE - ODEO
                </p>
                <h1 class="text-white text-4xl sm:text-5xl font-bold leading-tight">
                    La révolution tactile pour votre commerce
                </h1>
                <p class="text-gray-300 text-ld leading-relaxed max-w-2xl">
                    Premier choix en matière de caisse tactile au Maroc, Odeo équipe plus de 165 000 commerces avec sa solution tout-en-un. Découvrez nos caisses enregistreuses nouvelle génération à prix compétitifs.
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
    
    <!-- Section Odeo POS Features -->
    <section class="py-16 bg-gradient-to-br from-[#8f436a] to-[#812755]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-white mb-4">Odeo POS</h2>
                <p class="text-purple-100 max-w-2xl mx-auto">
                    Simplifiez vos opérations grâce à notre PDV, basé sur une solution cloud IaaS 
                    spécialement conçu pour les restaurants, cafés, salons de thé..., quelle que soit leur taille.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 relative">
                <!-- Main Image - Visible only on large screens -->
                <div class="hidden lg:block lg:col-span-3 mb-12">
                    <div class="max-w-96 mx-auto transform hover:scale-105 border rounded-2xl bg-white transition-transform duration-300">
                        <img src="{{ asset('images/products/odeo-pos.png') }}" alt="Odeo POS Interface" class="rounded-xl shadow-2xl">
                    </div>
                </div>

                <!-- Feature Cards -->
                <!-- Prise de commande -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 hover:bg-white/20 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-white rounded-lg group-hover:bg-white/70 transition-colors">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-3">Prise de commande</h3>
                            <p class="text-purple-100">
                                La présentation claire des produits par famille, la gestion des menus composés, 
                                la saisie rapide via code-barres ou écran tactile, la possibilité de vente au poids 
                                et les changements automatiques de tarifs selon les plages horaires.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Paiement et facturation -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 hover:bg-white/20 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-white rounded-lg group-hover:bg-white/70 transition-colors">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-3">Paiement et facturation</h3>
                            <p class="text-purple-100">
                                Transfert d'articles ou de tables, gestion des annulations de commandes, 
                                regroupement ou partage de factures, tips et rendu monnaie, ainsi que la 
                                prise en charge de différents modes de paiement sur la même note.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Réservation de table -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 hover:bg-white/20 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-white rounded-lg group-hover:bg-white/70 transition-colors">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-3">Réservation de table et gestion cardex</h3>
                            <p class="text-purple-100">
                                Notre mode plan de salle vous offre un contrôle total sur l'organisation 
                                de votre établissement et les réservations de vos clients.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Kitchen Display Systems -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 hover:bg-white/20 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-white rounded-lg group-hover:bg-white/70 transition-colors">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-3">Kitchen display systems KDS</h3>
                            <p class="text-purple-100">
                                Facilite la communication et améliore l'efficacité de votre cuisine grâce à 
                                des systèmes KDS ou simplement via des imprimantes de production.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Sécurité -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 hover:bg-white/20 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-white rounded-lg group-hover:bg-white/70 transition-colors">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-3">Sécurité</h3>
                            <p class="text-purple-100">
                                L'accès au système est sécurisé grâce à des autorisations d'accès par code, 
                                clé dallas ou carte RFID, garantissant un accès limité selon le rôle.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Statistique et Reporting -->
                <div class="bg-white/10 backdrop-blur-lg rounded-xl p-6 hover:bg-white/20 transition-all duration-300 group">
                    <div class="flex items-start gap-4">
                        <div class="p-3 bg-white rounded-lg group-hover:bg-white/70 transition-colors">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-3">Statistique et Reporting</h3>
                            <p class="text-purple-100">
                                Le tableau de bord offre une visibilité complète et en temps réel des performances : 
                                chiffre d'affaires global ou par famille de produits, journal des opérations et états de TVA.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.tabs')

    @include('partials.webapp')

    <x-cards/>

    <x-reviews/>

    <x-buttons class="justify-center"/>
</x-layout>