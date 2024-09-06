<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'IdUser' => 1,
            'NomAdmin' => 'CHAMSI',
            'PrenomAdmin' => 'Mohamed',
            'GenreAdmin' => 'Male',
            'AgeAdmin' => 32,
            'RoleAdmin' => 'Directeur Général',
            'EmailProfessionnelAdmin' => 'mohamedchamsi@gmail.com',
            'TelAdmin' => '0613392142'
        ]);
    }
}
