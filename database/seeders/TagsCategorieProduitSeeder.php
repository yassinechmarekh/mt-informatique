<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TagCategorieProduit;

class TagsCategorieProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TagCategorieProduit::insert([
            [
                'Tag1' => 'Ordinateurs Bureau',
                'Tag2' => 'Ordinateurs Portables',
                'Tag3' => 'Imprimantes',
                'Tag4' => 'Photocopieurs',
                'Tag5' => 'Moniteurs',
                'Tag6' => 'Scanners'
            ],
            [
                'Tag1' => 'Points D\'accès Wi-Fi',
                'Tag2' => 'Modems DSL',
                'Tag3' => 'Cartes Réseau',
                'Tag4' => 'Routeurs Sans Fil',
                'Tag5' => 'Routeurs Ethernet',
                'Tag6' => 'Switch Smart'
            ],
            [
                'Tag1' => 'Claviers Et Souris',
                'Tag2' => 'Haut-Parleurs Et Casques Audio',
                'Tag3' => 'Webcam',
                'Tag4' => 'Disques Dur',
                'Tag5' => 'Cartes Graphiques',
                'Tag6' => 'Sac À Dos'
            ],
            [
                'Tag1' => 'Cartouches',
                'Tag2' => 'Toners',
                'Tag3' => 'Papier D\'impression',
                'Tag4' => 'CD & DVD',
                'Tag5' => 'Câbles & Adaptateurs',
                'Tag6' => 'Bouteille d\'Encre'
            ],
            [
                'Tag1' => 'Video Projecteur',
                'Tag2' => 'Onduleurs',
                'Tag3' => 'Tablettes',
                'Tag4' => 'Téléphones',
                'Tag5' => 'Distructeur de papiers',
                'Tag6' => 'Rack informatique'
            ]
        ]);
    }
}
