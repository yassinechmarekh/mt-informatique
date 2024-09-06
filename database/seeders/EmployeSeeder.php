<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employe;

class EmployeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employe::create([
            'IdUser' => 2,
            'NomEmploye' => 'CHMAREKH',
            'PrenomEmploye' => 'Yassine',
            'GenreEmploye' => 'Male',
            'SalaireEmploye' => '5000 dhs',
            'RoleEmploye' => 'Developpeur Web',
            'EmailProfessionnelEmploye' => 'yassinechmarekh@gmail.com'
        ]);
    }
}
