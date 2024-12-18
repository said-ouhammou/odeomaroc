<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Reviews extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $reviews = [
            [
                'stars' => 5,
                'title' => 'Une solution parfaite pour mon restaurant',
                'content' => 'Grâce à Odeo, la gestion de mon restaurant est devenue beaucoup plus simple. L’interface est intuitive et les fonctionnalités couvrent tout ce dont j’ai besoin.',
                'date' => 'Écrit le 1 décembre 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Un outil indispensable',
                'content' => 'Odeo a transformé la façon dont nous gérons nos réservations. Le système est rapide, fiable et très facile à utiliser.',
                'date' => 'Écrit le 3 novembre 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Support client exceptionnel',
                'content' => 'L’équipe d’Odeo est très réactive et m’a aidé à résoudre un problème en un temps record. Je recommande vivement !',
                'date' => 'Écrit le 15 octobre 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Idéal pour les hôtels',
                'content' => 'Nous utilisons Odeo dans notre hôtel et cela a simplifié la gestion des réservations et des paiements. Une solution complète.',
                'date' => 'Écrit le 30 septembre 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Parfait pour les petites entreprises',
                'content' => 'Je gère un café et Odeo m’a permis d’organiser mes ventes et mes stocks efficacement. C’est exactement ce qu’il me fallait.',
                'date' => 'Écrit le 10 septembre 2023'
            ],
            [
                'stars' => 4,
                'title' => 'Une grande aide pour les restaurateurs',
                'content' => 'Odeo m’a permis de me concentrer sur mes clients en simplifiant toutes les tâches administratives. Je ne pourrais plus m’en passer.',
                'date' => 'Écrit le 25 août 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Solution fiable et performante',
                'content' => 'J’utilise Odeo depuis plusieurs mois et je suis très satisfait de sa stabilité et de ses nombreuses fonctionnalités.',
                'date' => 'Écrit le 10 août 2023'
            ],
            [
                'stars' => 4,
                'title' => 'Une interface conviviale',
                'content' => 'Même pour quelqu’un qui n’est pas très technologique, Odeo est facile à utiliser. C’est un plaisir de travailler avec cet outil.',
                'date' => 'Écrit le 20 juillet 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Un excellent investissement',
                'content' => 'Investir dans Odeo a été une des meilleures décisions pour notre restaurant. Cela a simplifié notre gestion quotidienne.',
                'date' => 'Écrit le 5 juillet 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Fonctionnalités impressionnantes',
                'content' => 'Odeo offre tout ce qu’un établissement moderne pourrait souhaiter : gestion des stocks, des ventes, et même des rapports détaillés.',
                'date' => 'Écrit le 15 juin 2023'
            ],
        ];
    
        return view('components.reviews', ['reviews' => $reviews]);
    }
}
