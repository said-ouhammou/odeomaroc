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
                'title' => 'Une solution parfaite pour mon café',
                'content' => 'Odeo m’a aidé à optimiser la gestion de mon café. La caisse tactile est rapide, et les rapports détaillés sont très utiles pour suivre les ventes.',
                'date' => 'Écrit le 12 décembre 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Idéal pour les pâtisseries',
                'content' => 'Grâce à Odeo, j’ai pu simplifier la gestion de mon stock et offrir un service plus rapide à mes clients. Une solution indispensable.',
                'date' => 'Écrit le 28 novembre 2023'
            ],
            [
                'stars' => 4,
                'title' => 'Un outil puissant pour les restaurants rapides',
                'content' => 'Odeo a changé la façon dont je gère mon restaurant rapide. L’intégration des caisses tactiles est excellente, bien que quelques options supplémentaires seraient appréciées.',
                'date' => 'Écrit le 10 novembre 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Un must pour les salons de thé',
                'content' => 'La caisse tactile d’Odeo est parfaite pour notre salon de thé. Elle est intuitive et les fonctionnalités adaptées à nos besoins.',
                'date' => 'Écrit le 1 novembre 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Un excellent système pour les boulangeries',
                'content' => 'Odeo a vraiment facilité la gestion des ventes et des paiements dans notre boulangerie. Le support client est également très réactif.',
                'date' => 'Écrit le 15 octobre 2023'
            ],
            [
                'stars' => 4,
                'title' => 'Une solution fiable pour les bars',
                'content' => 'J’utilise Odeo dans mon bar, et cela m’a beaucoup aidé à suivre les commandes et gérer les paiements. Quelques améliorations pourraient encore être apportées.',
                'date' => 'Écrit le 25 septembre 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Une gestion simplifiée pour les night-clubs',
                'content' => 'Avec Odeo, j’ai enfin un outil qui gère efficacement les entrées, les ventes et les rapports dans mon night-club. Je recommande vivement !',
                'date' => 'Écrit le 10 septembre 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Le choix parfait pour une boutique',
                'content' => 'Odeo m’a permis de suivre mes ventes et d’optimiser la gestion de mon stock dans ma boutique. Facile à utiliser et très complet.',
                'date' => 'Écrit le 20 août 2023'
            ],
            [
                'stars' => 4,
                'title' => 'Efficace pour les fast-foods',
                'content' => 'La caisse automatique d’Odeo m’a fait gagner un temps précieux dans mon fast-food. Une fonctionnalité supplémentaire pour les promotions serait un plus.',
                'date' => 'Écrit le 5 août 2023'
            ],
            [
                'stars' => 5,
                'title' => 'Une interface intuitive pour les snacks',
                'content' => 'La caisse tactile Odeo est facile à utiliser et s’adapte parfaitement à notre snack. Les rapports sont clairs et détaillés.',
                'date' => 'Écrit le 15 juillet 2023'
            ],
        ];
        
    
        return view('components.reviews', ['reviews' => $reviews]);
    }
}
