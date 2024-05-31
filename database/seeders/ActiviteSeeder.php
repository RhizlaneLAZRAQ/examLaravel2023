<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ActiviteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activites')->insert([
            ['description' => 'Tournoi de football', 'dateDebut' => '2022-11-03', 'nombreJours' => 5],
            ['description' => 'Tournoi de volley', 'dateDebut' => '2022-09-10', 'nombreJours' => 3],
            ['description' => 'Tournoi de basketball', 'dateDebut' => '2022-10-07', 'nombreJours' => 2],
        ]);
    }
}
