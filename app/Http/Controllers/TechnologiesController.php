<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnologiesController extends Controller
{
    public function technologies()
    {
        $meta = [
            // Meta Tags
            "title" => "Odeo - Technologies de Solutions POS et PMS au Maroc",
            "description" => "Odeo - Découvrez les technologies innovantes derrière nos solutions de caisses enregistreuses (POS) et PMS. Nous offrons des systèmes modernes et adaptés aux besoins spécifiques de votre entreprise.",
            "keywords" => "Odeo, technologies POS, technologies PMS, systèmes de caisse, innovation POS, solutions technologiques pour entreprises Maroc",
            "robots" => "index, follow", 
            "author" => "Odeo Systems",
        
            // Open Graph Meta Tags
            "graph" => [
                "title" => "Odeo - Technologies de Solutions POS et PMS au Maroc",
                "description" => "Odeo - Découvrez les technologies innovantes derrière nos solutions de caisses enregistreuses (POS) et PMS. Nous offrons des systèmes modernes et adaptés aux besoins spécifiques de votre entreprise.",
                "image" => "/images/logo.png",
                "url" => "https://www.odeo.ma/technologies", 
                "type" => "website", 
                "locale" => "fr_FR", 
                "site_name" => "Odeo Systems", 
            ],
        
            // Twitter Meta Tags
            "twitter" => [
                "card" => "summary_large_image", 
                "title" => "Odeo - Technologies de Solutions POS et PMS au Maroc",
                "description" => "Odeo - Découvrez les technologies innovantes derrière nos solutions de caisses enregistreuses (POS) et PMS. Nous offrons des systèmes modernes et adaptés aux besoins spécifiques de votre entreprise.",
                "image" => "/images/logo.png",
                "site" => "@OdeoSystems", 
            ],
        ];

        $technologies = [
            [
                'name' => '.Net',
                'description' => '.NET est une plateforme de développement open-source polyvalente créée par Microsoft. Elle permet de créer des applications web, mobiles et cloud performantes.',
                'logo' => '/images/technologies/net.png',
            ],
            [
                'name' => 'C#',
                'description' => 'C# est un langage de programmation puissant et polyvalent, conçu pour développer des applications modernes et sécurisées sur la plateforme .NET.',
                'logo' => '/images/technologies/csharp.svg',
            ],
            [
                'name' => 'ASP',
                'description' => 'ASP.NET est un framework open-source utilisé pour créer des applications web robustes et dynamiques, adapté aux entreprises de toutes tailles.',
                'logo' => '/images/technologies/asp.svg',
            ],
            [
                'name' => 'WPF',
                'description' => 'Windows Presentation Foundation (WPF) est un framework dédié aux applications de bureau, offrant des interfaces utilisateurs riches et interactives.',
                'logo' => '/images/technologies/wpf.png'
            ],
            [
                'name' => 'PostgreSQL',
                'description' => 'PostgreSQL est une base de données relationnelle open-source, réputée pour sa robustesse, ses performances élevées et son extensibilité.',
                'logo' => '/images/technologies/postgreSql.svg',
            ],
            [
                'name' => 'SQL Server',
                'description' => 'SQL Server est une base de données puissante développée par Microsoft, idéale pour les applications professionnelles et les analyses de données.',
                'logo' => '/images/technologies/sqlServer.svg',
            ],
            [
                'name' => 'SQLite',
                'description' => 'SQLite est une base de données légère et autonome, idéale pour les applications mobiles, les projets embarqués et les solutions locales.',
                'logo' => '/images/technologies/sqlLite.svg',
            ],
            [
                'name' => 'MySQL',
                'description' => 'MySQL est une base de données populaire et open-source, utilisée pour construire des applications web évolutives et performantes.',
                'logo' => '/images/technologies/mysql.svg'
            ],
            [
                'name' => 'Laravel',
                'description' => "Laravel est un framework PHP élégant et robuste, conçu pour simplifier le développement d'applications web modernes et performantes.",
                'logo' => '/images/technologies/laravel.svg',
            ],
        ];

        return view('technologies', compact('technologies','meta'));
    }

}
