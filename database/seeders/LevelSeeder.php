<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Level;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        level::create([
            'name' => 'A1'
        ]);
        level::create([
            'name' => 'A2'
        ]);
        level::create([
            'name' => 'B1'
        ]);
        level::create([
            'name' => 'B2'
        ]);
        level::create([
            'name' => 'C1'
        ]);
        level::create([
            'name' => 'C2'
        ]);
    }
}
