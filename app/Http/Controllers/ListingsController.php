<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function index($slug) {
        
        $listing = $this->getListing($slug);

        return view('listings.listing-details',['listing'=>$listing,'meta'=>$listing['meta']]);
    }

    public function getListing($slug = null){

        // add pages for  !!!!!
        // nos partenaires
        // technologies

        /*
            restaurant (correct)
            Snack (correct)
            Café (correct)
            Salon de thé
            Pâtisserie
            Boulangerie
            Fast-food (ou Restauration rapide)
            Night-club (ou Boîte de nuit)
            Lounge (correct)
            Bar (correct)
            Piscine
            boutique
            PMS (si c’est un système, utilisez Système PMS pour plus de clarté)
            Hôtel
            Maison d’hôtes
            Riad (correct)
            ===================================================
            Caisse enregistreuse moderne
            Système de caisse POS
            Logiciel PMS pour hôtels
            Solution de gestion des stocks
            Caisse enregistreuse pour restaurant
            POS pour commerces
            PMS pour maisons d’hôtes et riads
            Automatisation des paiements
            Caisse tactile intuitive
            Gestion des ventes et des paiements
            Solution complète de caisse
            Caisse enregistreuse pour fast-food
            POS pour bars et cafés
            Système de caisse tout-en-un
            Logiciel de gestion hôtelière PMS


            ===========================================
            Nos Produits
            Logiciel
        */
        
        $listings = [
            // DONE RESTAURANT AND BARE BOUTIQUE CAFE SALON THE, PATESSRIE , fast food night club lounge pressage
            //Piscine , Spa , Hotel ,SNACK
            //Boutique
            [
                "id" => 4,
                "title" => "Simplifiez la gestion de votre boutique",
                "slug" => "boutique",
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
            //Restaurant done
            [
                "id" => 3,
                "title" => "Simplifiez la gestion de votre restaurant",
                "slug" => "restaurant",
                "short_description" => "Odeo propose une solution tout-en-un pour la gestion des restaurants, allant des commandes à la facturation.",
                "description" => "Optimisez la gestion de votre restaurant avec Odeo. Facilitez les prises de commandes, suivez vos stocks en temps réel et améliorez l’expérience client avec des outils modernes et performants.",
                "image" => [
                    "url" => "/images/b/b-1.jpg",
                    "alt" => "odeo - caisse enregistreuse - restaurants",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des stocks avec Odeo Inventory",
                        "text" => "Assurez une gestion optimale de vos stocks et réduisez le gaspillage alimentaire avec des outils performants.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Gestion des stocks avec Odeo Inventory",
                        ],
                        "features" => [
                            'Suivez vos stocks en <span class="font-semibold">temps réel</span> pour éviter les ruptures.',
                            "Planifiez vos approvisionnements et réduisez les pertes.",
                            "Créez et gérez vos recettes avec un suivi de marge brute intégré.",
                            "Générez des rapports précis pour analyser votre stock et réduire le gaspillage.",
                        ],
                    ],
                    [
                        "title" => "Prise de commandes et paiements rapides",
                        "text" => "Avec Odeo POS, prenez des commandes en un instant et gérez vos paiements efficacement, que ce soit sur place ou en livraison.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Prise de commandes et paiements rapides avec Odeo POS",
                        ],
                        "features" => [
                            "Prise de commande rapide avec une interface intuitive.",
                            "Acceptez plusieurs moyens de paiement : espèces, cartes, et paiements mobiles.",
                            "Impression instantanée des tickets pour un service fluide.",
                            "Optimisez vos services en salle avec la gestion des tables et des commandes.",
                        ],
                    ],
                    [
                        "title" => "Rapports et analyses en temps réel",
                        "text" => "Analysez vos performances grâce aux rapports détaillés fournis par Odeo. Prenez des décisions éclairées pour développer votre activité.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Rapports et analyses avec Odeo",
                        ],
                        "features" => [
                            "Analyse des ventes par plat, heure ou table.",
                            "Rapports financiers clairs pour une gestion précise.",
                            "Suivi des produits les plus populaires pour ajuster votre menu.",
                            "Gestion des pourboires et des marges bénéficiaires.",
                        ],
                    ],
                    // 
                    // Bottom section with features for each title
                    [
                        "title" => "Boostez votre restaurant avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les restaurants au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, caisse enregistreuse Maroc, caisse tactile, caisses tactiles, caisse enregistreuse prix Maroc.",
                            "pourquoi"=>"Pourquoi choisir Odeo pour votre restaurant ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des ventes : Une interface intuitive pour gérer rapidement les commandes sur place, à emporter ou en livraison.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté à vos besoins spécifiques : Odeo s'adapte aux restaurants de toutes tailles, de la brasserie familiale aux grandes franchises.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace.",
                            ],
                            "avantages"=>"Avantages clés pour votre restaurant",
                            "Avantages_list" => [
                                "Gestion efficace des stocks (viandes, légumes, sauces, boissons).",
                                "Suivi des ventes et analyse des produits les plus populaires.",
                                "Paramétrage facile pour des promotions et des remises.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Rapport détaillé pour optimiser votre activité.",
                            ],
                            "solution"=>"Une solution pensée pour les restaurants au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ],
                    // 
                ],
                'meta' => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Restaurants au Maroc",
                    "description" => "Optimisez la gestion de votre restaurant avec les solutions POS d'Odeo. Des systèmes adaptés pour améliorer votre service client et simplifier vos opérations au Maroc.",
                    "keywords" => "Odeo, POS restaurant Maroc, caisse enregistreuse restaurant, système POS Maroc, gestion restaurant, équipements POS Maroc, solutions pour restaurants",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Restaurants au Maroc",
                        "description" => "Optimisez la gestion de votre restaurant avec les solutions POS d'Odeo. Des systèmes adaptés pour améliorer votre service client et simplifier vos opérations au Maroc.",
                        "image" => "/images/products/pos-o.png",
                        "url" => "https://www.odeo.ma/restaurant",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Restaurants au Maroc",
                        "description" => "Optimisez la gestion de votre restaurant avec les solutions POS d'Odeo. Des systèmes adaptés pour améliorer votre service client et simplifier vos opérations au Maroc.",
                        "image" => "/images/products/pos-o.png",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            //Snack done
            [
                "id" => 11,
                "title" => "Optimisez la gestion de votre snack avec Odeo POS",
                "slug" => "snack",
                "short_description" => "Odeo offre une solution complète pour gérer les commandes, les paiements et le stock dans votre snack, avec une interface simple et rapide.",
                "description" => "Avec Odeo POS, gérez efficacement les commandes et les paiements dans votre snack. Notre solution vous permet de suivre les ventes, d’optimiser le stock et d’améliorer l’expérience client en toute simplicité.",
                "image" => [
                    "url" => "/images/b/snack.jpg",
                    "alt" => "Odeo - POS pour Snack",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des commandes en temps réel",
                        "text" => "Odeo POS vous permet de prendre des commandes rapidement et efficacement, tout en optimisant le temps d'attente de vos clients.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des commandes en temps réel",
                        ],
                        "features" => [
                            "Prise de commandes rapide avec <span class=\"font-semibold\">interface tactile intuitive</span>",
                            "Suivi en temps réel de l'état des commandes",
                            "Gestion des commandes à emporter et sur place",
                        ],
                    ],
                    [
                        "title" => "Suivi des paiements et gestion des recettes",
                        "text" => "Grâce à Odeo POS, gérez vos paiements et suivez vos recettes en toute simplicité. Offrez à vos clients plusieurs options de paiement.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Suivi des paiements et gestion des recettes",
                        ],
                        "features" => [
                            "Acceptez plusieurs méthodes de paiement : carte bancaire, espèces, mobile",
                            "Suivi détaillé des paiements et de la caisse",
                            "Rapports de vente quotidiens et hebdomadaires pour optimiser votre gestion",
                        ],
                    ],
                    [
                        "title" => "Gestion des stocks simplifiée",
                        "text" => "Odeo POS permet de suivre vos stocks en temps réel, afin de réduire les pertes et optimiser vos approvisionnements.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des stocks simplifiée",
                        ],
                        "features" => [
                            "Suivi en temps réel des niveaux de stock des ingrédients",
                            "Alertes de réapprovisionnement pour éviter les ruptures",
                            "Rapports détaillés sur les produits les plus populaires et les stocks excédentaires",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre snack avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les snacks au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, caisse enregistreuse snack, caisse tactile snack, caisses tactiles, caisse enregistreuse prix snack.",
                            "pourquoi" => "Pourquoi choisir Odeo pour votre snack ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des ventes : Une interface intuitive pour gérer rapidement les commandes sur place, à emporter ou en livraison.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux snacks : Odeo s'adapte aux petits établissements et aux restaurants rapides.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace.",
                            ],
                            "avantages" => "Avantages clés pour votre snack",
                            "Avantages_list" => [
                                "Gestion efficace des stocks (snacks, boissons, condiments).",
                                "Suivi des ventes et analyse des produits les plus populaires.",
                                "Paramétrage facile pour des promotions et des remises.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Rapport détaillé pour optimiser votre activité.",
                            ],
                            "solution" => "Une solution pensée pour les snacks au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Snacks au Maroc",
                    "description" => "Odeo propose des solutions POS dédiées aux snacks au Maroc. Optimisez la gestion de vos commandes et paiements grâce à des systèmes performants et adaptés à vos besoins.",
                    "keywords" => "Odeo, POS snack Maroc, caisse enregistreuse snack, système POS Maroc, gestion snack, équipements POS Maroc, solutions pour snacks",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Snacks au Maroc",
                        "description" => "Odeo propose des solutions POS dédiées aux snacks au Maroc. Optimisez la gestion de vos commandes et paiements grâce à des systèmes performants et adaptés à vos besoins.",
                        "image" => "/images/b/snack.jpg",
                        "url" => "https://www.odeo.ma/snack",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Snacks au Maroc",
                        "description" => "Odeo propose des solutions POS dédiées aux snacks au Maroc. Optimisez la gestion de vos commandes et paiements grâce à des systèmes performants et adaptés à vos besoins.",
                        "image" => "/images/b/snack.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],
                
            ],
            //Bar
            [
                "id" => 2,
                "title" => "Simplifiez la gestion de votre bar",
                "slug" => "bar",
                "short_description" => "Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars.",
                "description" => "Optimisez la gestion de votre bar grâce à Odeo. Simplifiez les paiements, suivez vos stocks en temps réel, et proposez un service rapide et efficace pour vos clients.",
                "image" => [
                    "url" => "/images/b/bar.jpg",
                    "alt" => "odeo - caisse enregistreuse - bars",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des stocks simplifiée avec Odeo Inventory",
                        "text" => "Réduisez vos pertes et suivez vos stocks en temps réel grâce à des outils performants adaptés aux besoins des bars.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des stocks avec Odeo Inventory",
                        ],
                        "features" => [
                            'Suivi automatisé des stocks en <span class="font-semibold">temps réel</span> pour éviter les ruptures.',
                            "Gestion intuitive des recettes pour vos cocktails et menus.",
                            "Centralisez vos fournisseurs et simplifiez vos commandes.",
                            "Accédez à des rapports détaillés pour identifier les pertes ou le gaspillage.",
                        ],
                    ],
                    [
                        "title" => "Paiements rapides et sécurisés",
                        "text" => "Avec Odeo, vos clients bénéficient d'un paiement fluide et sécurisé, que ce soit au comptoir ou à la table.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Paiements rapides avec Odeo POS",
                        ],
                        "features" => [
                            "Acceptez plusieurs méthodes de paiement : espèces, cartes bancaires, et mobile.",
                            "Impression rapide des tickets et des reçus.",
                            "Gestion des pourboires intégrée pour vos employés.",
                            "Analyse des ventes par heure ou par produit pour une meilleure stratégie.",
                        ],
                    ],
                    [
                        "title" => "Rapports et analyses en temps réel",
                        "text" => "Prenez des décisions éclairées grâce aux rapports détaillés générés par Odeo pour votre bar.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Rapports et analyses avec Odeo",
                        ],
                        "features" => [
                            "Analyse des ventes et des performances horaires.",
                            "Suivi des produits les plus vendus pour optimiser votre menu.",
                            "Rapports financiers détaillés pour une gestion claire.",
                            "Suivi des stocks pour minimiser les pertes.",
                        ],
                    ],
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Bars au Maroc",
                    "description" => "Odeo propose des solutions POS adaptées aux bars au Maroc. Simplifiez la gestion de vos commandes et paiements grâce à des systèmes modernes et performants.",
                    "keywords" => "Odeo, POS bar Maroc, caisse enregistreuse bar, système POS Maroc, gestion bar, équipements POS Maroc, solutions pour bars",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Bars au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées aux bars au Maroc. Simplifiez la gestion de vos commandes et paiements grâce à des systèmes modernes et performants.",
                        "image" => "/images/b/bar.jpg",
                        "url" => "https://www.odeo.ma/bar",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Bars au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées aux bars au Maroc. Simplifiez la gestion de vos commandes et paiements grâce à des systèmes modernes et performants.",
                        "image" => "/images/b/bar.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],  
            //Cafe        
            [
                "id" => 5,
                "title" => "Simplifiez la gestion de votre café",
                "slug" => "cafe",
                "short_description" => "Odeo offre des outils performants pour gérer les commandes, les paiements et les stocks de votre café avec facilité.",
                "description" => "Avec Odeo, concentrez-vous sur la satisfaction de vos clients pendant que nos solutions s'occupent de la gestion de votre café.",
                "image" => [
                    "url" => "/images/b/cafe.jpg",
                    "alt" => "odeo - caisse enregistreuse - café",
                ],
                "sections" => [
                    [
                        "title" => "Optimisez vos stocks avec Odeo Inventory",
                        "text" => "Planifiez vos commandes et suivez vos stocks en temps réel pour garantir un approvisionnement constant.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Optimisez vos stocks avec Odeo Inventory",
                        ],
                        "features" => [
                            'Profitez d’un <span class="font-semibold">suivi en temps réel</span> de vos ingrédients et fournitures.',
                            "Évitez les ruptures en recevant des alertes automatiques sur les faibles niveaux de stock.",
                            "Planifiez vos commandes pour éviter le surstockage ou le gaspillage.",
                            "Générez des rapports pour analyser les consommations et ajuster vos approvisionnements.",
                        ],
                    ],
                    [
                        "title" => "Simplifiez les commandes et les paiements",
                        "text" => "Améliorez l'expérience client avec une gestion rapide et efficace des commandes.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Simplifiez les commandes et les paiements avec Odeo",
                        ],
                        "features" => [
                            "Prenez les commandes à la caisse ou directement à table avec une tablette.",
                            "Acceptez tous les moyens de paiement : espèces, cartes bancaires, et paiements mobiles.",
                            "Gérez les commandes complexes comme les modifications ou les ajouts.",
                            "Assurez une rotation rapide des tables grâce à une gestion optimisée.",
                        ],
                    ],
                    [
                        "title" => "Rapports et analyses pour votre café",
                        "text" => "Suivez les performances de votre café grâce à des rapports détaillés et des insights exploitables.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Rapports et analyses pour votre café avec Odeo",
                        ],
                        "features" => [
                            "Identifiez vos produits les plus populaires pour ajuster votre menu.",
                            "Analysez vos ventes par période pour mieux anticiper vos pics d’activité.",
                            "Suivez les performances financières avec des rapports en temps réel.",
                            "Gérez les promotions et les offres spéciales avec des données précises.",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre café avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les cafés au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, caisse enregistreuse café, caisse tactile café, caisses tactiles, caisse enregistreuse prix café.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre café ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des ventes : Une interface intuitive pour gérer rapidement les commandes sur place, à emporter ou en livraison.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux cafés : Odeo s'adapte aux établissements servant des boissons et des petits repas.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace.",
                            ],
                    
                            // Avantages (Advantages for your café)
                            "avantages" => "Avantages clés pour votre café",
                            "Avantages_list" => [
                                "Gestion efficace des stocks (café, pâtisseries, boissons).",
                                "Suivi des ventes et analyse des produits les plus populaires.",
                                "Paramétrage facile pour des promotions et des remises.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Rapport détaillé pour optimiser votre activité.",
                            ],
                    
                            // Solution (Solution for café)
                            "solution" => "Une solution pensée pour les cafés au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Cafés au Maroc",
                    "description" => "Odeo fournit des solutions POS dédiées aux cafés au Maroc. Gérez vos commandes et paiements efficacement avec des systèmes modernes et intuitifs.",
                    "keywords" => "Odeo, POS café Maroc, caisse enregistreuse café, système POS Maroc, gestion café, équipements POS Maroc, solutions pour cafés",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Cafés au Maroc",
                        "description" => "Odeo fournit des solutions POS dédiées aux cafés au Maroc. Gérez vos commandes et paiements efficacement avec des systèmes modernes et intuitifs.",
                        "image" => "/images/b/cafe.jpg",
                        "url" => "https://www.odeo.ma/cafe",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Cafés au Maroc",
                        "description" => "Odeo fournit des solutions POS dédiées aux cafés au Maroc. Gérez vos commandes et paiements efficacement avec des systèmes modernes et intuitifs.",
                        "image" => "/images/b/cafe.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            //Salon the done
            [
                "id" => 12,
                "title" => "Optimisez la gestion de votre salon de thé avec Odeo POS",
                "slug" => "salon-de-the",
                "short_description" => "Odeo propose une solution intuitive pour gérer les commandes, les paiements et les stocks dans votre salon de thé, avec une interface conviviale et rapide.",
                "description" => "Avec Odeo POS, gérez efficacement vos commandes, suivez vos stocks et optimisez les paiements dans votre salon de thé. Notre solution simplifie la gestion tout en offrant une expérience client exceptionnelle.",
                "image" => [
                    "url" => "/images/b/salon-de-the.jpg",
                    "alt" => "Odeo - POS pour Salon de Thé",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des commandes simplifiée",
                        "text" => "Prenez des commandes rapidement grâce à une interface tactile simple et intuitive, idéale pour un service rapide et fluide dans votre salon de thé.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des commandes simplifiée",
                        ],
                        "features" => [
                            "Prise de commandes instantanée avec une <span class=\"font-semibold\">interface tactile conviviale</span>",
                            "Gestion des commandes pour les boissons, pâtisseries et autres produits de manière fluide",
                            "Suivi en temps réel de l'état des commandes pour une meilleure organisation",
                        ],
                    ],
                    [
                        "title" => "Suivi des paiements et gestion des recettes",
                        "text" => "Odeo POS permet de gérer les paiements en toute simplicité, que ce soit en espèces, carte bancaire ou via des paiements mobiles.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Suivi des paiements et gestion des recettes",
                        ],
                        "features" => [
                            "Paiements multiples : espèces, carte bancaire, paiement mobile",
                            "Suivi détaillé des recettes et des transactions",
                            "Rapports financiers pour une gestion optimisée du salon de thé",
                        ],
                    ],
                    [
                        "title" => "Gestion des stocks pour éviter les ruptures",
                        "text" => "Odeo POS vous aide à suivre vos stocks d'ingrédients et de produits en temps réel, afin de réduire les pertes et anticiper les réapprovisionnements.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des stocks pour éviter les ruptures",
                        ],
                        "features" => [
                            "Suivi en temps réel des stocks de thé, pâtisseries, et autres produits",
                            "Alertes automatiques de réapprovisionnement pour éviter les ruptures",
                            "Rapports détaillés sur les produits les plus populaires et les niveaux de stock",
                        ],
                    ],
                    [
                        "title" => "Optimisation du service client",
                        "text" => "Offrez à vos clients une expérience fluide et agréable avec un service rapide et des paiements sans tracas, tout en ayant une vue d'ensemble sur les performances du salon.",
                        "image" => [
                            "url" => "/images/products/odeo-service.png",
                            "alt" => "Optimisation du service client",
                        ],
                        "features" => [
                            "Amélioration de l'expérience client grâce à un service rapide et intuitif",
                            "Gestion des commandes à emporter et sur place",
                            "Statistiques en temps réel pour ajuster l'offre et optimiser le menu",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre salon de thé avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les salons de thé au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, caisse enregistreuse salon de thé, caisse tactile salon de thé, caisses tactiles, caisse enregistreuse prix salon de thé.",
                            "pourquoi" => "Pourquoi choisir Odeo pour votre salon de thé ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des ventes : Une interface intuitive pour gérer rapidement les commandes sur place, à emporter ou en livraison.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux salons de thé : Odeo s'adapte aux établissements spécialisés dans les thés, infusions et pâtisseries.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace.",
                            ],
                            "avantages" => "Avantages clés pour votre salon de thé",
                            "Avantages_list" => [
                                "Gestion efficace des stocks (thés, pâtisseries, boissons).",
                                "Suivi des ventes et analyse des produits les plus populaires.",
                                "Paramétrage facile pour des promotions et des remises.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Rapport détaillé pour optimiser votre activité.",
                            ],
                            "solution" => "Une solution pensée pour les salons de thé au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Salons de Thé au Maroc",
                    "description" => "Odeo propose des solutions POS modernes pour salons de thé au Maroc. Simplifiez la gestion des commandes et des paiements avec des systèmes adaptés à votre activité.",
                    "keywords" => "Odeo, POS salon de thé Maroc, caisse enregistreuse salon de thé, système POS Maroc, gestion salon de thé, équipements POS Maroc, solutions pour salons de thé",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Salons de Thé au Maroc",
                        "description" => "Odeo propose des solutions POS modernes pour salons de thé au Maroc. Simplifiez la gestion des commandes et des paiements avec des systèmes adaptés à votre activité.",
                        "image" => "/images/b/salon-de-the.jpg",
                        "url" => "https://www.odeo.ma/salon-de-the",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Salons de Thé au Maroc",
                        "description" => "Odeo propose des solutions POS modernes pour salons de thé au Maroc. Simplifiez la gestion des commandes et des paiements avec des systèmes adaptés à votre activité.",
                        "image" => "/images/b/salon-de-the.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            //Patesserie
            [
                "id" => 7,
                "title" => "Simplifiez la gestion de votre pâtisserie",
                "slug" => "patisserie",
                "short_description" => "Odeo propose des outils performants pour optimiser la gestion des commandes, des paiements et des stocks dans votre pâtisserie.",
                "description" => "Avec Odeo, gérez votre pâtisserie efficacement tout en offrant des produits frais et de qualité à vos clients.",
                "image" => [
                    "url" => "/images/b/patisserie.jpg",
                    "alt" => "odeo - caisse enregistreuse - pâtisserie",
                ],
                "sections" => [
                    [
                        "title" => "Gérez vos stocks avec précision",
                        "text" => "Anticipez vos besoins et réduisez vos pertes grâce à un suivi rigoureux des matières premières et produits finis.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Gérez vos stocks avec précision",
                        ],
                        "features" => [
                            "Suivez vos stocks de matières premières comme la farine, le beurre, et le chocolat en temps réel.",
                            "Recevez des alertes pour les produits à date de péremption courte.",
                            "Optimisez vos coûts grâce à un suivi détaillé des pertes et des usages.",
                            "Générez des rapports pour ajuster vos commandes selon vos besoins.",
                        ],
                    ],
                    [
                        "title" => "Optimisez les commandes et paiements",
                        "text" => "Simplifiez la prise de commandes et offrez une expérience client fluide avec Odeo.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Optimisez les commandes et paiements",
                        ],
                        "features" => [
                            "Prenez des commandes sur place, en ligne, ou par téléphone.",
                            "Proposez des paiements rapides et sécurisés via plusieurs options : cartes, espèces, ou paiements mobiles.",
                            "Gérez les réservations pour les commandes personnalisées ou les événements.",
                            "Créez des tickets de caisse clairs et détaillés pour chaque commande.",
                        ],
                    ],
                    [
                        "title" => "Analysez les performances de votre pâtisserie",
                        "text" => "Bénéficiez d'analyses détaillées pour mieux gérer votre pâtisserie et augmenter votre rentabilité.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Analysez les performances de votre pâtisserie",
                        ],
                        "features" => [
                            "Identifiez vos produits phares pour ajuster vos offres.",
                            "Analysez les tendances de vente pour prévoir vos pics d'activité.",
                            "Suivez vos marges et optimisez vos recettes grâce à des rapports détaillés.",
                            "Générez des rapports financiers précis pour une meilleure prise de décision.",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre pâtisserie avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les pâtisseries au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, caisse enregistreuse pâtisserie, caisse tactile pâtisserie, caisses tactiles, caisse enregistreuse prix pâtisserie.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre pâtisserie ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des ventes : Une interface intuitive pour gérer rapidement les commandes sur place, à emporter ou en livraison.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux pâtisseries : Odeo s'adapte aux commerces spécialisés dans la vente de pâtisseries et desserts.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace.",
                            ],
                    
                            // Avantages (Advantages for your pâtisserie)
                            "avantages" => "Avantages clés pour votre pâtisserie",
                            "Avantages_list" => [
                                "Gestion efficace des stocks (pâtisseries, ingrédients, boissons).",
                                "Suivi des ventes et analyse des produits les plus populaires.",
                                "Paramétrage facile pour des promotions et des remises.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Rapport détaillé pour optimiser votre activité.",
                            ],
                    
                            // Solution (Solution for pâtisserie)
                            "solution" => "Une solution pensée pour les pâtisseries au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Pâtisseries au Maroc",
                    "description" => "Odeo propose des systèmes POS performants pour pâtisseries au Maroc. Facilitez la gestion des ventes, commandes et paiements avec des solutions adaptées à votre activité.",
                    "keywords" => "Odeo, POS pâtisserie Maroc, caisse enregistreuse pâtisserie, système POS Maroc, gestion pâtisserie, équipements POS Maroc, solutions pour pâtisseries",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Pâtisseries au Maroc",
                        "description" => "Odeo propose des systèmes POS performants pour pâtisseries au Maroc. Facilitez la gestion des ventes, commandes et paiements avec des solutions adaptées à votre activité.",
                        "image" => "/images/b/patisserie.jpg",
                        "url" => "https://www.odeo.ma/patisserie",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Pâtisseries au Maroc",
                        "description" => "Odeo propose des systèmes POS performants pour pâtisseries au Maroc. Facilitez la gestion des ventes, commandes et paiements avec des solutions adaptées à votre activité.",
                        "image" => "/images/b/patisserie.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            //Boulangerie
            [
                "id" => 8,
                "title" => "Optimisez la gestion de votre boulangerie",
                "slug" => "boulangerie",
                "short_description" => "Odeo offre des solutions complètes pour gérer les ventes, les stocks et les commandes dans votre boulangerie.",
                "description" => "Avec Odeo, automatisez les tâches quotidiennes, réduisez les pertes et améliorez l'expérience client dans votre boulangerie.",
                "image" => [
                    "url" => "/images/b/boulangerie.jpg",
                    "alt" => "odeo - caisse enregistreuse - boulangerie",
                ],
                "sections" => [
                    [
                        "title" => "Gérez vos stocks de manière optimale",
                        "text" => "Planifiez vos achats et suivez vos ingrédients essentiels comme la farine, la levure ou le beurre grâce à des outils précis.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Gérez vos stocks de manière optimale",
                        ],
                        "features" => [
                            "Automatisez le suivi de vos stocks pour ne jamais manquer d'ingrédients.",
                            "Recevez des alertes pour les produits à date de péremption proche.",
                            "Réduisez le gaspillage avec un suivi détaillé des pertes.",
                            "Générez des rapports de stock pour ajuster vos commandes.",
                        ],
                    ],
                    [
                        "title" => "Facilitez les commandes et paiements",
                        "text" => "Offrez une expérience client rapide et efficace avec des outils adaptés aux boulangeries.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Facilitez les commandes et paiements",
                        ],
                        "features" => [
                            "Prenez des commandes sur place, en ligne ou par téléphone.",
                            "Proposez plusieurs options de paiement, y compris cartes et paiements mobiles.",
                            "Gérez les commandes spéciales pour les événements ou les commandes en gros.",
                            "Imprimez des tickets détaillés pour vos clients rapidement.",
                        ],
                    ],
                    [
                        "title" => "Analysez les performances de votre boulangerie",
                        "text" => "Comprenez les tendances de vente et identifiez les opportunités de croissance grâce à des rapports détaillés.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Analysez les performances de votre boulangerie",
                        ],
                        "features" => [
                            "Identifiez vos produits les plus vendus pour ajuster vos offres.",
                            "Suivez les ventes par heure ou par jour pour mieux planifier vos productions.",
                            "Analysez vos marges pour optimiser vos recettes et vos prix.",
                            "Générez des rapports financiers pour une gestion plus efficace.",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre boulangerie avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les boulangeries au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, caisse enregistreuse boulangerie, caisse tactile boulangerie, caisses tactiles, caisse enregistreuse prix boulangerie.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre boulangerie ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des ventes : Une interface intuitive pour gérer rapidement les commandes sur place, à emporter ou en livraison.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux boulangeries : Odeo s'adapte aux commerces spécialisés dans la vente de pains, viennoiseries et pâtisseries.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace.",
                            ],
                    
                            // Avantages (Advantages for your boulangerie)
                            "avantages" => "Avantages clés pour votre boulangerie",
                            "Avantages_list" => [
                                "Gestion efficace des stocks (pains, viennoiseries, boissons).",
                                "Suivi des ventes et analyse des produits les plus populaires.",
                                "Paramétrage facile pour des promotions et des remises.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Rapport détaillé pour optimiser votre activité.",
                            ],
                    
                            // Solution (Solution for boulangerie)
                            "solution" => "Une solution pensée pour les boulangeries au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ],
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Boulangeries au Maroc",
                    "description" => "Odeo offre des systèmes POS performants pour boulangeries au Maroc, permettant de gérer facilement les ventes, commandes et paiements. Optimisez la gestion de votre boulangerie avec nos solutions adaptées.",
                    "keywords" => "Odeo, POS boulangerie Maroc, caisse enregistreuse boulangerie, système POS Maroc, gestion boulangerie, équipements POS Maroc, solutions pour boulangeries",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Boulangeries au Maroc",
                        "description" => "Odeo offre des systèmes POS performants pour boulangeries au Maroc, permettant de gérer facilement les ventes, commandes et paiements. Optimisez la gestion de votre boulangerie avec nos solutions adaptées.",
                        "image" => "/images/b/boulangerie.jpg",
                        "url" => "https://www.odeo.ma/boulangerie",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Boulangeries au Maroc",
                        "description" => "Odeo offre des systèmes POS performants pour boulangeries au Maroc, permettant de gérer facilement les ventes, commandes et paiements. Optimisez la gestion de votre boulangerie avec nos solutions adaptées.",
                        "image" => "/images/b/boulangerie.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            //Fast Food
            [
                "id" => 13,
                "title" => "Optimisez la gestion de votre fast food avec Odeo POS",
                "slug" => "fast-food",
                "short_description" => "Odeo propose une solution rapide et intuitive pour gérer les commandes, les paiements et les stocks dans votre fast food, tout en améliorant l'efficacité du service.",
                "description" => "Avec Odeo POS, gérez rapidement les commandes, les paiements et les stocks dans votre fast food. Notre solution facilite la prise de commandes, optimise le temps de service et assure un suivi en temps réel des ventes et des stocks.",
                "image" => [
                    "url" => "/images/b/fast-food.jpg",
                    "alt" => "Odeo - POS pour Fast Food",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des commandes rapide",
                        "text" => "Odeo POS simplifie la prise de commandes grâce à une interface tactile rapide et intuitive, idéale pour le service rapide dans un fast food.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Gestion des commandes rapide",
                        ],
                        "features" => [
                            "Prise de commandes instantanée avec une <span class=\"font-semibold\">interface tactile rapide</span>",
                            "Gestion des commandes pour burgers, frites, boissons et autres produits",
                            "Suivi en temps réel de l'état des commandes pour un service fluide",
                        ],
                    ],
                    [
                        "title" => "Suivi des paiements et gestion des recettes",
                        "text" => "Odeo POS permet de gérer les paiements en toute simplicité, que ce soit en espèces, carte bancaire ou via des paiements mobiles, offrant ainsi une expérience client fluide.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Suivi des paiements et gestion des recettes",
                        ],
                        "features" => [
                            "Paiements multiples : espèces, carte bancaire, paiement mobile",
                            "Suivi des recettes et gestion des transactions en temps réel",
                            "Rapports financiers détaillés pour un suivi précis des ventes",
                        ],
                    ],
                    [
                        "title" => "Gestion des stocks efficace",
                        "text" => "Odeo POS vous aide à gérer vos stocks de manière optimale, en réduisant les pertes et en anticipant les réapprovisionnements pour les ingrédients populaires.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des stocks efficace",
                        ],
                        "features" => [
                            "Suivi des stocks en temps réel des ingrédients et produits finis",
                            "Alertes de réapprovisionnement pour éviter les ruptures de stock",
                            "Rapports détaillés sur les produits les plus populaires et leur rotation",
                        ],
                    ],
                    [
                        "title" => "Optimisation du service client",
                        "text" => "Offrez un service rapide et efficace à vos clients avec Odeo POS, tout en optimisant l'organisation du travail pour votre personnel.",
                        "image" => [
                            "url" => "/images/products/odeo-service.png",
                            "alt" => "Optimisation du service client",
                        ],
                        "features" => [
                            "Prise de commandes rapide pour un service express",
                            "Gestion efficace des commandes à emporter et sur place",
                            "Statistiques en temps réel pour ajuster l'offre en fonction de la demande",
                        ],
                    ],

                    // 
                    [
                        "title" => "Boostez votre Fast Food avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, idéales pour les restaurants de fast food au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, fast food, caisse rapide, gestion des commandes, caisse tactile fast food, caisses tactiles, caisse enregistreuse prix fast food.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre fast food ?",
                            "Pourquoi_list" => [
                                "Gestion rapide des commandes : Une interface optimisée pour des commandes rapides, que ce soit sur place ou à emporter.",
                                "Suivi en temps réel : Surveillez vos stocks, recettes, et les performances de votre établissement directement depuis votre tableau de bord.",
                                "Adapté aux restaurants à service rapide : Odeo s'adapte aux besoins spécifiques des fast food pour une gestion efficace et rapide.",
                                "Caisse tactile performante : Des caisses robustes pour des transactions rapides et un service efficace.",
                            ],
                    
                            // Avantages (Advantages for your Fast Food)
                            "avantages" => "Avantages clés pour votre fast food",
                            "Avantages_list" => [
                                "Gestion des commandes fluide et rapide, optimisée pour les pics d'afflux.",
                                "Suivi des ventes et analyse des produits populaires.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Paramétrage facile pour gérer des offres promotionnelles et des menus variés.",
                                "Rapports détaillés pour maximiser la rentabilité et l'efficacité de votre fast food.",
                            ],
                    
                            // Solution (Solution for Fast Food)
                            "solution" => "Une solution pensée pour les fast food au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer Support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ],
                    // 

                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Restauration Rapide au Maroc",
                    "description" => "Odeo propose des solutions POS adaptées à la restauration rapide au Maroc, permettant une gestion rapide et efficace des commandes et paiements. Optimisez votre service client et la gestion de votre établissement.",
                    "keywords" => "Odeo, POS restauration rapide Maroc, caisse enregistreuse fast food, système POS Maroc, gestion fast food, équipements POS Maroc, solutions pour restauration rapide",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Restauration Rapide au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées à la restauration rapide au Maroc, permettant une gestion rapide et efficace des commandes et paiements. Optimisez votre service client et la gestion de votre établissement.",
                        "image" => "/images/b/fast-food.jpg",
                        "url" => "https://www.odeo.ma/fast-food",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Restauration Rapide au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées à la restauration rapide au Maroc, permettant une gestion rapide et efficace des commandes et paiements. Optimisez votre service client et la gestion de votre établissement.",
                        "image" => "/images/b/fast-food.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            //Night Club
            [
                "id" => 2,
                "title" => "Transformez votre night club avec Odeo",
                "slug" => "night-club",
                "short_description" => "Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les night clubs.",
                "description" => "Optimisez l'efficacité de votre night club avec une caisse enregistreuse tactile et des outils de gestion avancés. Suivez vos stocks, vos ventes et gérez vos employés avec simplicité.",
                "image" => [
                    "url" => "/images/b/night-club.jpg",
                    "alt" => "Odeo - caisse enregistreuse - night club",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des stocks avec Odeo Inventory",
                        "text" => "Commandez ce qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire les pertes.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des stocks avec Odeo Inventory",
                        ],
                        "features" => [
                            "Dites adieu au comptage manuel avec des <span class=\"font-semibold\">inventaires automatisés en temps réel</span> et des <span class=\"font-semibold\">rapports de gaspillage</span>",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec Odeo",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title" => "Simplifiez la gestion des commandes avec Odeo",
                        "text" => "Optimisez l'enregistrement des commandes de vos clients avec un système rapide et intuitif, parfaitement adapté aux besoins de votre night club.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Gestion des commandes avec Odeo",
                        ],
                        "features" => [
                            "Réduction des erreurs de commande grâce à un système intuitif",
                            "Traitement rapide des paiements pour un service efficace",
                            "Suivi des ventes et performances des produits en temps réel",
                        ],
                    ],
                    [
                        "title" => "Suivi des performances avec Odeo",
                        "text" => "Obtenez des rapports détaillés sur les ventes, les stocks et la rentabilité pour mieux piloter votre night club.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Suivi des performances avec Odeo",
                        ],
                        "features" => [
                            "Accédez à des rapports détaillés sur les ventes et la rentabilité",
                            "Visualisez les performances de vos catégories avec des graphiques avancés",
                            "Optimisez vos opérations grâce à des indicateurs de performance en temps réel",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre night-club avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les night-clubs au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, caisse enregistreuse night-club, caisse tactile night-club, caisses tactiles, caisse enregistreuse prix night-club.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre night-club ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des ventes : Une interface intuitive pour gérer rapidement les commandes au bar, l'entrée, et les services VIP.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux night-clubs : Odeo permet une gestion fluide des transactions et des réservations dans les night-clubs à fort volume.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace dans des environnements animés.",
                            ],
                    
                            // Avantages (Advantages for your night-club)
                            "avantages" => "Avantages clés pour votre night-club",
                            "Avantages_list" => [
                                "Gestion des ventes au bar et des entrées de manière efficace.",
                                "Suivi des ventes des boissons populaires et des billets d'entrée.",
                                "Paramétrage facile pour des promotions, des happy hours et des remises.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Rapport détaillé pour optimiser votre activité et mieux comprendre les comportements des clients.",
                            ],
                    
                            // Solution (Solution for night-club)
                            "solution" => "Une solution pensée pour les night-clubs au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Night-club au Maroc",
                    "description" => "Odeo propose des solutions POS spécialement conçues pour les night-clubs au Maroc, permettant une gestion rapide des commandes, des paiements et des clients dans un environnement dynamique.",
                    "keywords" => "Odeo, POS night-club Maroc, caisse enregistreuse night-club, système POS Maroc, gestion night-club, équipements POS Maroc, solutions pour night-club",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Night-club au Maroc",
                        "description" => "Odeo propose des solutions POS spécialement conçues pour les night-clubs au Maroc, permettant une gestion rapide des commandes, des paiements et des clients dans un environnement dynamique.",
                        "image" => "/images/b/night-club.jpg",
                        "url" => "https://www.odeo.ma/night-club",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Night-club au Maroc",
                        "description" => "Odeo propose des solutions POS spécialement conçues pour les night-clubs au Maroc, permettant une gestion rapide des commandes, des paiements et des clients dans un environnement dynamique.",
                        "image" => "/images/b/night-club.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            // Lounge
            [
                "id" => 3,
                "title" => "Transformez votre lounge avec Odeo",
                "slug" => "lounge",
                "short_description" => "Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les lounges.",
                "description" => "Optimisez la gestion de votre lounge avec une caisse enregistreuse tactile et des outils de gestion avancés. Suivez vos stocks, vos ventes et améliorez l'expérience client grâce à une gestion simplifiée.",
                "image" => [
                    "url" => "/images/b/lounge.jpg",
                    "alt" => "Odeo - caisse enregistreuse - lounge",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des stocks avec Odeo Inventory",
                        "text" => "Commandez ce qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire les pertes.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des stocks avec Odeo Inventory",
                        ],
                        "features" => [
                            "Dites adieu au comptage manuel avec des <span class=\"font-semibold\">inventaires automatisés en temps réel</span> et des <span class=\"font-semibold\">rapports de gaspillage</span>",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec Odeo",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title" => "Optimisez les commandes avec Odeo",
                        "text" => "Simplifiez la gestion des commandes de vos clients grâce à un système rapide et intuitif qui répond parfaitement aux besoins de votre lounge.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Optimisation des commandes avec Odeo",
                        ],
                        "features" => [
                            "Accélérez le service avec des commandes enregistrées instantanément",
                            "Suivez les paiements et les transactions en temps réel pour une gestion fluide",
                            "Gérez vos menus et ajustez les prix en fonction des tendances et de la demande",
                        ],
                    ],
                    [
                        "title" => "Suivi des performances avec Odeo",
                        "text" => "Analysez les performances de votre lounge avec des rapports détaillés sur les ventes, les stocks et les préférences des clients.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Suivi des performances avec Odeo",
                        ],
                        "features" => [
                            "Accédez à des rapports sur les ventes et la rentabilité de votre lounge",
                            "Obtenez des graphiques pour visualiser les tendances de consommation",
                            "Optimisez votre offre grâce à des rapports sur les produits les plus populaires",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre lounge avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les lounges au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, caisse enregistreuse lounge, caisse tactile lounge, caisses tactiles, caisse enregistreuse prix lounge.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre lounge ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des ventes : Une interface intuitive pour gérer rapidement les commandes des clients, qu'elles soient pour des boissons ou des snacks.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux lounges : Odeo permet une gestion fluide des transactions et des réservations dans des environnements confortables et calmes.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace dans les espaces lounges.",
                            ],
                    
                            // Avantages (Advantages for your lounge)
                            "avantages" => "Avantages clés pour votre lounge",
                            "Avantages_list" => [
                                "Gestion des ventes de boissons et de nourriture de manière efficace.",
                                "Suivi des ventes des produits populaires, y compris les cocktails et les boissons haut de gamme.",
                                "Paramétrage facile pour des promotions, des happy hours, et des remises pour attirer de nouveaux clients.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Rapport détaillé pour optimiser votre activité et mieux comprendre les préférences des clients.",
                            ],
                    
                            // Solution (Solution for lounge)
                            "solution" => "Une solution pensée pour les lounges au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Lounge au Maroc",
                    "description" => "Odeo propose des solutions POS adaptées aux lounges au Maroc, permettant une gestion fluide des commandes, paiements et services pour offrir une expérience client optimale.",
                    "keywords" => "Odeo, POS lounge Maroc, caisse enregistreuse lounge, système POS Maroc, gestion lounge, équipements POS Maroc, solutions pour lounges",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Lounge au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées aux lounges au Maroc, permettant une gestion fluide des commandes, paiements et services pour offrir une expérience client optimale.",
                        "image" => "/images/b/lounge.jpg",
                        "url" => "https://www.odeo.ma/lounge",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Lounge au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées aux lounges au Maroc, permettant une gestion fluide des commandes, paiements et services pour offrir une expérience client optimale.",
                        "image" => "/images/b/lounge.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            // Pressage
            [
                "id" => 5,
                "title" => "Optimisez votre service de pressage avec Odeo",
                "slug" => "pressage",
                "short_description" => "Odeo propose des solutions simples et efficaces pour gérer vos opérations de pressage, de la commande à la facturation.",
                "description" => "Améliorez l'efficacité de votre service de pressage avec Odeo. Grâce à une caisse enregistreuse tactile et un outil de gestion des stocks, vous pourrez gérer vos commandes, suivre les stocks de produits chimiques et d'autres consommables, et offrir un service rapide et fiable à vos clients.",
                "image" => [
                    "url" => "/images/b/pressing.jpg",
                    "alt" => "Odeo - caisse enregistreuse - pressage",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des stocks avec Odeo Inventory",
                        "text" => "Planifiez et gérez vos stocks de produits de nettoyage, détergents, et autres consommables pour éviter les pénuries et les excédents.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des stocks avec Odeo Inventory",
                        ],
                        "features" => [
                            "Suivi en temps réel de vos stocks grâce à des <span class=\"font-semibold\">inventaires automatisés</span>",
                            "Gérez efficacement vos consommables et évitez le gaspillage avec des <span class=\"font-semibold\">rapports détaillés</span>",
                            "Planification avancée pour réapprovisionner en fonction des besoins réels",
                            "Vérification des produits périmés et des articles en excédent avec des rapports de stock",
                        ],
                    ],
                    [
                        "title" => "Suivi des commandes et paiements",
                        "text" => "Offrez à vos clients un service rapide et professionnel avec un suivi de leurs commandes et paiements en temps réel.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Suivi des commandes et paiements",
                        ],
                        "features" => [
                            "Enregistrez rapidement les commandes et suivez leur statut à chaque étape",
                            "Effectuez des paiements instantanés avec une caisse enregistreuse tactile rapide",
                            "Recevez des paiements par différents moyens et gérez vos transactions facilement",
                        ],
                    ],
                    [
                        "title" => "Rapports et analyse des performances",
                        "text" => "Améliorez l'efficacité de votre service avec des rapports détaillés sur les ventes et les services les plus demandés.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Rapports et analyse des performances",
                        ],
                        "features" => [
                            "Analysez les services les plus populaires et ajustez votre offre en conséquence",
                            "Obtenez des rapports détaillés sur les ventes, les marges et les performances",
                            "Visualisez vos performances avec des graphiques pour une meilleure prise de décision",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre pressing avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les pressings et les services de blanchisserie au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, pressing, blanchisserie, caisse tactile pressing, caisses tactiles, caisse enregistreuse prix pressing.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre pressing ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des ventes : Une interface intuitive pour gérer rapidement les services de blanchisserie, que ce soit pour le lavage, le repassage ou les services spécialisés.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux pressings : Odeo permet une gestion fluide des transactions, des services et des clients pour les pressings de toutes tailles.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace dans le domaine du pressing.",
                            ],
                    
                            // Avantages (Advantages for your pressing)
                            "avantages" => "Avantages clés pour votre pressing",
                            "Avantages_list" => [
                                "Gestion efficace des services : Suivi des commandes pour chaque client avec des détails sur les services demandés.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Suivi des produits populaires (par exemple, les services de nettoyage à sec).",
                                "Paramétrage facile pour des promotions et des remises, notamment pour les clients réguliers.",
                                "Rapport détaillé pour optimiser votre activité et améliorer l'efficacité des services.",
                            ],
                    
                            // Solution (Solution for pressing)
                            "solution" => "Une solution pensée pour les pressings au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Pressing au Maroc",
                    "description" => "Odeo propose des solutions POS adaptées aux pressings au Maroc, permettant une gestion optimisée des commandes, paiements et services de nettoyage à sec pour une expérience client fluide.",
                    "keywords" => "Odeo, POS pressing Maroc, caisse enregistreuse pressing, système POS Maroc, gestion pressing, équipements POS Maroc, solutions pour pressings",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Pressing au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées aux pressings au Maroc, permettant une gestion optimisée des commandes, paiements et services de nettoyage à sec pour une expérience client fluide.",
                        "image" => "/images/b/pressing.jpg",
                        "url" => "https://www.odeo.ma/pressing",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Pressing au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées aux pressings au Maroc, permettant une gestion optimisée des commandes, paiements et services de nettoyage à sec pour une expérience client fluide.",
                        "image" => "/images/b/pressing.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            // Spa
            [
                "id" => 6,
                "title" => "Optimisez la gestion de votre SPA avec Odeo",
                "slug" => "spa",
                "short_description" => "Odeo offre des solutions simples et efficaces pour gérer vos réservations, paiements et suivi des stocks dans votre SPA.",
                "description" => "Avec Odeo, gérez efficacement les réservations, le suivi des stocks de produits de soin et d'équipement, et les paiements dans votre SPA. Simplifiez vos opérations tout en offrant une expérience client de qualité.",
                "image" => [
                    "url" => "/images/b/spa.jpg",
                    "alt" => "Odeo - caisse enregistreuse - SPA",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des réservations et paiements",
                        "text" => "Facilitez la gestion des réservations de vos clients avec une solution rapide et intuitive. Acceptez divers moyens de paiement et suivez les transactions en temps réel.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des réservations et paiements",
                        ],
                        "features" => [
                            "Réservation facile et rapide des soins avec <span class=\"font-semibold\">gestion des horaires et des services</span>",
                            "Acceptez plusieurs types de paiement, y compris les cartes bancaires et les paiements mobiles",
                            "Suivi des paiements en temps réel et gestion des factures clients",
                        ],
                    ],
                    [
                        "title" => "Suivi des stocks de produits de soin",
                        "text" => "Suivez vos stocks de produits de soin, huiles essentielles, et autres équipements afin de garantir que vous avez toujours ce dont vous avez besoin pour vos clients.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Suivi des stocks de produits de soin",
                        ],
                        "features" => [
                            "Inventaire en temps réel des produits de soin et équipements",
                            "Rapports détaillés sur les produits les plus utilisés et ceux à réapprovisionner",
                            "Gestion des fournisseurs pour réapprovisionner facilement vos stocks",
                        ],
                    ],
                    [
                        "title" => "Analyse des performances et des services",
                        "text" => "Améliorez l'expérience client et optimisez votre offre grâce à des rapports détaillés sur les services populaires et la rentabilité de votre SPA.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Analyse des performances et des services",
                        ],
                        "features" => [
                            "Analysez les services les plus populaires et ajustez vos offres en fonction de la demande",
                            "Obtenez des rapports détaillés sur les ventes, la rentabilité et la satisfaction des clients",
                            "Visualisez vos données avec des graphiques pour une meilleure prise de décision",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre spa avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les spas et les salons de bien-être au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, spa, bien-être, caisse tactile spa, caisses tactiles, caisse enregistreuse prix spa.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre spa ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des réservations : Une interface intuitive pour gérer les rendez-vous, les services de spa, et les forfaits bien-être.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux spas et salons de bien-être : Odeo permet une gestion fluide des services et des clients pour les spas de toutes tailles.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace dans le secteur du bien-être.",
                            ],
                    
                            // Avantages (Advantages for your spa)
                            "avantages" => "Avantages clés pour votre spa",
                            "Avantages_list" => [
                                "Gestion efficace des services : Suivi des réservations, des forfaits de soins, et des commandes de produits pour chaque client.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Suivi des services populaires (massages, soins du visage, etc.).",
                                "Paramétrage facile pour des promotions et des remises, notamment pour les clients réguliers.",
                                "Rapport détaillé pour optimiser votre activité et améliorer l'efficacité des services.",
                            ],
                    
                            // Solution (Solution for spa)
                            "solution" => "Une solution pensée pour les spas et salons de bien-être au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Spa au Maroc",
                    "description" => "Odeo propose des solutions POS spécialement adaptées aux spas au Maroc, permettant une gestion fluide des réservations, paiements et services de bien-être pour une expérience client optimale.",
                    "keywords" => "Odeo, POS spa Maroc, caisse enregistreuse spa, système POS Maroc, gestion spa, équipements POS Maroc, solutions pour spas",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Spa au Maroc",
                        "description" => "Odeo propose des solutions POS spécialement adaptées aux spas au Maroc, permettant une gestion fluide des réservations, paiements et services de bien-être pour une expérience client optimale.",
                        "image" => "/images/b/spa.jpg",
                        "url" => "https://www.odeo.ma/spa",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Spa au Maroc",
                        "description" => "Odeo propose des solutions POS spécialement adaptées aux spas au Maroc, permettant une gestion fluide des réservations, paiements et services de bien-être pour une expérience client optimale.",
                        "image" => "/images/b/spa.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            // Piscine
            [
                "id" => 7,
                "title" => "Optimisez la gestion de votre piscine avec Odeo",
                "slug" => "piscine",
                "short_description" => "Odeo propose une solution simple et efficace pour gérer les réservations, paiements et stocks dans votre piscine.",
                "description" => "Avec Odeo, gérez facilement les réservations de créneaux horaires, le suivi des paiements, et la gestion des stocks de produits pour votre piscine. Offrez une expérience fluide à vos clients tout en simplifiant vos opérations.",
                "image" => [
                    "url" => "/images/b/spa.jpg",
                    "alt" => "Odeo - caisse enregistreuse - Piscine",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des réservations et paiements",
                        "text" => "Odeo vous permet de gérer les réservations des créneaux horaires pour votre piscine de manière simple et intuitive. Acceptez différents moyens de paiement et suivez toutes les transactions en temps réel.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des réservations et paiements",
                        ],
                        "features" => [
                            "Réservation de créneaux horaires en ligne et sur place avec <span class=\"font-semibold\">confirmations automatiques</span>",
                            "Acceptez les paiements par carte bancaire, espèces et mobile",
                            "Suivi des transactions en temps réel et gestion des factures clients",
                        ],
                    ],
                    [
                        "title" => "Gestion des stocks de produits de piscine",
                        "text" => "Gardez un œil sur les produits nécessaires à l'entretien de la piscine, comme les produits chimiques et le matériel de nettoyage. Assurez-vous de toujours avoir les bons produits en stock.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Gestion des stocks de produits de piscine",
                        ],
                        "features" => [
                            "Inventaire en temps réel des produits chimiques et des équipements de nettoyage",
                            "Rapports détaillés pour connaître les produits à réapprovisionner",
                            "Suivi des fournisseurs et commandes faciles pour un approvisionnement continu",
                        ],
                    ],
                    [
                        "title" => "Analyse des performances et gestion des clients",
                        "text" => "Odeo vous permet d'analyser les performances de votre piscine et de mieux comprendre les besoins de vos clients pour améliorer leur expérience.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Analyse des performances et gestion des clients",
                        ],
                        "features" => [
                            "Analyse des créneaux les plus réservés et gestion optimisée des plages horaires",
                            "Rapports sur la rentabilité des services et la satisfaction des clients",
                            "Visualisation des données via des graphiques et rapports exportables",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre piscine avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les piscines et centres aquatiques au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, piscine, centre aquatique, caisse tactile piscine, caisses tactiles, caisse enregistreuse prix piscine.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre piscine ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des réservations : Une interface intuitive pour gérer les entrées, les réservations de cabines et les forfaits de piscine.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux piscines et centres aquatiques : Odeo permet une gestion fluide des services et des clients pour les piscines de toutes tailles.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace dans le secteur aquatique.",
                            ],
                    
                            // Avantages (Advantages for your pool)
                            "avantages" => "Avantages clés pour votre piscine",
                            "Avantages_list" => [
                                "Gestion efficace des réservations et des forfaits : Suivi des clients, des entrées et des services additionnels comme la location de transats ou de cabines.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Suivi des services populaires (cours de natation, espace bien-être, etc.).",
                                "Paramétrage facile pour des promotions et des remises, notamment pour les abonnés ou les groupes.",
                                "Rapport détaillé pour optimiser votre activité et maximiser l'utilisation des installations.",
                            ],
                    
                            // Solution (Solution for pool)
                            "solution" => "Une solution pensée pour les piscines et centres aquatiques au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ],
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Piscine au Maroc",
                    "description" => "Odeo propose des solutions POS adaptées aux piscines au Maroc, facilitant la gestion des réservations, paiements et services pour offrir une expérience client exceptionnelle.",
                    "keywords" => "Odeo, POS piscine Maroc, caisse enregistreuse piscine, système POS piscine, gestion piscine, équipements POS Maroc, solutions pour piscines",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Piscine au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées aux piscines au Maroc, facilitant la gestion des réservations, paiements et services pour offrir une expérience client exceptionnelle.",
                        "image" => "/images/b/pool.jpg",
                        "url" => "https://www.odeo.ma/piscine",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Piscine au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées aux piscines au Maroc, facilitant la gestion des réservations, paiements et services pour offrir une expérience client exceptionnelle.",
                        "image" => "/images/b/pool.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            //Hotel
            [
                "id" => 8,
                "title" => "Optimisez la gestion de votre hôtel avec Odeo PMS",
                "slug" => "hotel",
                "short_description" => "Odeo propose une solution complète pour gérer les réservations, paiements et services de votre hôtel avec un système PMS puissant.",
                "description" => "Avec Odeo PMS, gérez les réservations, les paiements, et les services à la clientèle dans votre hôtel de manière simple et efficace. Suivez les performances de votre établissement et offrez à vos clients une expérience optimale.",
                "image" => [
                    "url" => "/images/b/b-2.jpg",
                    "alt" => "Odeo - PMS pour Hôtel",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des réservations et paiements",
                        "text" => "Avec Odeo PMS, gérez facilement les réservations des chambres et des services. Acceptez différents moyens de paiement et suivez toutes les transactions en temps réel.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Gestion des réservations et paiements",
                        ],
                        "features" => [
                            "Réservation des chambres en ligne et sur place avec <span class=\"font-semibold\">confirmations automatiques</span>",
                            "Gestion des paiements par carte bancaire, espèces, et mobile",
                            "Suivi des transactions et des factures en temps réel",
                        ],
                    ],
                    [
                        "title" => "Gestion des services et des stocks",
                        "text" => "Odeo PMS vous permet de gérer les services offerts dans votre hôtel, tels que le restaurant, le spa, ou les activités, tout en gardant un œil sur les stocks nécessaires pour chaque service.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Gestion des services et des stocks",
                        ],
                        "features" => [
                            "Suivi des stocks de produits d'hygiène, literie, et consommables pour les chambres",
                            "Gestion des services comme le restaurant, le spa, et les excursions avec rapports détaillés",
                            "Rapports de consommation et réapprovisionnement en temps réel",
                        ],
                    ],
                    [
                        "title" => "Analyse des performances de l'hôtel",
                        "text" => "Odeo PMS vous permet d'analyser les performances de votre hôtel, d'optimiser les services et d'améliorer l'expérience client avec des rapports détaillés.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Analyse des performances de l'hôtel",
                        ],
                        "features" => [
                            "Analyse des taux de réservation et du taux d'occupation des chambres",
                            "Suivi des performances par département (restaurant, spa, etc.)",
                            "Visualisation des données via des graphiques et rapports exportables",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre hôtel avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les hôtels au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, hôtel, gestion des chambres, caisse tactile hôtel, caisses tactiles, caisse enregistreuse prix hôtel.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre hôtel ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des réservations : Une interface intuitive pour gérer les réservations de chambres, les services additionnels et les demandes spéciales.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux hôtels de toutes tailles : Odeo permet une gestion fluide des réservations pour les hôtels, des petits établissements aux grandes chaînes.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace dans l'industrie hôtelière.",
                            ],
                    
                            // Avantages (Advantages for your hotel)
                            "avantages" => "Avantages clés pour votre hôtel",
                            "Avantages_list" => [
                                "Gestion efficace des réservations et des chambres : Suivi des réservations, des chambres disponibles et des services additionnels comme le petit-déjeuner, le spa, ou les excursions.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Suivi des services populaires (réservation de restaurants, spa, activités).",
                                "Paramétrage facile pour des promotions et des remises, notamment pour les clients réguliers ou les groupes.",
                                "Rapport détaillé pour optimiser votre activité et maximiser le taux d'occupation.",
                            ],
                    
                            // Solution (Solution for hotel)
                            "solution" => "Une solution pensée pour les hôtels au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Hôtel au Maroc",
                    "description" => "Odeo propose des solutions POS adaptées aux hôtels au Maroc, simplifiant la gestion des réservations, des paiements et des services pour offrir une expérience client fluide et efficace.",
                    "keywords" => "Odeo, POS hôtel Maroc, caisse enregistreuse hôtel, système POS hôtel, gestion hôtelière, équipements POS Maroc, solutions pour hôtels",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Hôtel au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées aux hôtels au Maroc, simplifiant la gestion des réservations, des paiements et des services pour offrir une expérience client fluide et efficace.",
                        "image" => "/images/b/b-2.jpg",
                        "url" => "https://www.odeo.ma/hotel",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Hôtel au Maroc",
                        "description" => "Odeo propose des solutions POS adaptées aux hôtels au Maroc, simplifiant la gestion des réservations, des paiements et des services pour offrir une expérience client fluide et efficace.",
                        "image" => "/images/b/b-2.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            // Maison D'hotes
            [
                "id" => 9,
                "title" => "Optimisez la gestion de votre maison d'hôtes avec Odeo PMS",
                "slug" => "maison-d-hotes",
                "short_description" => "Odeo propose une solution complète pour gérer les réservations, paiements et services dans votre maison d'hôtes grâce à un système PMS facile à utiliser.",
                "description" => "Avec Odeo PMS, simplifiez la gestion des réservations, des paiements et des services de votre maison d'hôtes. Offrez à vos clients une expérience agréable tout en optimisant les opérations internes.",
                "image" => [
                    "url" => "/images/b/maison-dhote.jpg",
                    "alt" => "Odeo - PMS pour Maison d'Hôtes",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des réservations et paiements",
                        "text" => "Gérez les réservations en ligne et sur place, ainsi que les paiements, de manière simple et efficace grâce à Odeo PMS.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Gestion des réservations et paiements",
                        ],
                        "features" => [
                            "Réservation des chambres en ligne avec <span class=\"font-semibold\">confirmation instantanée</span>",
                            "Acceptez différents moyens de paiement : carte bancaire, espèces, et virements",
                            "Suivi des paiements et des factures en temps réel",
                        ],
                    ],
                    [
                        "title" => "Suivi des services et de l'hospitalité",
                        "text" => "Suivez les services que vous proposez dans votre maison d'hôtes, tels que le petit-déjeuner, les repas, et les excursions, tout en gérant les stocks associés.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Suivi des services et de l'hospitalité",
                        ],
                        "features" => [
                            "Gestion des services comme les repas, les boissons, et les activités",
                            "Suivi des stocks de nourriture et de consommables pour les chambres",
                            "Rapports détaillés sur la consommation et la gestion des services",
                        ],
                    ],
                    [
                        "title" => "Analyse des performances de la maison d'hôtes",
                        "text" => "Odeo PMS vous aide à analyser les performances de votre maison d'hôtes, avec des rapports détaillés pour optimiser la gestion de l'établissement.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Analyse des performances de la maison d'hôtes",
                        ],
                        "features" => [
                            "Suivi des taux de réservation et des périodes de forte demande",
                            "Analyse des ventes et des services populaires",
                            "Visualisation des résultats via des rapports et graphiques interactifs",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre maison d'hôtes avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, parfaites pour les maisons d'hôtes au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, maison d'hôtes, gestion des chambres, caisse tactile maison d'hôtes, caisses tactiles, caisse enregistreuse prix maison d'hôtes.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre maison d'hôtes ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des réservations : Une interface intuitive pour gérer les réservations de chambres et les demandes spécifiques des invités.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux maisons d'hôtes de toutes tailles : Odeo permet une gestion fluide des réservations pour les petites maisons d'hôtes comme les plus grandes.",
                                "Caisse tactile performante : Des caisses modernes et robustes pour une utilisation rapide et efficace dans les maisons d'hôtes.",
                            ],
                    
                            // Avantages (Advantages for your guest house)
                            "avantages" => "Avantages clés pour votre maison d'hôtes",
                            "Avantages_list" => [
                                "Gestion efficace des chambres et des réservations : Suivi des chambres disponibles, des demandes spéciales des clients et des services supplémentaires.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Suivi des services populaires comme les repas, les excursions ou les transferts.",
                                "Paramétrage facile pour des promotions et des remises spéciales pour les groupes ou les séjours prolongés.",
                                "Rapport détaillé pour optimiser votre activité et améliorer la rentabilité.",
                            ],
                    
                            // Solution (Solution for guest houses)
                            "solution" => "Une solution pensée pour les maisons d'hôtes au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Maison d'Hôtes au Maroc",
                    "description" => "Odeo offre des solutions POS adaptées aux maisons d’hôtes au Maroc, permettant une gestion fluide des réservations, des paiements et des services pour améliorer l'expérience des clients.",
                    "keywords" => "Odeo, POS maison d'hôtes Maroc, caisse enregistreuse maison d'hôtes, système POS maison d'hôtes, gestion maison d'hôtes, équipements POS Maroc, solutions pour maisons d'hôtes",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Maison d'Hôtes au Maroc",
                        "description" => "Odeo offre des solutions POS adaptées aux maisons d’hôtes au Maroc, permettant une gestion fluide des réservations, des paiements et des services pour améliorer l'expérience des clients.",
                        "image" => "/images/b/maisondhotes.jpg",
                        "url" => "https://www.odeo.ma/maison-d-hotes",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Maison d'Hôtes au Maroc",
                        "description" => "Odeo offre des solutions POS adaptées aux maisons d’hôtes au Maroc, permettant une gestion fluide des réservations, des paiements et des services pour améliorer l'expérience des clients.",
                        "image" => "/images/b/maisondhotes.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            // Riad
            [
                "id" => 10,
                "title" => "Optimisez la gestion de votre riad avec Odeo PMS",
                "slug" => "riad",
                "short_description" => "Odeo propose une solution complète pour gérer les réservations, paiements et services dans votre riad, avec une interface simple et intuitive.",
                "description" => "Avec Odeo PMS, transformez la gestion de votre riad en une expérience fluide et sans effort. Suivez les réservations, les paiements, et les services tout en optimisant la gestion des chambres et des clients.",
                "image" => [
                    "url" => "/images/b/riad.jpg",
                    "alt" => "Odeo - PMS pour Riad",
                ],
                "sections" => [
                    [
                        "title" => "Gestion des réservations et paiements",
                        "text" => "Odeo PMS facilite la gestion des réservations et des paiements dans votre riad. Gérer les réservations en ligne et en direct, tout en optimisant la gestion des paiements.",
                        "image" => [
                            "url" => "/images/products/pos-o.png",
                            "alt" => "Gestion des réservations et paiements",
                        ],
                        "features" => [
                            "Réservations en ligne avec <span class=\"font-semibold\">confirmation instantanée</span>",
                            "Gestion des paiements variés : carte bancaire, espèces, et virements",
                            "Suivi détaillé des paiements et des factures pour chaque réservation",
                        ],
                    ],
                    [
                        "title" => "Services personnalisés pour vos clients",
                        "text" => "Odeo vous aide à gérer les services exclusifs que vous proposez dans votre riad, comme les repas traditionnels, les soins spa, et les excursions.",
                        "image" => [
                            "url" => "/images/products/odeo-pos.png",
                            "alt" => "Services personnalisés pour vos clients",
                        ],
                        "features" => [
                            "Suivi des services de restauration et de bien-être pour chaque client",
                            "Gestion des activités et excursions proposées dans le riad",
                            "Rapports en temps réel sur la consommation et les préférences des clients",
                        ],
                    ],
                    [
                        "title" => "Analyse des performances du riad",
                        "text" => "Avec Odeo PMS, vous pouvez analyser les performances de votre riad, en suivant les réservations, les revenus, et la satisfaction des clients.",
                        "image" => [
                            "url" => "/images/products/odeo-pms.png",
                            "alt" => "Analyse des performances du riad",
                        ],
                        "features" => [
                            "Suivi des taux de remplissage et des périodes de forte demande",
                            "Analyse des revenus par chambre, service et type de réservation",
                            "Rapports personnalisés et graphiques pour un aperçu complet des performances",
                        ],
                    ],
                    // 
                    [
                        "title" => "Boostez votre Riad avec Odeo",
                        "text" => "Odeo propose des solutions de caisses enregistreuses modernes et intuitives, idéales pour les riads au Maroc et en Afrique.",
                        "additional_info" => [
                            "Mots-clés inclus" => "caisse enregistreuse, riad, gestion des réservations, caisse tactile riad, caisses tactiles, caisse enregistreuse prix riad.",
                            
                            // Pourquoi (Why choose Odeo)
                            "pourquoi" => "Pourquoi choisir Odeo pour votre riad ?",
                            "Pourquoi_list" => [
                                "Gestion simplifiée des réservations : Une interface intuitive pour gérer les réservations de chambres et les demandes spécifiques des invités.",
                                "Suivi en temps réel : Consultez vos stocks, vos recettes et vos performances directement depuis votre tableau de bord.",
                                "Adapté aux riads traditionnels et modernes : Odeo offre une solution flexible pour gérer des établissements de tailles variées.",
                                "Caisse tactile performante : Des caisses robustes et rapides pour offrir un service efficace aux hôtes.",
                            ],
                    
                            // Avantages (Advantages for your Riad)
                            "avantages" => "Avantages clés pour votre riad",
                            "Avantages_list" => [
                                "Gestion efficace des chambres et des réservations : Suivi des chambres disponibles, des services demandés par les clients et de l'occupation.",
                                "Paiements rapides et sécurisés, y compris mobile et sans contact.",
                                "Suivi des services populaires comme les repas, les excursions ou les événements privés.",
                                "Paramétrage facile pour des promotions et des remises pour les clients fidèles ou les réservations de groupe.",
                                "Rapports détaillés pour optimiser les opérations et maximiser la rentabilité.",
                            ],
                    
                            // Solution (Solution for riads)
                            "solution" => "Une solution pensée pour les riads au Maroc et en Afrique",
                            "solution_list" => [
                                "Prix compétitifs : Trouvez une caisse enregistreuse adaptée à votre budget.",
                                "Support client réactif : Une équipe locale prête à vous accompagner.",
                                "Installation rapide : Configuration facile et rapide pour démarrer sans attendre.",
                            ],
                    
                            // Support Client (Customer support)
                            "support_client" => "Support Client",
                            "Support Client" => [
                                "Support dédié disponible 24/7.",
                                "Assistance par téléphone, chat en direct, ou e-mail.",
                                "Techniciens locaux pour une prise en charge rapide et efficace.",
                            ],
                        ],
                    ]
                    // 
                ],
                "meta" => [
                    // Meta Tags
                    "title" => "Odeo - POS pour Riad au Maroc",
                    "description" => "Odeo propose des solutions POS spécifiquement conçues pour les Riads au Maroc, permettant une gestion efficace des réservations, des paiements et des services pour une expérience client optimale.",
                    "keywords" => "Odeo, POS Riad Maroc, caisse enregistreuse Riad, système POS Riad, gestion Riad, équipements POS Maroc, solutions pour Riads",
                    "robots" => "index, follow",
                    "author" => "Odeo Systems",
                
                    // Open Graph Meta Tags
                    "graph" => [
                        "title" => "Odeo - POS pour Riad au Maroc",
                        "description" => "Odeo propose des solutions POS spécifiquement conçues pour les Riads au Maroc, permettant une gestion efficace des réservations, des paiements et des services pour une expérience client optimale.",
                        "image" => "/images/b/riad.jpg",
                        "url" => "https://www.odeo.ma/riad",
                        "type" => "website",
                        "locale" => "fr_FR",
                        "site_name" => "Odeo Systems",
                    ],
                
                    // Twitter Meta Tags
                    "twitter" => [
                        "card" => "summary_large_image",
                        "title" => "Odeo - POS pour Riad au Maroc",
                        "description" => "Odeo propose des solutions POS spécifiquement conçues pour les Riads au Maroc, permettant une gestion efficace des réservations, des paiements et des services pour une expérience client optimale.",
                        "image" => "/images/b/riad.jpg",
                        "site" => "@OdeoSystems", // Twitter handle
                    ],
                ],                
            ],
            
        ];

        if($slug) {
            $slug = strtolower($slug);
            $slug = trim($slug);
            foreach($listings as $listing) {
                if($listing['slug'] == $slug)
                    return $listing;
            }
        }
    }
}
