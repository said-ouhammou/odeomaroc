<!-- ========== HEADER ========== -->
<header class="flex flex-wrap  md:justify-start md:flex-nowrap z-50 w-full bg-white border-b border-gray-200 dark:bg-neutral-800 dark:border-neutral-700">
    <nav class="relative max-w-[85rem] w-full mx-auto flex items-center justify-between gap-3 py-2 px-4 sm:px-6 lg:px-8">
  
      <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white" href="/" aria-label="Brand">
        <img src="{{asset('/images/logo.png')}}" alt="odeo" class="h-12">
      </a>
  
      <div class="md:order-3 flex justify-end items-center gap-x-1">
        <!-- Collapse Button -->
        <button type="button" class="md:hidden relative p-2 flex items-center font-medium text-[12px] rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-header-base-collapse" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation" data-hs-overlay="#hs-header-base"  >
          Menu
          <svg class="shrink-0 size-4 ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="1"/><circle cx="12" cy="5" r="1"/><circle cx="12" cy="19" r="1"/></svg>
        </button>
        <!-- End Collapse Button -->
  
        <div class="hidden md:inline-block md:me-2">
          <div class="w-px h-4 bg-gray-300 dark:bg-neutral-700"></div>
        </div>
  
        <!-- Offcanvas Toggle -->
        <button type="button" class="relative p-2 flex justify-center items-center text-sm font-semibold rounded-lg border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-transparent dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-header-base-offcanvas" aria-label="Toggle navigation" data-hs-overlay="#hs-header-base-offcanvas">
          <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M15 3v18"/><path d="m8 9 3 3-3 3"/></svg>
          <span class="sr-only">Toggle navigation</span>
          Plus
        </button>
        <!-- End Offcanvas Toggle -->
      </div>
  
      <!-- Collapse -->
      <div id="hs-header-base" class="hs-overlay [--auto-close:md] hs-overlay-open:translate-x-0 -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full z-[60] bg-white border-e basis-full grow md:order-2 md:static md:block md:h-auto md:max-w-none md:w-auto md:border-e-transparent md:transition-none md:translate-x-0 md:z-40 md:basis-auto dark:bg-neutral-800 dark:border-e-gray-700 md:dark:border-e-transparent hidden " role="dialog" tabindex="-1" aria-label="Sidebar" data-hs-overlay-close-on-resize  >
        <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
          <div class="py-2 md:py-0 px-2 md:px-0 flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
            <!-- Offcanvas Header -->
            <div class="md:hidden p-2 flex justify-between items-center">
              <h3 id="hs-header-base-label" class="font-bold text-gray-800 dark:text-white">
                Odeo - caisse enregistreuse
              </h3>
              <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-header-base">
                <span class="sr-only">Close</span>
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
              </button>
            </div>
            <!-- End Offcanvas Header -->
            <div class="grow">
              <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">
                <a href="/contact" class="w-full sm:w-auto inline-block bg-[#812755] text-white text-center px-4 py-2 rounded-full text-xs font-bold hover:bg-[#812755] transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#812755] focus:ring-opacity-50">
                  Visionner une démo
                </a>
                
                <!-- Dropdown -->
                <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                  <button id="hs-header-base-dropdown" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10 2.5-2.5L3 5"/><path d="m3 19 2.5-2.5L3 14"/><path d="M10 6h11"/><path d="M10 12h11"/><path d="M10 18h11"/></svg>
                    Logiciel de caisse
                    <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                  </button>
  
                  <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown">
                    <div class="py-1 md:px-1 space-y-0.5 ]">

                      
  
                      {{-- type d'activité --}}
                      <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">
                        <button id="hs-header-base-dropdown-sub" type="button" class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg p-2 md:px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                          Type d'activité
                          <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:-rotate-90 md:-rotate-90 duration-300 ms-auto shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                        </button>
  
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative md:w-48 hidden z-10 md:mt-2 md:!mx-[10px] md:top-0 md:end-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md dark:bg-neutral-800 dark:divide-neutral-700 before:hidden md:before:block before:absolute before:-end-5 before:top-0 before:h-full before:w-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown-sub">
                          <ul class="max-h-[400px] overflow-x-auto">
                            <li>
                              <a href="/solutions/restaurant" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Restaurant 
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/snack" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Snack
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/cafe" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Café
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/salon-de-the" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Salon de thé
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/patisserie" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Pâtisserie
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/boulangerie" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Boulangerie
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/fast-food" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Fast-food
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/night-club" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Night-club 
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/lounge" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Lounge
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/bar" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Bar
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/spa" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                spa
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/piscine" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Piscine
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/boutique" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Boutique
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/hotel" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Hôtel
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/maison-d-hotes" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Maison d’hôtes
                              </a>
                            </li>
                            <li>
                              <a href="/solutions/riad" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Riad
                              </a>
                            </li>
                            
                          </ul>
                        </div>
                      </div>

                      {{-- Nos Produits --}}
                      <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">
                        <button id="hs-header-base-dropdown-sub" type="button" class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg p-2 md:px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                          Nos Produits
                          <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:-rotate-90 md:-rotate-90 duration-300 ms-auto shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                        </button>
  
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative md:w-48 hidden z-10 md:mt-2 md:!mx-[10px] md:top-0 md:end-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md dark:bg-neutral-800 dark:divide-neutral-700 before:hidden md:before:block before:absolute before:-end-5 before:top-0 before:h-full before:w-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown-sub">
                          <ul class="max-h-[400px] overflow-x-auto">
                            <li>
                              <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Caisse enregistreuse
                              </a>
                            </li>
                            <li>
                              <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Imprimante technique 
                              </a>
                            </li>
                            <li>
                              <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Rouleau imprimante technique
                              </a>
                            </li>
                            <li>
                              <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Douchette / Lecteur code-barres
                              </a>
                            </li>
                            <li>
                              <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Totem publicitaire interactif
                              </a>
                            </li>
                            <li>
                              <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Kitchen Display - Écran de cuisine
                              </a>
                            </li>
                            <li>
                              <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                Tiroir de caisse 
                              </a>
                            </li>
                            <li>
                              <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                                PDA POS / Tablette de prise de commande
                              </a>
                            </li>                            
                          </ul>
                        </div>
                      </div>  
  
                      <a class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="/solutions">
                        Nos Solutions
                      </a>
                    </div>
                  </div>
                </div>
                <!-- End Dropdown -->

                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="/solutions">
                  <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                  Solutions
                </a>
  
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="/a-propos">
                  <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                  À propos
                </a>
  
                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
                  <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
                  Se connecter
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->
  
  <!-- Offcanvas -->
  <div id="hs-header-base-offcanvas" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-xs w-full z-[80] bg-white border-e dark:bg-neutral-800 dark:border-neutral-700 overflow-x-auto" role="dialog" tabindex="-1" aria-labelledby="hs-header-base-offcanvas-label">
    <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
      <h3 id="hs-header-base-offcanvas-label" class="font-bold text-gray-800 dark:text-white">
        Ce que propose Odeo
      </h3>
      <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600" aria-label="Close" data-hs-overlay="#hs-header-base-offcanvas">
        <span class="sr-only">Close</span>
        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
      </button>
    </div>
    <div class="p-4 ">
      <p class="text-lg font-semibold text-gray-800 uppercase">Type d'activité</p>

      <ul class="">
        <li>
          <a href="/solutions/restaurant " class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Restaurant
          </a>
        </li>
        <li>
          <a href="/solutions/snack" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Snack
          </a>
        </li>
        <li>
          <a href="/solutions/cafe" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Café
          </a>
        </li>
        <li>
          <a href="/solutions/salon-de-the" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Salon de thé
          </a>
        </li>
        <li>
          <a href="/solutions/patisserie" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Pâtisserie
          </a>
        </li>
        <li>
          <a href="/solutions/boulangerie" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Boulangerie
          </a>
        </li>
        <li>
          <a href="/solutions/fast-food" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Restauration rapide
          </a>
        </li>
        <li>
          <a href="/solutions/night-club" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Night-club
          </a>
        </li>
        <li>
          <a href="/solutions/lounge" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Lounge
          </a>
        </li>
        <li>
          <a href="/solutions/bar" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Bar
          </a>
        </li>
        <li>
          <a href="/solutions/piscine" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Piscine
          </a>
        </li>
        <li>
          <a href="/solutions/boutique" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Boutique
          </a>
        </li>
        <li>
          <a href="/solutions/hotel" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Hôtel
          </a>
        </li>
        <li>
          <a href="/solutions/maison-d-hotes" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Maison d’hôtes
          </a>
        </li>
        <li>
          <a href="/solutions/riad" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Riad
          </a>
        </li>
        
      </ul>
      <a href="/produits" class="block text-lg font-semibold text-gray-800 uppercase py-3">Nos produits</a>
      <ul class="">
        <li>
          <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Caisse enregistreuse
          </a>
        </li>
        <li>
          <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Imprimante technique 
          </a>
        </li>
        <li>
          <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Rouleau imprimante technique
          </a>
        </li>
        <li>
          <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Douchette / Lecteur code-barres
          </a>
        </li>
        <li>
          <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Totem publicitaire interactif
          </a>
        </li>
        <li>
          <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Kitchen Display - Écran de cuisine
          </a>
        </li>
        <li>
          <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Tiroir de caisse 
          </a>
        </li>
        <li>
          <a href="#" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            PDA POS / Tablette de prise de commande
          </a>
        </li>
      </ul>

      {{-- Nos services --}}
      <a href="https://www.odeosystems.com" target="_blank" class="block text-lg font-semibold text-gray-800 uppercase py-3">Nos services</a>
      <ul class="">
        <li>
          <a href="https://www.odeosystems.com/developpement-site-web" target="_blank" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Développement des sites web
          </a>
        </li>
        <li>
          <a href="https://www.odeosystems.com/developpement-application-web" target="_blank" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Développement des applications web 
          </a>
        </li>
        <li>
          <a href="https://www.odeosystems.com/developpement-application-mobile" target="_blank" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Développement des applications mobile
          </a>
        </li>
        <li>
          <a href="https://www.odeosystems.com/consultation-en-technologie" target="_blank" class="p-2 md:px-3 flex items-center text-mg text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
            Consultation en Technologie
          </a>
        </li>
      </ul>
      
    </div>
  </div>
  <!-- End Offcanvas -->