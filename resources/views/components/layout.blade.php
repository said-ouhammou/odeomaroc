<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Meta Tags -->
    <meta name="description" content="{{ $meta['description'] ?? 'Odeo - Votre partenaire au Maroc pour l\'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.' }}">
    <meta name="keywords" content="{{ $meta['keywords'] ?? 'Odeo, caisse enregistreuse Maroc, POS Maroc, PMS Maroc, matériel caisse Maroc, solutions pour entreprises Maroc' }}">
    <meta name="robots" content="{{ $meta['robots'] ?? 'index, follow' }}">
    <meta name="author" content="{{ $meta['author'] ?? 'Odeo Systems' }}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $meta['graph']['title'] ?? 'Odeo - Solutions POS et PMS au Maroc' }}">
    <meta property="og:description" content="{{ $meta['graph']['description'] ?? 'Odeo - Votre partenaire au Maroc pour l\'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.' }}">
    <meta property="og:image" content="{{ isset($meta['graph']['image']) ? asset($meta['graph']['image']) : asset('/images/products/pos-o.png') }}">

    <meta property="og:url" content="{{ $meta['graph']['url'] ?? 'https://www.odeo.ma' }}">
    <meta property="og:type" content="{{ $meta['graph']['type'] ?? 'website' }}">
    <meta property="og:locale" content="{{ $meta['graph']['locale'] ?? 'fr_FR' }}">
    <meta property="og:site_name" content="{{ $meta['graph']['site_name'] ?? 'Odeo Systems' }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="{{ $meta['twitter']['card'] ?? 'summary_large_image' }}">
    <meta name="twitter:title" content="{{ $meta['twitter']['title'] ?? 'Odeo - Solutions POS et PMS au Maroc' }}">
    <meta name="twitter:description" content="{{ $meta['twitter']['description'] ?? 'Odeo - Votre partenaire au Maroc pour l\'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.' }}">
    <meta name="twitter:image" content="{{ isset($meta['twitter']['image']) ? asset($meta['twitter']['image']) : asset('/images/products/pos-o.png') }}">
    <meta name="twitter:site" content="{{ $meta['twitter']['site'] ?? '@OdeoSystems' }}">

    <title>{{ $meta['title'] ?? 'Odeo - Caisse enregistreuse et PMS au Maroc' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon.png') }}">

    <!-- Styles and Scripts -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="//unpkg.com/alpinejs" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <x-header/>
    {{$slot}}
    <x-footer/>
</body>
</html>
