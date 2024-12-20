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
                <h1 class="text-2xl font-bold mb-4 text-[#812755]">Tableau de bord intuitif pour caisse enregistreuse restaurant</h1>
                
                <p class="text-[#812755] text-lg mb-3">
                    Une visibilité complète sur votre activité en temps réel
                </p>
                <p class="text-gray-700 mb-4">
                    Notre système de caisse tactile Maroc offre un tableau de bord complet qui affiche en temps réel vos indicateurs clés de performance : chiffre d'affaires, tables ouvertes, couverts et annulations. Cette interface professionnelle permet aux restaurateurs de suivre leur activité minute par minute, avec un accès instantané aux données essentielles comme l'encaissement et la gestion des tables.
                </p>

                <div class="space-y-2">
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10H9m3 4v-4m0 0l3-3m-3 3l-3-3m12 1V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2z"/>
                            </svg>
                        </div>
                        <span>Suivi du chiffre d'affaires en MAD en temps réel</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <span>Gestion des tables et des couverts intégrée</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <span>Système TPE paiement avec statistiques instantanées</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <span>Interface intuitive adaptée aux restaurants et cafés</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                            </svg>
                        </div>
                        <span>Compatible avec tous les types de restauration</span>
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
                <h1 class="text-2xl font-bold mb-4 text-[#812755]">Analyse détaillée des ventes et consommations</h1>
                
                <p class="text-[#812755] text-lg mb-3">
                    Top 5 des produits les plus vendus avec statistiques
                </p>

                <p class="text-gray-700 mb-4">
                    Notre logiciel pour caisse enregistreuse tactile intègre un module d'analyse avancé qui permet de suivre les tendances de consommation. Visualisez facilement vos meilleures ventes, analysez les performances par catégorie de produits et optimisez votre carte grâce à des données précises sur les préférences de vos clients.
                </p>

                <div class="space-y-2">
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                            </svg>
                        </div>
                        <span>Classement automatique des produits les plus vendus</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                            </svg> 
                        </div>
                        <span>Analyse détaillée du chiffre d'affaires par produit</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <span>Export des données pour comptabilité simplifiée</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            {{-- <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg> --}}
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <span>Gestion des stocks en temps réel</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                            </svg>
                        </div>
                        <span>Rapports personnalisables pour optimiser votre menu</span>
                    </div>
                </div>
            </div> 

        </div>
    </main>

    <main class="max-w-7xl bg-[#f8f5f2] my-2 rounded-[50px]  mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="flex flex-col lg:flex-row gap-12">
            <!-- Left Column -->
            <div class="lg:w-1/2 text-black">
                <h1 class="text-2xl font-bold mb-4 text-[#812755]">Statistiques visuelles et analyses avancées</h1>
                <p class="text-[#812755] text-lg mb-3">Graphiques et indicateurs pour piloter votre activité</p>
                

                <p class="text-gray-700 mb-4">
                    Notre caisse enregistreuse automatique propose des outils d'analyse visuelle puissants pour suivre l'évolution de votre activité. Les graphiques interactifs permettent de visualiser les tendances de vente, d'identifier les pics d'activité et d'anticiper vos besoins en personnel et en stock. Un véritable outil de pilotage pour votre établissement.
                </p>

                <div class="space-y-2">
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                            </svg>   
                        </div>
                        <span>Graphiques d'évolution des ventes quotidiennes</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                            </svg> 
                        </div>
                        <span>Analyse comparative des périodes</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <span>Répartition du chiffre d'affaires par catégorie</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                            </svg>                              
                        </div>
                        <span>Tableaux de bord personnalisables</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="w-6 h-6 bg-white/10 rounded flex items-center justify-center">
                            <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>                              
                        </div>
                        <span>Export des données statistiques</span>
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

    <x-buttons/>
</x-layout>