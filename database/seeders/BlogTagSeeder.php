<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BlogTag;

class BlogTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BlogTag::insert([
            [
                'Tag1' => 'Productivité',
                'Tag2' => 'Bureau',
                'Tag3' => 'Équipements Informatiques',
                'Tag4' => 'Optimisation',
                'Tag5' => 'Technologie',
                'Tag6' => 'ScannTravail Efficienters'
            ],
            [
                'Tag1' => 'Sécurité Réseau',
                'Tag2' => 'Équipements De Sécurité',
                'Tag3' => 'Cyber sécurité',
                'Tag4' => 'Protection Des Données',
                'Tag5' => 'Technologie',
                'Tag6' => 'Équipements Informatiques'
            ],
            [
                'Tag1' => 'Tendances Télécoms',
                'Tag2' => 'Équipements Télécoms',
                'Tag3' => 'Innovations Technologie',
                'Tag4' => 'Tendances Technologiques',
                'Tag5' => 'Technologie',
                'Tag6' => 'Équipements Informatiques'
            ],
            [
                'Tag1' => 'Switchs Intelligents',
                'Tag2' => 'Infrastructure Réseau',
                'Tag3' => 'Équipements Informatiques',
                'Tag4' => 'Technologie Réseau',
                'Tag5' => 'Gestion Réseau',
                'Tag6' => 'Sécurité Réseau'
            ],
            [
                'Tag1' => 'Serveurs',
                'Tag2' => 'Performance',
                'Tag3' => 'Équipements Informatiques',
                'Tag4' => 'Besoins Professionnels',
                'Tag5' => 'Technologie',
                'Tag6' => 'Sécurité'
            ],
            [
                'Tag1' => 'Disque Dur',
                'Tag2' => 'Performance',
                'Tag3' => 'Équipements Informatiques',
                'Tag4' => 'Stockage',
                'Tag5' => 'Fiabilité',
                'Tag6' => 'Choix'
            ]
        ]);
    }
}
