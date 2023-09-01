<?php

namespace Database\Seeders;

use App\Models\desks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        desks::factory()->count(10)->create();
    }
}
