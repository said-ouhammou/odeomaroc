<x-layout>

    <section class="bg-white min-h-screen py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-4xl font-extrabold text-gray-900 text-center mb-8">
                Foire Aux Questions
            </h1>

            <div class="space-y-4">
                @php
                $faqs = [
                    [
                        'question' => 'Qu\'est-ce qu\'Odeo Systems propose ?',
                        'answer' => 'Odeo Systems offre des solutions de point de vente (POS) et de gestion hôtelière (PMS) pour les restaurants, pizzerias, hôtels, cafés et bars. Nos logiciels sont conçus pour simplifier et automatiser les opérations quotidiennes dans le secteur CHR.'
                    ],
                    [
                        'question' => 'Comment Odeo s\'adapte-t-il à différents types d\'établissements ?',
                        'answer' => 'Notre logiciel est conçu de manière flexible pour s\'adapter à une variété de contextes. Que vous gériez un petit café ou une chaîne d\'hôtels, Odeo peut être personnalisé pour répondre à vos besoins spécifiques.'
                    ],
                    [
                        'question' => 'Odeo propose-t-il une assistance technique ?',
                        'answer' => 'Oui, nous offrons une assistance technique complète. Notre équipe de techniciens, programmeurs et installateurs est disponible pour vous aider avec l\'installation, la formation et le support continu.'
                    ],
                    [
                        'question' => 'Puis-je essayer Odeo avant de l\'acheter ?',
                        'answer' => 'Absolument ! Nous proposons des démonstrations gratuites de nos solutions. Contactez-nous pour planifier une démo personnalisée adaptée à votre établissement.'
                    ],
                    [
                        'question' => 'Comment Odeo gère-t-il la sécurité des données ?',
                        'answer' => 'La sécurité des données est notre priorité. Nous utilisons des protocoles de cryptage avancés et des pratiques de sécurité conformes aux normes de l\'industrie pour protéger vos informations et celles de vos clients.'
                    ],
                    [
                        'question' => 'Odeo est-il compatible avec d\'autres systèmes ou logiciels ?',
                        'answer' => 'Oui, Odeo est conçu pour s\'intégrer facilement avec de nombreux systèmes tiers, y compris les systèmes de comptabilité, de gestion des stocks, et de fidélisation client. Nous pouvons discuter de vos besoins spécifiques en matière d\'intégration.'
                    ],
                ];
                @endphp

                @foreach ($faqs as $faq)
                    <div x-data="{ open: false }" class="border border-gray-200 rounded-lg overflow-hidden">
                        <button 
                            @click="open = !open" 
                            class="flex justify-between items-center w-full px-4 py-4 text-lg font-medium text-left text-gray-900 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-[#800020] focus:ring-opacity-50"
                        >
                            <span>{{ $faq['question'] }}</span>
                            <svg 
                                class="w-5 h-5 text-gray-500" 
                                :class="{'transform rotate-180': open}"
                                fill="none" 
                                stroke="currentColor" 
                                viewBox="0 0 24 24" 
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div 
                            x-show="open" 
                            x-transition:enter="transition ease-out duration-200" 
                            x-transition:enter-start="opacity-0 transform scale-95" 
                            x-transition:enter-end="opacity-100 transform scale-100" 
                            x-transition:leave="transition ease-in duration-100" 
                            x-transition:leave-start="opacity-100 transform scale-100" 
                            x-transition:leave-end="opacity-0 transform scale-95" 
                            class="px-4 py-5 bg-white"
                        >
                            <p class="text-gray-700">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <p class="text-gray-700 text-lg">Vous ne trouvez pas la réponse que vous cherchez ?</p>
                <a 
                    href="/contact" 
                    class="inline-block mt-4 px-6 py-3 bg-[#800020] text-white font-semibold rounded-lg hover:bg-[#600018] transition duration-300 focus:outline-none focus:ring-2 focus:ring-[#800020] focus:ring-opacity-50"
                >
                    Contactez-nous
                </a>
            </div>
        </div>
    </section>

</x-layout>