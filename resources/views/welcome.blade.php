<x-layout :meta="$meta">
  {{-- home --}}
  @include('partials.hero')
  {{-- client --}}
  <x-client-carousel/>
  {{-- products --}}
  <x-products/>
  {{-- tab --}}
  @include('partials.home-tabs')
  {{-- stats --}}
  <x-cards/>
  {{-- support --}}
  <x-support-com/>
  {{-- blogs --}}
  @include('partials.blogs')
  {{-- reviews --}}
  <x-reviews/>
</x-layout>