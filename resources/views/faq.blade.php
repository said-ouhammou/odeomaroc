<x-layout>
    <x-header/>

    <section class="bg-[#1C1C1C] min-h-screen relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <h1 class="text-white text-4xl sm:text-5xl font-bold leading-tight mb-12">
                Foire Aux Questions
            </h1>

            <div class="space-y-6">
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
                    <div x-data="{ open: false }" class="border-b border-gray-700">
                        <button @click="open = !open" class="flex justify-between items-center w-full py-4 text-left">
                            <span class="text-lg font-medium text-white">{{ $faq['question'] }}</span>
                            <svg class="w-6 h-6 text-white" :class="{'rotate-180': open}" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div x-show="open" class="pb-4">
                            <p class="text-gray-300">{{ $faq['answer'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 text-center">
                <p class="text-white text-lg">Vous ne trouvez pas la réponse que vous cherchez ?</p>
                <a href="#contact" class="inline-block mt-4 px-6 py-3 bg-[#800020] text-white font-semibold rounded-lg hover:bg-[#600018] transition duration-300">Contactez-nous</a>
            </div>
        </div>

        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1C1C1C] to-black opacity-50"></div>
    </section>

    <x-footer/>
</x-layout>