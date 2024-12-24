<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="description" content="Odeo - Votre partenaire au Maroc pour l'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.">
    <meta name="keywords" content="Odeo, caisse enregistreuse Maroc, POS Maroc, PMS Maroc, matériel caisse Maroc, solutions pour entreprises Maroc">
    <meta name="author" content="Odeo Agency">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Odeo - Solutions POS et PMS au Maroc">
    <meta property="og:description" content="Odeo fournit des solutions complètes pour la gestion de vos entreprises au Maroc, incluant des systèmes POS, PMS et la vente de matériaux.">
    <meta property="og:image" content="{{asset('/images/products/pos-o.png')}}">
    <meta property="og:url" content="https://www.odeo.ma">
    <meta property="og:type" content="website">

    <title>Odeo - Caisse enregistreuse et PMS au Maroc</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('/images/favicon.png')}}">

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
