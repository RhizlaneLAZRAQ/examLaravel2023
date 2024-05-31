<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        DB::table('eleves')->insert([
            ['nom' => 'BADAQUI', 'prenom' => 'Imade', 'club_id' => 1],
            ['nom' => 'MELLALI', 'prenom' => 'Mourad', 'club_id' => 2],
            ['nom' => 'SELLAMI', 'prenom' => 'Amal', 'club_id' => 1],
        ]);
  
    }
}
