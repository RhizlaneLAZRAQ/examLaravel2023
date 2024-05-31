<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActiviteEleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('activite_eleve')->insert([
            ['eleve_id' => 1, 'activite_id' => 1],
            ['eleve_id' => 1, 'activite_id' => 2],
            ['eleve_id' => 1, 'activite_id' => 3],
            ['eleve_id' => 2, 'activite_id' => 1],
            ['eleve_id' => 2, 'activite_id' => 2],
            ['eleve_id' => 3, 'activite_id' => 1],
            ['eleve_id' => 3, 'activite_id' => 3],
        ]);
    }
}
