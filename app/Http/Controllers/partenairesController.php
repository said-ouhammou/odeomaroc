<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class partenairesController extends Controller
{
    public function partenairesList(){
        $partenaires = [
            [
                'name' => 'Microsoft',
                'logo' => 'http://localhost:8000/images/partenaires/microsoft.svg',
                'description' => 'Leader dans les solutions logicielles et cloud, fournissant des technologies de pointe.'
            ],
            [
                'name' => 'Google',
                'logo' => 'http://localhost:8000/images/partenaires/google.svg',
                'description' => 'Leader mondial des services internet, incluant la recherche, le cloud computing et l\'IA.'
            ],
            [
                'name' => 'Amazon Web Services',
                'logo' => 'http://localhost:8000/images/partenaires/aws.svg',
                'description' => 'Plateforme cloud de renommée mondiale offrant des solutions évolutives et fiables.'
            ],
            [
                'name' => 'Oracle',
                'logo' => 'http://localhost:8000/images/partenaires/oracle.svg',
                'description' => 'Spécialiste des bases de données d\'entreprise et des services cloud pour les entreprises modernes.'
            ],
            [
                'name' => 'IBM',
                'logo' => 'http://localhost:8000/images/partenaires/ibm.svg',
                'description' => 'Pionnier dans l\'intelligence artificielle et les solutions pour les entreprises.'
            ],
            [
                'name' => 'Adobe',
                'logo' => 'http://localhost:8000/images/partenaires/adobe.svg',
                'description' => 'Leader dans les logiciels de création et de médias numériques.'
            ],
            [
                'name' => 'Visual Studio',
                'logo' => 'http://localhost:8000/images/partenaires/vscode.svg',
                'description' => 'Environnement de développement intégré (IDE) puissant pour le développement d\'applications, utilisé par des millions de développeurs.'
            ],
            [
                'name' => 'Dell',
                'logo' => 'http://localhost:8000/images/partenaires/dell.svg',
                'description' => 'Fabricant de matériel informatique de haute qualité, offrant des solutions pour les entreprises et les particuliers.'
            ],
            [
                'name' => 'D-Link',
                'logo' => 'http://localhost:8000/images/partenaires/dlink.svg',
                'description' => 'Fournisseur mondial de solutions de connectivité réseau, incluant des produits pour la gestion des réseaux et la sécurité.'
            ],
            [
                'name' => 'Mailchimp',
                'logo' => 'http://localhost:8000/images/partenaires/mailchimp.svg',
                'description' => 'Plateforme d\'email marketing pour la création et l\'envoi de campagnes de marketing par email.'
            ],
            [
                'name' => 'Cisco',
                'logo' => 'http://localhost:8000/images/partenaires/cisco.svg',
                'description' => 'Plateforme d\'email marketing pour la création et l\'envoi de campagnes de marketing par email.'
            ],
            [
                'name' => 'Glovo',
                'logo' => 'http://localhost:8000/images/partenaires/glovo.svg', // Replace with actual logo URL
                'description' => 'Service de livraison à la demande, permettant aux utilisateurs de commander des produits de divers commerces et restaurants.'
            ],
            [
                'name' => 'KFC',
                'logo' => 'http://localhost:8000/images/partenaires/kfc.svg',
                'description' => 'Chaîne de restauration rapide américaine spécialisée dans le poulet frit, très populaire au Maroc.'
            ],
            [
                'name' => 'McDonald\'s Maroc',
                'logo' => 'http://localhost:8000/images/partenaires/mcdonald.svg',
                'description' => 'Chaîne de restauration rapide mondialement reconnue, offrant une variété de repas pour tous les goûts à travers le Maroc.'
            ],

        ];
        return view('partenaires',compact('partenaires')); 
    }
}