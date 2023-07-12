<?php

namespace Database\Seeders;

use App\Models\Personne;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personne::factory()
            ->count(10000)
            ->create();
    }
}
