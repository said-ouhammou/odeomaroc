<x-layout>
    <x-header/>

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
                    <a href="#" class="w-full sm:w-auto inline-block bg-[#E31837] text-white text-center px-8 py-4 rounded-full text-lg font-bold hover:bg-[#C41830] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#E31837] focus:ring-opacity-50">
                      Visionner une démo
                    </a>
                    <a href="#" class="w-full sm:w-auto inline-block bg-transparent border-2 border-[#E31837] text-white text-center px-8 py-4 rounded-full text-lg font-bold hover:bg-[#E31837] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#E31837] focus:ring-opacity-50">
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


   

   {{-- @include('partials.tabs') --}}

    <x-footer/>
</x-layout>