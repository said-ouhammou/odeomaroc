<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\partenairesController;
use App\Http\Controllers\TechnologiesController;

Route::get('/', function () {
    $meta = [
        // Meta Tags
        "title" => "Odeo - Solutions POS et PMS au Maroc",
        "description" => "Odeo - Votre partenaire au Maroc pour l'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.",
        "keywords" => "Odeo, caisse enregistreuse Maroc, POS Maroc, PMS Maroc, matériel caisse Maroc, solutions pour entreprises Maroc",
        "robots" => "index, follow", 
        "author" => "Odeo Systems",
    
        // Open Graph Meta Tags
        "graph" => [
            "title" => "Odeo - Solutions POS et PMS au Maroc",
            "description" => "Odeo - Votre partenaire au Maroc pour l'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.",
            "image" => "/images/products/pos-o.png",
            "url" => "https://www.odeo.ma", 
            "type" => "website", 
            "locale" => "fr_FR", 
            "site_name" => "Odeo Systems", 
        ],
    
        // Twitter Meta Tags
        "twitter" => [
            "card" => "summary_large_image",
            "title" => "Odeo - Solutions POS et PMS au Maroc",
            "description" => "Odeo - Votre partenaire au Maroc pour l'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.",
            "image" => "/images/products/pos-o.png",
            "site" => "@OdeoSystems", // Twitter handle
        ],
    ];
    
    return view('welcome',['meta'=>$meta]);
});

Route::get('/solutions', function () {
    $meta = [
        // Meta Tags
        "title" => "Odeo - Solutions POS et PMS au Maroc",
        "description" => "Odeo - Votre partenaire au Maroc pour l'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.",
        "keywords" => "Odeo, caisse enregistreuse Maroc, POS Maroc, PMS Maroc, matériel caisse Maroc, solutions pour entreprises Maroc",
        "robots" => "index, follow", 
        "author" => "Odeo Systems",
    
        // Open Graph Meta Tags
        "graph" => [
            "title" => "Odeo - Solutions POS et PMS au Maroc",
            "description" => "Odeo - Votre partenaire au Maroc pour l'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.",
            "image" => "/images/products/pos-o.png",
            "url" => "https://www.odeo.ma", 
            "type" => "website", 
            "locale" => "fr_FR", 
            "site_name" => "Odeo Systems", 
        ],
    
        // Twitter Meta Tags
        "twitter" => [
            "card" => "summary_large_image",
            "title" => "Odeo - Solutions POS et PMS au Maroc",
            "description" => "Odeo - Votre partenaire au Maroc pour l'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.",
            "image" => "/images/products/pos-o.png",
            "site" => "@OdeoSystems", // Twitter handle
        ],
    ];

    return view('solution',['meta'=>$meta]);
});



Route::get('/produits', function() {
    $meta = [
        // Meta Tags
        "title" => "Odeo - Vente de Matériaux pour POS et PMS au Maroc",
        "description" => "Odeo - Votre partenaire au Maroc pour la vente de matériaux de qualité adaptés aux systèmes de caisses enregistreuses (POS) et PMS. Trouvez le matériel idéal pour améliorer l'efficacité de votre entreprise.",
        "keywords" => "Odeo, matériel POS Maroc, matériel PMS Maroc, fournitures pour entreprises Maroc, équipements POS Maroc, matériel pour caisses enregistreuses, vente matériel Maroc",
        "robots" => "index, follow",
        "author" => "Odeo Systems",
    
        // Open Graph Meta Tags
        "graph" => [
            "title" => "Odeo - Vente de Matériaux pour POS et PMS au Maroc",
            "description" => "Odeo - Votre partenaire au Maroc pour la vente de matériaux de qualité adaptés aux systèmes de caisses enregistreuses (POS) et PMS. Trouvez le matériel idéal pour améliorer l'efficacité de votre entreprise.",
            "image" => "/images/products/pos-o.png",
            "url" => "https://www.odeo.ma/produits", 
            "type" => "website", 
            "locale" => "fr_FR", 
            "site_name" => "Odeo Systems", 
        ],
    
        // Twitter Meta Tags
        "twitter" => [
            "card" => "summary_large_image",
            "title" => "Odeo - Vente de Matériaux pour POS et PMS au Maroc",
            "description" => "Odeo - Votre partenaire au Maroc pour l'installation de systèmes de caisses enregistreuses (POS) et PMS, ainsi que la vente de matériaux adaptés à votre entreprise.",
            "image" => "/images/products/pos-o.png",
            "site" => "@OdeoSystems", // Twitter handle
        ],
    ];

    return view('products',['meta'=>$meta]);
});

Route::get('/politique-de-protection-de-la-vie-privee', function () {
    $meta = [
        // Meta Tags
        "title" => "Odeo - Politique de Protection de la Vie Privée",
        "description" => "Odeo - Découvrez la politique de protection de la vie privée d'Odeo Systems. Comment nous protégeons vos données personnelles et respectons votre confidentialité.",
        "keywords" => "Odeo, politique de confidentialité, protection des données, vie privée Maroc, données personnelles, confidentialité, sécurité des données",
        "robots" => "index, follow", 
        "author" => "Odeo Systems",
    
        // Open Graph Meta Tags
        "graph" => [
            "title" => "Odeo - Politique de Protection de la Vie Privée",
            "description" => "Odeo - Découvrez la politique de protection de la vie privée d'Odeo Systems. Comment nous protégeons vos données personnelles et respectons votre confidentialité.",
            "image" => "/images/logo.png",
            "url" => "https://www.odeo.ma/politique-de-protection-de-la-vie-privee", 
            "type" => "website", 
            "locale" => "fr_FR", 
            "site_name" => "Odeo Systems", 
        ],
    
        // Twitter Meta Tags
        "twitter" => [
            "card" => "summary_large_image", 
            "title" => "Odeo - Politique de Protection de la Vie Privée",
            "description" => "Odeo - Découvrez la politique de protection de la vie privée d'Odeo Systems. Comment nous protégeons vos données personnelles et respectons votre confidentialité.",
            "image" => "/images/products/logo.png",
            "site" => "@OdeoSystems", 
        ],
    ];
    

    return view('privacy-policy',['meta'=>$meta]);
});

Route::get('/condition-generale', function () {
    $meta = [
        // Meta Tags
        "title" => "Odeo - Conditions Générales de Vente et d'Utilisation",
        "description" => "Odeo - Découvrez les conditions générales de vente et d'utilisation de nos services. Consultez nos termes pour une meilleure compréhension des services fournis et des droits d'utilisation.",
        "keywords" => "Odeo, conditions générales, termes et conditions, politique de vente, conditions d'utilisation, services POS et PMS, entreprise Maroc",
        "robots" => "index, follow", 
        "author" => "Odeo Systems",
    
        // Open Graph Meta Tags
        "graph" => [
            "title" => "Odeo - Conditions Générales de Vente et d'Utilisation",
            "description" => "Odeo - Découvrez les conditions générales de vente et d'utilisation de nos services. Consultez nos termes pour une meilleure compréhension des services fournis et des droits d'utilisation.",
            "image" => "/images/logo.png",
            "url" => "https://www.odeo.ma/condition-generale", 
            "type" => "website", 
            "locale" => "fr_FR", 
            "site_name" => "Odeo Systems", 
        ],
    
        // Twitter Meta Tags
        "twitter" => [
            "card" => "summary_large_image", 
            "title" => "Odeo - Conditions Générales de Vente et d'Utilisation",
            "description" => "Odeo - Découvrez les conditions générales de vente et d'utilisation de nos services. Consultez nos termes pour une meilleure compréhension des services fournis et des droits d'utilisation.",
            "image" => "/images/logo.png",
            "site" => "@OdeoSystems", 
        ],
    ];
    
    return view('terms',['meta'=>$meta]);
});

Route::get('/a-propos', function () {
    $meta = [
        // Meta Tags
        "title" => "Odeo - À Propos de Nous",
        "description" => "Odeo - Découvrez notre histoire, notre mission et nos valeurs. Nous sommes un fournisseur de solutions POS et PMS au Maroc, dédiés à améliorer la gestion de votre entreprise avec des technologies innovantes.",
        "keywords" => "Odeo, à propos de nous, entreprise Maroc, solutions POS, solutions PMS, technologie d'entreprise, systèmes de caisse Maroc, solutions de gestion",
        "robots" => "index, follow", 
        "author" => "Odeo Systems",
    
        // Open Graph Meta Tags
        "graph" => [
            "title" => "Odeo - À Propos de Nous",
            "description" => "Odeo - Découvrez notre histoire, notre mission et nos valeurs. Nous sommes un fournisseur de solutions POS et PMS au Maroc, dédiés à améliorer la gestion de votre entreprise avec des technologies innovantes.",
            "image" => "/images/logo.png",
            "url" => "https://www.odeo.ma/a-propos", 
            "type" => "website", 
            "locale" => "fr_FR", 
            "site_name" => "Odeo Systems", 
        ],
    
        // Twitter Meta Tags
        "twitter" => [
            "card" => "summary_large_image", 
            "title" => "Odeo - À Propos de Nous",
            "description" => "Odeo - Découvrez notre histoire, notre mission et nos valeurs. Nous sommes un fournisseur de solutions POS et PMS au Maroc, dédiés à améliorer la gestion de votre entreprise avec des technologies innovantes.",
            "image" => "/images/logo.png",
            "site" => "@OdeoSystems", 
        ],
    ];
    

    return view('about',['meta'=>$meta]);
});


Route::get('/faq', function () {
    $meta = [
        // Meta Tags
        "title" => "Odeo - Foire aux Questions (FAQ)",
        "description" => "Odeo - Trouvez des réponses à vos questions fréquentes concernant nos solutions POS et PMS, ainsi que nos services et produits. Obtenez des informations pratiques sur l'installation et l'utilisation de nos systèmes.",
        "keywords" => "Odeo, FAQ, questions fréquentes, support client, solutions POS, solutions PMS, installation POS, services Odeo",
        "robots" => "index, follow", 
        "author" => "Odeo Systems",
    
        // Open Graph Meta Tags
        "graph" => [
            "title" => "Odeo - Foire aux Questions (FAQ)",
            "description" => "Odeo - Trouvez des réponses à vos questions fréquentes concernant nos solutions POS et PMS, ainsi que nos services et produits. Obtenez des informations pratiques sur l'installation et l'utilisation de nos systèmes.",
            "image" => "/images/logo.png",
            "url" => "https://www.odeo.ma/faq", 
            "type" => "website", 
            "locale" => "fr_FR", 
            "site_name" => "Odeo Systems", 
        ],
    
        // Twitter Meta Tags
        "twitter" => [
            "card" => "summary_large_image", 
            "title" => "Odeo - Foire aux Questions (FAQ)",
            "description" => "Odeo - Trouvez des réponses à vos questions fréquentes concernant nos solutions POS et PMS, ainsi que nos services et produits. Obtenez des informations pratiques sur l'installation et l'utilisation de nos systèmes.",
            "image" => "/images/logo.png",
            "site" => "@OdeoSystems", 
        ],
    ];
    
    return view('faq',['meta'=>$meta]);
});

Route::get('/contact', function () {
    $meta = [
        // Meta Tags
        "title" => "Odeo - Contactez-Nous",
        "description" => "Odeo - Contactez notre équipe pour toute question ou demande concernant nos solutions POS et PMS au Maroc. Nous sommes là pour vous aider à choisir la meilleure solution pour votre entreprise.",
        "keywords" => "Odeo, contact, support, solutions POS, solutions PMS, assistance, service client Maroc, contact Odeo Systems",
        "robots" => "index, follow", 
        "author" => "Odeo Systems",
    
        // Open Graph Meta Tags
        "graph" => [
            "title" => "Odeo - Contactez-Nous",
            "description" => "Odeo - Contactez notre équipe pour toute question ou demande concernant nos solutions POS et PMS au Maroc. Nous sommes là pour vous aider à choisir la meilleure solution pour votre entreprise.",
            "image" => "/images/s/ss.jpg",
            "url" => "https://www.odeo.ma/contact", 
            "type" => "website", 
            "locale" => "fr_FR", 
            "site_name" => "Odeo Systems", 
        ],
    
        // Twitter Meta Tags
        "twitter" => [
            "card" => "summary_large_image", 
            "title" => "Odeo - Contactez-Nous",
            "description" => "Odeo - Contactez notre équipe pour toute question ou demande concernant nos solutions POS et PMS au Maroc. Nous sommes là pour vous aider à choisir la meilleure solution pour votre entreprise.",
            "image" => "/images/s/ss.jpg",
            "site" => "@OdeoSystems", 
        ],
    ];
    

    return view('contact',['meta'=>$meta]);
});


Route::get('/technologies', [TechnologiesController::class, 'technologies']);
Route::get('/partenaires', [partenairesController::class, 'partenairesList']);
Route::get('/plan-du-site', function () {
    return view('site-map');
});

Route::get('/nos-clients', function () {
    $meta = [
        // Meta Tags
        "title" => "Odeo - Contactez-Nous",
        "description" => "Odeo - Contactez notre équipe pour toute question ou demande concernant nos solutions POS et PMS au Maroc. Nous sommes là pour vous aider à choisir la meilleure solution pour votre entreprise.",
        "keywords" => "Odeo, contact, support, solutions POS, solutions PMS, assistance, service client Maroc, contact Odeo Systems",
        "robots" => "index, follow", 
        "author" => "Odeo Systems",
    
        // Open Graph Meta Tags
        "graph" => [
            "title" => "Odeo - Contactez-Nous",
            "description" => "Odeo - Contactez notre équipe pour toute question ou demande concernant nos solutions POS et PMS au Maroc. Nous sommes là pour vous aider à choisir la meilleure solution pour votre entreprise.",
            "image" => "/images/s/ss.jpg",
            "url" => "https://www.odeo.ma/contact", 
            "type" => "website", 
            "locale" => "fr_FR", 
            "site_name" => "Odeo Systems", 
        ],
    
        // Twitter Meta Tags
        "twitter" => [
            "card" => "summary_large_image", 
            "title" => "Odeo - Contactez-Nous",
            "description" => "Odeo - Contactez notre équipe pour toute question ou demande concernant nos solutions POS et PMS au Maroc. Nous sommes là pour vous aider à choisir la meilleure solution pour votre entreprise.",
            "image" => "/images/s/ss.jpg",
            "site" => "@OdeoSystems", 
        ],
    ];
    

    return view('customers',['meta'=>$meta]);
});

Route::get('/{slug}', [ListingsController::class,'index']);
Route::get('/articles/{slug}', [BlogController::class, 'index']);



Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

