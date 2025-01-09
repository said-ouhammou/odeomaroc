<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Blogs extends Component
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
        $blogs = [
            [
                "id" => 1,
                "title" => "Simplifiez la gestion de votre boutique",
                "slug" => "caisse-enregistreuse-boutique",
                "short_description" => "Odeo propose une solution complète pour optimiser la gestion des ventes et des stocks dans votre boutique.",
                "description" => "Avec Odeo, facilitez la gestion de votre boutique grâce à une caisse intuitive, un suivi des stocks précis et des rapports détaillés pour améliorer vos performances.",
                "image" => [
                    "url" => "/images/b/boutique.jpg",
                    "alt" => "odeo - caisse enregistreuse - boutique",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des stocks avec Odeo Inventory",
                        "text" => "Évitez les ruptures et maîtrisez vos stocks grâce à un suivi en temps réel et des alertes personnalisées.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Gestion des stocks avec Odeo Inventory",
                        ],
                        "features" => [
                            'Suivez vos stocks en <span class="font-semibold">temps réel</span> avec des alertes automatiques.',
                            "Générez des rapports pour analyser les tendances de vente et optimiser vos commandes.",
                            "Gérez vos fournisseurs et automatisez vos approvisionnements.",
                            "Réduisez le gaspillage grâce à un suivi précis des produits périssables.",
                        ],
                    ],
                    [
                        "title" => "Ventes et paiements simplifiés",
                        "text" => "Gérez vos ventes avec efficacité grâce à une interface simple et rapide qui prend en charge plusieurs moyens de paiement.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Ventes et paiements simplifiés avec Odeo POS",
                        ],
                        "features" => [
                            "Acceptez plusieurs moyens de paiement : espèces, cartes, et paiements mobiles.",
                            "Offrez une expérience d'achat fluide avec une gestion rapide des transactions.",
                            "Impression des tickets et gestion des reçus pour une transparence totale.",
                            "Gérez facilement les retours et les échanges avec un suivi intégré.",
                        ],
                    ],
                    [
                        "title" => "Rapports et analyses pour booster vos performances",
                        "text" => "Obtenez des rapports détaillés sur vos ventes, vos marges et vos produits les plus performants.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Rapports et analyses avec Odeo",
                        ],
                        "features" => [
                            "Analyse des ventes par produit, catégorie ou période.",
                            "Rapports financiers clairs pour un suivi précis.",
                            "Identifiez vos produits phares pour maximiser vos bénéfices.",
                            "Suivez les performances de vos équipes de vente avec des données détaillées.",
                        ],
                    ],
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Boutiques au Maroc",
                    "description" => "Découvrez les solutions POS d'Odeo pour boutiques au Maroc. Simplifiez la gestion de vos ventes et améliorez l'expérience client avec des systèmes performants et adaptés.",
                    "keywords" => "Odeo, POS boutique Maroc, caisse enregistreuse boutique, système POS Maroc, gestion boutique, équipements POS Maroc, solutions pour boutiques",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Boutiques au Maroc",
                        "description" => "Découvrez les solutions POS d'Odeo pour boutiques au Maroc. Simplifiez la gestion de vos ventes et améliorez l'expérience client avec des systèmes performants et adaptés.",
                        "image" => "/images/b/boutique.jpg",
                        "url" => "https://www.odeo.ma/boutique",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Boutiques au Maroc",
                        "description" => "Découvrez les solutions POS d'Odeo pour boutiques au Maroc. Simplifiez la gestion de vos ventes et améliorez l'expérience client avec des systèmes performants et adaptés.",
                        "image" => "/images/b/boutique.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
        ];

        return view('components.blogs');
    }
}
