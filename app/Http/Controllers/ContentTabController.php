<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentTabController extends Controller
{
    public function show()
    {
        // Sample dynamic data (you can replace this with data from a database or other sources)
        $data = [
            [
                'image' => 'b/b-1.jpg',
                'url' => '/solutions/restaurant',
                'title' => 'Découvrir',
                'description' => 'Une caisse enregistreuse adaptée aux besoins des restaurants.',
                'features' => [
                    'Système de caisse tactile avec gestion des paiements et commandes',
                    'Gestion des stocks avancée avec contrôle automatique',
                    'Interface de caisse enregistreuse automatique avec export comptable',
                    'Organisation cuisine avec imprimante caisse et bon de commande',
                    'Tiroir caisse et système de fidélisation clients intégré',
                ]
            ],
            [
                'image' => 'products/odeo-pos.png',
                'url' => '/solutions/restaurant',
                'title' => 'Stock avec Odeo Inventory',
                'description' => 'Gérez votre stock facilement avec Odeo Inventory.',
                'features' => [
                    'Gestion des stocks simplifiée',
                    'Suivi des produits en temps réel',
                    'Alertes automatiques pour le réapprovisionnement',
                ]
            ],
        ];

        // Pass the data to the view
        return view('your-view', compact('data'));
    }
}
