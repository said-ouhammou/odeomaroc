<x-layout>
 

  {{-- home --}}
  @include('partials.hero')

  {{-- client --}}
  <x-client-carousel/>
  
  {{-- products --}}
  <x-products/>

  {{-- tab --}}

  @include('partials.tabs')
  
  {{-- stats --}}
  <x-cards/>

  {{-- support --}}
  <x-support-com/>

  {{-- reviews --}}
  <x-reviews/>

</x-layout>