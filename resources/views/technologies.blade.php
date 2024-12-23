<x-layout>
<div class="bg-[#812755] text-white py-20">
    <div class="container mx-auto text-center">
        <h1 class="text-3xl font-bold">Technologies Que Nous Utilisons</h1>
        <p class="mt-2 text-lg">Explorez les outils et frameworks qui façonnent nos solutions.</p>
    </div>
</div>

<div class="container mx-auto py-10">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
        
        @foreach ($technologies as $tech)
            <div class="border rounded-lg p-6 text-center">
                <img src="{{ $tech['logo'] }}" alt="{{ $tech['name'] }}" class="w-24 h-24 mx-auto mb-4">
                <h3 class="text-xl font-semibold">{{ $tech['name'] }}</h3>
                <p class="text-gray-600 mt-2">{{ $tech['description'] }}</p> 
            </div>
        @endforeach
        
    </div>
</div>
</x-layout>
