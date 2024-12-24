<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProductCard extends Component
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
        $products = [
            [
                "id" => 1,
                "title" => "Caisse enregistreuse",
                "short_description" => "Gérez vos ventes et encaissements facilement.",
                "description" => "La caisse enregistreuse est la solution parfaite pour gérer vos ventes, vos encaissements et vos stocks. Dotée d'une interface intuitive et facile à utiliser, elle permet une gestion efficace et rapide des transactions. Grâce à sa compatibilité avec les systèmes de paiement modernes, elle s'adapte parfaitement aux besoins des commerces de toute taille.",
                "image" => "/images/products/caisse-enregistreuse-1.avif",
                "features" => [
                    "Interface intuitive et facile à utiliser",
                    "Gestion des stocks et des ventes en temps réel",
                    "Compatible avec les systèmes de paiement modernes",
                    "Conception robuste et durable",
                ],
            ],
            [
                "id" => 2,
                "title" => "Imprimante thermique",
                "short_description" => "Imprimez vos tickets avec rapidité et efficacité.",
                "description" => "Cette imprimante thermique est spécialement conçue pour imprimer des tickets et reçus avec une grande précision et rapidité. Elle supporte divers formats de papier et offre des options de connectivité comme USB et Bluetooth, ce qui la rend flexible et adaptée à tout environnement professionnel. Sa faible consommation énergétique en fait un choix écologique et économique.",
                "image" => "/images/products/imprimante-thermique-2.avif",
                "features" => [
                    "Impression rapide et silencieuse",
                    "Supporte divers formats de papier",
                    "Connexion USB et Bluetooth pour plus de flexibilité",
                    "Faible consommation énergétique",
                ],
            ],
            [
                "id" => 3,
                "title" => "Rouleau imprimante thermique",
                "short_description" => "Papier thermique de haute qualité pour imprimantes.",
                "description" => "Les rouleaux pour imprimantes thermiques sont conçus pour offrir une impression de qualité supérieure. Fabriqués avec du papier thermique durable, ils garantissent une longue durée d'utilisation et sont compatibles avec la majorité des imprimantes disponibles sur le marché. Faciles à installer, ces rouleaux sont idéals pour une utilisation professionnelle.",
                "image" => "/images/products/rouleau-imprimante-thermique.avif",
                "features" => [
                    "Papier thermique de haute qualité",
                    "Compatible avec la plupart des imprimantes thermiques",
                    "Longue durée d'utilisation",
                    "Facile à installer et à remplacer",
                ],
            ],
            [
                "id" => 4,
                "title" => "Douchette / Lecteur code-barres",
                "short_description" => "Scannez vos codes-barres rapidement et facilement.",
                "description" => "Ce lecteur de code-barres est conçu pour offrir une lecture rapide et précise, même sur des codes endommagés ou difficiles à lire. Son design ergonomique permet une utilisation confortable sur de longues périodes. Disponible en version filaire et sans fil, il s'intègre facilement dans n'importe quel environnement de point de vente.",
                "image" => "/images/products/douchette-lecteur-code-barres.avif",
                "features" => [
                    "Lecture rapide et précise des codes-barres",
                    "Ergonomie adaptée pour une utilisation prolongée",
                    "Compatible avec divers systèmes POS",
                    "Connexion filaire et sans fil disponible",
                ],
            ],
            [
                "id" => 5,
                "title" => "Totem publicitaire interactif",
                "short_description" => "Attirez l'attention avec un affichage interactif.",
                "description" => "Le totem publicitaire interactif est une solution moderne pour promouvoir vos produits et services. Doté d'un écran tactile haute résolution, il permet une interaction fluide avec vos clients. Son design élégant et personnalisable s'intègre parfaitement dans divers environnements, qu'ils soient intérieurs ou extérieurs.",
                "image" => "/images/products/totem-publicitaire-interactif.avif",
                "features" => [
                    "Écran tactile de haute résolution",
                    "Conception élégante et personnalisable",
                    "Facile à installer et à configurer",
                    "Adapté aux environnements intérieurs et extérieurs",
                ],
            ],
            [
                "id" => 6,
                "title" => "Kitchen Display - Écran de cuisine",
                "short_description" => "Améliorez l'organisation en cuisine avec cet écran.",
                "description" => "L'écran de cuisine Kitchen Display est conçu pour optimiser la gestion des commandes en cuisine. Il affiche clairement les commandes en cours et améliore la communication entre la salle et la cuisine. Sa résistance à la chaleur et à l'humidité en fait un outil fiable, même dans des environnements exigeants.",
                "image" => "/images/products/kitchen-display-ecran-de-cuisine.avif",
                "features" => [
                    "Affichage clair des commandes",
                    "Résistance à la chaleur et à l'humidité",
                    "Intégration facile avec les systèmes POS",
                    "Installation flexible selon les besoins de la cuisine",
                ],
            ],
            [
                "id" => 7,
                "title" => "Tiroir de caisse",
                "short_description" => "Sécurisez vos espèces avec ce tiroir robuste.",
                "description" => "Le tiroir de caisse est conçu pour assurer un stockage sécurisé de vos espèces et reçus. Doté de compartiments ajustables, il s'adapte à vos besoins. Sa construction métallique robuste et son système de verrouillage renforcé garantissent une sécurité maximale contre le vol.",
                "image" => "/images/products/tiroir-de-caisse.avif",
                "features" => [
                    "Construction métallique robuste",
                    "Compartiments ajustables pour billets et pièces",
                    "Ouverture automatique via le système POS",
                    "Verrouillage sécurisé pour prévenir les vols",
                ],
            ],
            [
                "id" => 8,
                "title" => "PDA POS / Tablette de prise de commande",
                "short_description" => "Simplifiez vos prises de commandes avec une tablette moderne.",
                "description" => "La tablette PDA POS est un outil indispensable pour les restaurants et commerces. Avec son interface intuitive et sa connectivité Wi-Fi et 4G, elle permet une prise de commande rapide et efficace. Sa légèreté et sa batterie longue durée en font un appareil pratique et adapté à un usage intensif.",
                "image" => "/images/products/pda-pos-tablette-de-prise-de-commande.avif",
                "features" => [
                    "Interface utilisateur intuitive",
                    "Batterie longue durée pour une utilisation continue",
                    "Connexion Wi-Fi et 4G pour une communication fluide",
                    "Légère et facile à transporter",
                ],
            ],
        ];
        
        
        
        return view('components.product-card',['products'=>$products]);
    }
}
