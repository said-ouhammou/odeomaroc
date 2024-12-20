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
        
        $listings = [
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
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
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
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
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
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
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
                "slug"=>"boutique",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
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
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
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
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
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
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
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
                "slug"=>"coiffure",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/coiffure.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
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
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
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
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
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
                "slug"=>"pressing",
                "short_description"=>"Odeo propose des solutions intuitives pour gérer les commandes et les paiements dans les bars. ",
                "description"=>"",
                "image"=>[
                    "url"=>"/images/b/pressing.jpg",
                    "alt"=>"odeo - caisse enregesture - resturants",
                ],
                "sections"=>[
                    [
                        "title"=>"Stock avec Odeo Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pos.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            'Dites adieu au comptage manuel avec des <span class="font-semibold">inventaires automatisés en temps réel</span> et des <span class="font-semibold">rapports de gaspillage</span>',
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. - odeo ",
                        "image"=>[
                            "url"=>"/images/products/pos-o.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
                        ],
                        "features"=>[
                            "Dites adieu au comptage manuel avec des inventaires automatisés en temps réel et des rapports de gaspillage",
                            "Créez des recettes avec des suggestions de prix pour les menus et un suivi de la marge brute avec odeo ",
                            "Gérez vos fournisseurs dans un même endroit et créez, envoyez et recevez facilement des commandes ",
                            "Vérifiez si vos stocks ont été vendus, périmés ou gaspillés grâce aux rapports de stock en temps réel",
                        ],
                    ],
                    [
                        "title"=>"Stock avec Lightspeed Inventory",
                        "text"=>"Commandez de qu'il vous faut grâce à un outil de gestion des stocks qui vous permet de planifier à l'avance et de réduire vos pertes alimentaires. ",
                        "image"=>[
                            "url"=>"/images/products/odeo-pms.png",
                            "alt"=>"Stock avec Lightspeed Inventory",
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
            foreach($listings as $listing) {
                if($listing['slug'] === $slug)
                    return $listing;
            }
        }
    }
}
