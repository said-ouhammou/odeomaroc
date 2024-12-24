<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function index($slug) {
        
        $listing = $this->getListing($slug);

        return view('listings.listing-details',['listing'=>$listing]);
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
            [
                "id"=>1,
                "title"=>"Tirez le meilleur de votre activité",
                "slug"=>"boutique",
                "short_description"=>"Odeo, le logiciel de caisse tout-en-un et sa plateforme de paiements intégrée, équipe les meilleurs restaurants et commerçants dans plus de 165 000 emplacements dans le monde.* ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/boutique.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>1,
                "title"=>"Tirez le meilleur de votre activité",
                "slug"=>"restaurant",
                "short_description"=>"Odeo, le logiciel de caisse tout-en-un et sa plateforme de paiements intégrée, équipe les meilleurs restaurants et commerçants dans plus de 165 000 emplacements dans le monde.* ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/b-1.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Simplifiez la gestion de votre bar",
                "slug"=>"snack",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/snack.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Transformez votre hôtel avec Odeo PMS",
                "slug"=>"cafe",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/cafe.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Boostez votre boutique",
                "slug"=>"salon-de-the",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/salon-de-the.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Un service parfait pour votre café",
                "slug"=>"patisserie",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/patisserie.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Gérez votre spa efficacement",
                "slug"=>"boulangerie",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/boulangerie.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Améliorez votre salon de coiffure",
                "slug"=>"fast-food",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/fast-food.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Transformez votre boulangerie",
                "slug"=>"night-club",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/night-club.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Une solution pour votre fast-food",
                "slug"=>"lounge",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/lounge.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Une solution pour votre pressage",
                "slug"=>"bar",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/bar.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Une solution pour votre pressage",
                "slug"=>"spa",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/spa.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Une solution pour votre pressage",
                "slug"=>"piscine",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/pool.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Une solution pour votre pressage",
                "slug"=>"hotel",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/b-2.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Une solution pour votre pressage",
                "slug"=>"maison-d-hotes",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/maisondhotes.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                ],
            ],
            [
                "id"=>2,
                "title"=>"Une solution pour votre pressage",
                "slug"=>"riad",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/riad.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Odeo Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
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
