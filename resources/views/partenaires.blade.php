<x-layout :meta="$meta">
<div class="bg-[#812755] text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-bold">Nos Partenaires</h1>
        <p class="mt-2 text-lg max-w-3xl mx-auto">Découvrez nos partenaires technologiques, dont Dell, HP et d'autres leaders du secteur. Ensemble, nous offrons des solutions POS et PMS performantes adaptées aux besoins des entreprises au Maroc</p>
    </div>
</div>

<div class="container mx-auto py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        
    @foreach($partenaires as $partenaire)
        <div class="border rounded-lg p-6 text-center">
            <img src="{{ $partenaire['logo'] }}" alt="{{ $partenaire['name'] }}" class="w-24 h-24 mx-auto mb-4">
            <h3 class="text-xl font-semibold">{{ $partenaire['name'] }}</h3>
            <p class="text-gray-600 mt-2">{{ $partenaire['description'] }}</p>
        </div>
    @endforeach
        
    </div>
</div>
</x-layout>
