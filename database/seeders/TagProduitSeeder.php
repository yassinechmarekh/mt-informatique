<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TagProduit;

class TagProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TagProduit::insert([
            [
                'id' => 1,
                'Tag1' => 'PC bureau HP',
                'Tag2' => 'Ordinateur tout-en-un',
                'Tag3' => 'Processeur Intel Core i7',
                'Tag4' => 'Écran tactile Full HD'
            ],
            [
                'id' => 2,
                'Tag1' => 'Volant De Course',
                'Tag2' => 'Logitech G29',
                'Tag3' => 'Xbox One',
                'Tag4' => 'PC Gaming'
            ],
            [
                'id' => 3,
                'Tag1' => 'Vidéoprojecteur Epson',
                'Tag2' => 'Technologie 3LCD',
                'Tag3' => 'Connexions multiples',
                'Tag4' => 'Vidéoprojecteur Full HD'
            ],
            [
                'id' => 4,
                'Tag1' => 'Module WiFi',
                'Tag2' => 'Connectivité sans fil',
                'Tag3' => 'Dual Band 5 GHz',
                'Tag4' => 'Installation facile '
            ],
            [
                'id' => 5,
                'Tag1' => 'Imprimante multifonction',
                'Tag2' => 'Canon',
                'Tag3' => 'Impression couleur rapide',
                'Tag4' => 'Connectivité sans fil'
            ],
            [
                'id' => 6,
                'Tag1' => 'Stockage professionnel',
                'Tag2' => 'Transferts rapides',
                'Tag3' => 'Design élégant',
                'Tag4' => 'Capacité énorme'
            ],
            [
                'id' => 7,
                'Tag1' => 'Performances rapides',
                'Tag2' => 'Stockage polyvalent',
                'Tag3' => 'Design portable',
                'Tag4' => 'Compatibilité étendue'
            ],
            [
                'id' => 8,
                'Tag1' => 'Connectivité performante',
                'Tag2' => 'Adaptabilité réseau',
                'Tag3' => 'Performance sans compromis',
                'Tag4' => 'Design élégant'
            ],
            [
                'id' => 9,
                'Tag1' => 'Souris Logitech',
                'Tag2' => 'Clavier Logitech',
                'Tag3' => 'Clavier AZERTY',
                'Tag4' => 'Clavier',
            ],
            [
                'id' => 10,
                'Tag1' => 'Immersion visuelle',
                'Tag2' => 'Conception moderne',
                'Tag3' => 'Qualité d\'image IPS',
                'Tag4' => 'Connectivité polyvalente'
            ],
            [
                'id' => 11,
                'Tag1' => 'Performances multitâches',
                'Tag2' => 'Stockage SSD rapide',
                'Tag3' => 'Graphismes intégrés',
                'Tag4' => 'Flexibilité du système'
            ],
            [
                'id' => 12,
                'Tag1' => 'Puissance portable',
                'Tag2' => 'Stockage rapide',
                'Tag3' => 'Écran immersif',
                'Tag4' => 'Graphismes haute performance'
            ],
            [
                'id' => 13,
                'Tag1' => 'Polyvalence économique',
                'Tag2' => 'Rapidité',
                'Tag3' => 'Connectivité moderne',
                'Tag4' => 'Qualité d\'impression exceptionnelle'
            ],
            [
                'id' => 14,
                'Tag1' => 'Qualité durable',
                'Tag2' => 'Précision optimale',
                'Tag3' => 'Fiabilité Canon',
                'Tag4' => 'Performances constantes'
            ],
            [
                'id' => 15,
                'Tag1' => 'Performance extrême',
                'Tag2' => 'Réactivité fulgurante',
                'Tag3' => 'Refroidissement efficace',
                'Tag4' => 'Idéal gamers'
            ],
            [
                'id' => 16,
                'Tag1' => 'Ergonomie légère',
                'Tag2' => 'Performances précises',
                'Tag3' => 'Personnalisation avancée',
                'Tag4' => 'Glisse fluide'
            ],
            [
                'id' => 17,
                'Tag1' => 'Performance Gaming',
                'Tag2' => 'Eclairage RGB',
                'Tag3' => 'Confort Ergonomique',
                'Tag4' => 'Résistance Durabilité'
            ],
            [
                'id' => 18,
                'Tag1' => 'Performances optimales',
                'Tag2' => 'Qualité d\'affichage',
                'Tag3' => 'Refroidissement efficace',
                'Tag4' => 'Technologies avancées'
            ],
            [
                'id' => 19,
                'Tag1' => 'Connectivité performante',
                'Tag2' => 'Administration centralisée',
                'Tag3' => 'Sécurité avancée',
                'Tag4' => 'Optimisation des applications'
            ],
            [
                'id' => 20,
                'Tag1' => 'Polyvalence professionnelle',
                'Tag2' => 'Impression rapide',
                'Tag3' => 'Connectivité étendue',
                'Tag4' => 'Qualité d\'impression exceptionnelle'
            ],
            [
                'id' => 21,
                'Tag1' => 'Sac à dos',
                'Tag2' => 'Ordinateur portable',
                'Tag3' => 'Style',
                'Tag4' => 'Praticité'
            ],
            [
                'id' => 22,
                'Tag1' => 'Impression photo',
                'Tag2' => 'Connectivité sans fil',
                'Tag3' => 'Économie d\'encre',
                'Tag4' => 'Fiabilité quotidienne'
            ],
            [
                'id' => 23,
                'Tag1' => 'Serveur entreprise',
                'Tag2' => 'Puissance calcul',
                'Tag3' => 'Gestion à distance',
                'Tag4' => 'Stockage évolutif'
            ],
            [
                'id' => 24,
                'Tag1' => 'Portable performant',
                'Tag2' => 'Écran Full HD',
                'Tag3' => 'Stockage rapide',
                'Tag4' => 'Flexibilité d\'OS'
            ],
            [
                'id' => 25,
                'Tag1' => 'Écran plat',
                'Tag2' => 'Immersion visuelle',
                'Tag3' => 'Connectivité polyvalente',
                'Tag4' => 'Réactivité fluide'
            ],
            [
                'id' => 26,
                'Tag1' => 'Protection électrique',
                'Tag2' => 'Alimentation stable',
                'Tag3' => 'Connectivité pratique',
                'Tag4' => 'Installation facile'
            ],
            [
                'id' => 27,
                'Tag1' => 'Puissance professionnelle',
                'Tag2' => 'Mémoire performante',
                'Tag3' => 'Graphiques haut de gamme',
                'Tag4' => 'Flexibilité d\'utilisation'
            ],
            [
                'id' => 28,
                'Tag1' => 'Connectivité haut débit',
                'Tag2' => 'Routeur 4G',
                'Tag3' => 'Partage facile',
                'Tag4' => 'Antennes externes'
            ],
            [
                'id' => 29,
                'Tag1' => 'Webcam Ultra HD',
                'Tag2' => 'Connectivité Plug-and-Play',
                'Tag3' => 'Son cristallin',
                'Tag4' => 'Zoom numérique'
            ],
            [
                'id' => 30,
                'Tag1' => 'Stockage fiable',
                'Tag2' => 'Capacité généreuse',
                'Tag3' => 'Compatibilité étendue',
                'Tag4' => 'Polyvalence d\'utilisation'
            ],
            [
                'id' => 31,
                'Tag1' => 'Papier professionnel',
                'Tag2' => 'Qualité premium',
                'Tag3' => 'Certification environnementale',
                'Tag4' => 'Polyvalent et résistant'
            ],
            [
                'id' => 32,
                'Tag1' => 'Connectivité étendue',
                'Tag2' => 'Portabilité pratique',
                'Tag3' => 'Polyvalence USB-C',
                'Tag4' => 'Adaptateur multi-ports'
            ]
        ]);
    }
}
