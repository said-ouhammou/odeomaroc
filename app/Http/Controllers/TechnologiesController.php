<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechnologiesController extends Controller
{
    public function technologies()
    {
        // $technologies = [
        //     [
        //         'name' => 'React.js',
        //         'description' => 'Une bibliothèque JavaScript pour construire des interfaces utilisateur.',
        //         'logo' => '/images/react.png', // Adjust the path to your assets
        //         'link' => '#'
        //     ],
        //     [
        //         'name' => 'Vue.js',
        //         'description' => 'Un framework JavaScript progressif pour créer des interfaces utilisateur.',
        //         'logo' => '/images/vue.png',
        //         'link' => '#'
        //     ],
        //     [
        //         'name' => 'Laravel',
        //         'description' => 'Un framework PHP pour le développement d\'applications web élégantes.',
        //         'logo' => '/images/laravel.png',
        //         'link' => '#'
        //     ],
        //     // Add more technologies here
        // ];

        $technologies = [
            [
                'name' => '.Net',
                'description' => '.NET est une plateforme de développement open-source polyvalente créée par Microsoft. Elle permet de créer des applications web, mobiles et cloud performantes.',
                'logo' => 'http://localhost:8000/images/technologies/net.png',
            ],
            [
                'name' => 'C#',
                'description' => 'C# est un langage de programmation puissant et polyvalent, conçu pour développer des applications modernes et sécurisées sur la plateforme .NET.',
                'logo' => 'http://localhost:8000/images/technologies/csharp.svg',
            ],
            [
                'name' => 'ASP',
                'description' => 'ASP.NET est un framework open-source utilisé pour créer des applications web robustes et dynamiques, adapté aux entreprises de toutes tailles.',
                'logo' => 'http://localhost:8000/images/technologies/asp.svg',
            ],
            [
                'name' => 'WPF',
                'description' => 'Windows Presentation Foundation (WPF) est un framework dédié aux applications de bureau, offrant des interfaces utilisateurs riches et interactives.',
                'logo' => 'http://localhost:8000/images/technologies/wpf.png'
            ],
            [
                'name' => 'PostgreSQL',
                'description' => 'PostgreSQL est une base de données relationnelle open-source, réputée pour sa robustesse, ses performances élevées et son extensibilité.',
                'logo' => 'http://localhost:8000/images/technologies/postgreSql.svg',
            ],
            [
                'name' => 'SQL Server',
                'description' => 'SQL Server est une base de données puissante développée par Microsoft, idéale pour les applications professionnelles et les analyses de données.',
                'logo' => 'http://localhost:8000/images/technologies/sqlServer.svg',
            ],
            [
                'name' => 'SQLite',
                'description' => 'SQLite est une base de données légère et autonome, idéale pour les applications mobiles, les projets embarqués et les solutions locales.',
                'logo' => 'http://localhost:8000/images/technologies/sqlLite.svg',
            ],
            [
                'name' => 'MySQL',
                'description' => 'MySQL est une base de données populaire et open-source, utilisée pour construire des applications web évolutives et performantes.',
                'logo' => 'http://localhost:8000/images/technologies/mysql.svg'
            ],
            [
                'name' => 'Laravel',
                'description' => "Laravel est un framework PHP élégant et robuste, conçu pour simplifier le développement d'applications web modernes et performantes.",
                'logo' => 'http://localhost:8000/images/technologies/laravel.svg',
            ],
        ];

        return view('technologies', compact('technologies'));
    }

}
