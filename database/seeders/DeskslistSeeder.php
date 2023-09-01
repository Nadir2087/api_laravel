<?php

namespace Database\Seeders;

use App\Models\Deskslist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeskslistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Deskslist::factory()->count(100)->create();
    }
}
