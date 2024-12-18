<x-layout>
    <x-header/>

    {{-- home --}}

    <section class="bg-[#1C1C1C] min-h-screen relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="space-y-8">
              <div class="space-y-6">
                <p class="text-white text-sm uppercase tracking-widest font-medium">
                  CAISSE ENREGISTREUSE - ODEO
                </p>
                <h1 class="text-white text-4xl sm:text-5xl font-bold leading-tight">
                  Tirez le meilleur de votre activité
                </h1>
                <p class="text-gray-300 text-ld leading-relaxed max-w-2xl">
                  Odeo, le logiciel de caisse tout-en-un et sa plateforme de paiements intégrée, équipe les meilleurs restaurants et commerçants dans plus de 165 000 emplacements dans le monde.*
                </p>
              </div>
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
      
            <!-- Image Content -->
            <div class="right max-h-[400px] grid grid-cols-2 gap-2">
                <div class="bg-[#E5E7EB] rounded-3xl p-8" style="clip-path: polygon(20% 0%, 80% 0%, 100% 0, 100% 100%, 80% 100%, 20% 100%, 0 71%, 0 26%);">
                  <img 
                    src="https://odeo.ma/images/banner/single-welcome.png" 
                    alt="POS Terminal Display" 
                    class="w-full h-auto"
                  />
                </div>
                <div class="bg-[#E5E7EB] rounded-3xl p-8">
                    <img 
                      src="https://odeo.ma/images/banner/single-welcome.png" 
                      alt="POS Terminal Display" 
                      class="w-full h-auto"
                    />
                </div>
                
            </div>
          </div>
        </div>


        
      
        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#1C1C1C] to-black opacity-50"></div>
    </section>

    {{-- client --}}

    <x-client-carousel/>
    {{-- products --}}
    <x-products/>
    {{-- stats --}}
    <div class="max-w-7xl mx-auto px-10 py-16 my-8">
      <h1 class="text-3xl md:text-4xl font-bold text-center mb-16">
        Odeo équipe les meilleurs établissements au Maroc, offrant des solutions innovantes pour une gestion simplifiée et efficace.
      </h1>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-4">
          <!-- First Stat -->
          <div class="flex flex-col items-center text-center">
              <div class="flex items-center">
                  <div class="w-1 h-8 bg-red-500 mr-4 hidden md:block"></div>
                  <span class="text-5xl md:text-6xl font-bold">320+</span>
              </div>
              <p class="mt-4 text-lg">
                Plus de 320 clients satisfaits choisissent Odeo pour leurs solutions de gestion.
              </p>
          </div>

          <!-- Second Stat -->
          <div class="flex flex-col items-center text-center">
              <div class="flex items-center">
                  <div class="w-1 h-8 bg-red-500 mr-4 hidden md:block"></div>
                  <span class="text-5xl md:text-6xl font-bold">935+</span>
              </div>
              <p class="mt-4 text-lg">
                Plus de 935 appareils actifs utilisent Odeo pour une gestion optimale.
              </p>
          </div>

          <!-- Third Stat -->
          <div class="flex flex-col items-center text-center">
              <div class="flex items-center">
                  <div class="w-1 h-8 bg-red-500 mr-4 hidden md:block"></div>
                  <span class="text-5xl md:text-6xl font-bold">14+</span>
              </div>
              <p class="mt-4 text-lg">
                Présent dans plus de 14 villes à travers le Maroc.
              </p>
          </div>
      </div>
  </div>

  {{-- support --}}
  <div class="bg-[#f8f5f2] py-6">
  <div class="max-w-7xl mx-auto px-10 py-16 bg-[#812755] rounded-[50px] mx-2">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- Text Content -->
        <div class="max-w-xl">
          <h2 class="text-3xl md:text-4xl font-bold mb-8 text-white">Un support illimité et personnalisé 24h/24 et 7j/7 </h2>
            <p class="text-md md:text-lg leading-relaxed mb-8 text-white">
              Avec des solutions innovantes et un accompagnement sur mesure, Odeo est bien plus qu’un simple outil de gestion – c’est votre allié pour faire grandir votre entreprise au quotidien.
            </p>
            <a href="#" class="w-full sm:w-auto inline-block bg-white border-2 border-white text-[#812755] text-center  px-8 py-4 rounded-full text-lg font-bold transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2  focus:ring-opacity-50">
              En savoir plus
            </a>
        </div>

        <!-- Image -->
        <div class="relative">
            <img 
                src="{{asset('/images/s/ss.jpg')}}" 
                alt="Professionnels Lightspeed" 
                class="w-full rounded-lg shadow-lg"
            />
        </div>
    </div>
</div>
</div>

{{-- reviews --}}
<div class="max-w-7xl mx-auto px-4 py-8 bg-[#f8f5f2]">
  <div class="grid md:grid-cols-2 lg:grid-cols-3 space-x-6 pb-4">
      <!-- Review Card 1 -->
      <div class="bg-white rounded-lg p-6  shadow-sm">
          <div class="flex mb-2">
              <div class="flex space-x-1">
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
              </div>
          </div>
          <h2 class="text-xl font-semibold mb-4">Great area especially at night</h2>
          <p class="text-gray-600 mb-6">
              This is a very charming area full of restaurants. I came here for dinner a couple of times and enjoyed the atmosphere. It was full of locals and tourists alike. There are a lot of good non-touristic restaurants unlike the more popular touristic areas.
          </p>
          <div class="space-y-2 text-sm text-gray-500">
              <p class="mt-4">Written October 3, 2023</p>
          </div>
      </div>

      <!-- Review Card 2 -->
      <div class="bg-white rounded-lg p-6 shadow-sm">
          <div class="flex mb-2">
              <div class="flex space-x-1">
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
              </div>
          </div>
          <h2 class="text-xl font-semibold mb-4">Eat Your Heart Out.</h2>
          <p class="text-gray-600 mb-6">
              Trastevere is a tranquil district of Rome sought after by tourists and locals alike. I relished my jaunts through the cobbled streets soaking up prized medieval churches, small quaint shops sporting the most unique wares, an endless array of eateries and bars and the revealing...
          </p>
          <div class="space-y-2 text-sm text-gray-500">
              <p class="mt-4">Written October 6, 2023</p>
          </div>
      </div>

      <!-- Review Card 3 -->
      <div class="bg-white rounded-lg p-6 shadow-sm">
          <div class="flex mb-2">
              <div class="flex space-x-1">
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
                  <div class="w-4 h-4 rounded-full bg-green-500"></div>
              </div>
          </div>
          <h2 class="text-xl font-semibold mb-4">Dining in Trastevere</h2>
          <p class="text-gray-600 mb-6">
              Stayed at the MZ Hotel close to the bridge to Trastevere prior to our cruise the next day. Visited Trastevere at night and had an excellent meal at La Scala Roma restaurant. One of the best meals of the trip.
          </p>
          <div class="space-y-2 text-sm text-gray-500">
              <p class="mt-4">Written October 27, 2023</p>
          </div>
      </div>
  </div>
</div>

   

   {{-- @include('partials.tabs') --}}

    <x-footer/>
</x-layout>