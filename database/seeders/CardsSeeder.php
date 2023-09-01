<?php

namespace Database\Seeders;

use App\Models\cards;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        cards::factory()->count(100)->create();
    }
}
