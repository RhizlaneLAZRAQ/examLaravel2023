<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
            DB::table('clubs')->insert([
                ['nom' => 'Club des compétitions sportives'],
                ['nom' => 'Club des compétitions culturelles'],
            ]);
        
    }
}
