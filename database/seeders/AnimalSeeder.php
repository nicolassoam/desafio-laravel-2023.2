<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owner = Owner::factory()->create();
        Animal::factory()->count(10)->for($owner)->create();
    }
}
