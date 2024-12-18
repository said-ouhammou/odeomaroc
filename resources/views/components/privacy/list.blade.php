@props(['items'])

<ul class="list-disc list-inside text-gray-300 space-y-2">
    @foreach($items as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>