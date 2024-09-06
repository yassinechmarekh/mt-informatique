<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CategorieProduit;
use Illuminate\Support\Str;

class CategorieProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategorieProduit::insert([
            [
                'IdTags' => '1',
                'NomCategorie' => 'Équipements Bureautiques',
                'slug' => Str::slug('equipements bureautiques')
            ],
            [
                'IdTags' => '2',
                'NomCategorie' => 'Equipements Réseaux',
                'slug' => Str::slug('equipements reseaux')
            ],
            [
                'IdTags' => '3',
                'NomCategorie' => 'Accessoires & Composants',
                'slug' => Str::slug('accessoires & composants')
            ],
            [
                'IdTags' => '4',
                'NomCategorie' => 'Consommables Informatiques',
                'slug' => Str::slug('consommables informatiques')
            ],
            [
                'IdTags' => '5',
                'NomCategorie' => 'Divers',
                'slug' => Str::slug('divers')
            ]
        ]);
    }
}
