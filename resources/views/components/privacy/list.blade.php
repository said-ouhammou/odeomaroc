@props(['items'])

<ul class="list-disc list-inside text-gray-800 space-y-2">
    @foreach($items as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>