<?php

namespace Database\Seeders;

use App\Models\tasks;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        tasks::factory()->count(100)->create();
    }
}
