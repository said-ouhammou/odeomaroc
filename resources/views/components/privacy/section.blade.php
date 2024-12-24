@props(['title'])

<section class="py-4" {{ $attributes->merge(['class' => 'mb-12']) }}>
    <h2 class="text-2xl font-bold text-[#4a1d34] mb-6">{{ $title }}</h2>
    <div class="text-gray-800 space-y-4">
        {{ $slot }}
    </div>
</section>