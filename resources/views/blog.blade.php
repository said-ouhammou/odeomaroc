<x-layout :meta="$meta">
    @if($blog)
    <section class="bg-[#f9f5f2] text-[#4a1d34]">
        <section class="w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mt-auto mx-auto relative overflow-hidden bg-[#4a1d34]">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="text-center space-y-8">
                    <h1 class="text-[#f9f5f2] text-xl sm:text-3xl font-bold leading-tight">
                        {{$blog['title']}}
                    </h1>
                    <p class="text-[#f9f5f2] text-md max-w-2xl mx-auto">
                        {{$blog['short_description']}}
                    </p>
                    <a href="#content" class="inline-block bg-[#f9f5f2] text-[#4a1d34] font-semibold py-3 px-6 rounded-full hover:bg-opacity-90 transition duration-300">
                        Lire l'article
                    </a>
                </div>
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-#4a1d34 opacity-50"></div>
        </section>
        
        <section id="content" class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <article class="lg:col-span-2 space-y-8">
                        <h2 class="text-3xl font-bold "> {{$blog['title']}}</h2>
                        <div class="flex items-center space-x-4 text-sm text-gray-600">
                            <span> {{$blog['published_at']}}</span>
                            <span>|</span>
                            <span>Par  {{$blog['author']}}</span>
                        </div>
                        <img src="{{ asset($blog['image']['src']) }}" alt="{{ $blog['image']['alt'] }}" class="w-full h-[400px] object-cover object-top rounded-lg shadow-lg">
                        <div class="prose max-w-none">
                        
                            {{-- contet --}}
                            {!! $blog['content'] !!}

                        
                        </div>
                        <div class="flex justify-between items-center border-t border-b py-4">
                            <a href="/articles/{{$blog['pagination']['prev']}}" class="flex items-center space-x-2 text-[#4a1d34] hover:text-opacity-80 transition duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                                <span>Article précédent</span>
                            </a>
                            <a href="/articles/{{$blog['pagination']['next']}}" class="flex items-center space-x-2 text-[#4a1d34] hover:text-opacity-80 transition duration-300">
                                <span>Article suivant</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l7-7m0 0l-7-7m7 7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </article>
                    <aside class="space-y-8">
                        <div class="bg-[#4a1d34] text-[#f9f5f2] p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-semibold mb-4">À propos de l'agence Odeo</h3>
                            <p class="mb-6">Nous sommes une agence basée à Marrakech, spécialisée dans la vente de systèmes POS et PMS modernes. Notre mission est d’aider les entreprises marocaines à optimiser leur gestion et améliorer leur efficacité grâce à des solutions technologiques innovantes adaptées à leurs besoins.</p>
                            <a href="/a-propos" class="block w-full text-center bg-[#f9f5f2] text-[#4a1d34] font-semibold py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">En savoir plus</a>
                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-semibold mb-4">Plus d'articles</h3>
                            <ul class="space-y-4">
                                @unless (!$blog['more_blogs'])
                                    @foreach($blog['more_blogs'] as $b)
                                    <li>
                                        <a href="/articles/{{$b['slug']}}" class="flex items-center space-x-4 group">
                                            <div class="flex-shrink-0 w-16 h-16 bg-gray-200 rounded-md overflow-hidden">
                                                <img src="{{asset($b['image']['src'])}}" alt="{{$b['image']['alt']}}" class="w-full h-full object-cover">
                                            </div>
                                            <div class="flex-grow">
                                                <h4 class="font-medium group-hover:text-[#4a1d34] transition duration-300">{{$b['title']}}</h4>
                                                <p class="text-sm text-gray-600">{{$b['published_at']}}</p>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                @endunless
                               
                            </ul>
                        </div>
                        <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                            <h3 class="text-xl font-semibold mb-4">Abonnez-vous à notre newsletter</h3>
                            <p class="mb-4 text-sm">Restez informé des dernières tendances et innovations en matière de PMS et POS.</p>
                            <form class="space-y-4">
                                <input type="email" placeholder="Votre adresse e-mail" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-#4a1d34">
                                <button type="submit" class="w-full bg-[#4a1d34] text-[#f9f5f2] font-semibold py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">S'abonner</button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </section>
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